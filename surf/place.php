<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Surf</title>
    <link rel="icon" type="image/svg" href="favicon.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="static/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="static/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="static/images/favicons/favicon-16x16.png">
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@500&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/nav.css">
</head>

<body>
<?php include("header.php")?>

    <!-- ****************** ALL CONTENT HERE ******************* -->



    <main>
        
        <?php

            if (isset($_GET['country'])) {
                require './includes/dbh.inc.php';
            
                $pid = $_GET['country'];            
            
                $sql = "SELECT * from destinations where pid= ?;";
                $stmt= mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location: ./index.php?sql_error1");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "s", $pid);
                    mysqli_stmt_execute($stmt);
                    $result = $stmt->get_result();
                    if($result->num_rows == 0){
                        header("Location: ./index.php?error=noplace");
                        exit();
                    }
                    else{
                        while($row = $result->fetch_assoc()) {
                            $pid = $row['pid'];
                            $country = $row['country'];
                            $lat =$row['lat'];
                            $lon=$row['lon'];
                            $desc=$row['description'];
                            $pictures=$row['pictures']
                            ?>
                            
                            
                            
                            
                            <?php
                            // echo '"'.$country.'"'.':['.$lat.','.$lon.',"'.$pic.'",'.$pid.'],';
                        }
                    }
                    mysqli_stmt_close($stmt);
                    mysqli_close($conn);
                }
            }
        ?>

    </main>
   

    <?php include("footer.html")?>

    <!-- **************** SCRIPTS ***************** -->
   
    <script>
        const body = document.querySelector('body');
        const loadingScreen = document.querySelector('.loading-screen');
        // loadingScreen.classList.toggle('complete');
        // setTimeout(function () { body.classList.add('complete'); }, 2000);
        body.classList.add('complete');
        setTimeout(function () { loadingScreen.classList.add('hide'); }, 2000);
    </script>
</body>

</html>