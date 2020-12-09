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
    <link rel="stylesheet" href="./css/content.css">
    <link rel="stylesheet" href="./css/nav.css">
</head>

<body>
   <?php 
                   include("header.php")?>
    <!-- ****************** ALL CONTENT HERE ******************* -->

    <main>
        <section class="container">
            <article class="profile">
                <div class="card">
                    <div class="img-avatar"></div>
                    <div class="card-text">
                        <div class="portada"></div>
                        <div class="title-total">   
                            <div class="title"><?php echo $_SESSION['uid'];?></div>
                            <h2><?php echo $_SESSION['uid'];?></h2>
                            <div class="desc">Morgan has collected ants since they were six years old and now has many dozen ants but none in their pants.</div>
                            <div class="actions">
                                <button><img src="./assets/images/edit.svg" alt=""></button>
                                <button><img src="./assets/images/friends.svg" alt=""></button>
                                <button><img src="./assets/images/paper-plane.svg" alt=""></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="details">
                    <h1>Hi <?php echo $_SESSION['uid'];?></h1><br>
                    <p>This is your profile page. It contains all information regarding your travel interests.</p><br>
                    <?php
                    if (isset($_SESSION['uid'])) {
                        require './includes/dbh.inc.php';
                    
                        $uid = $_SESSION['uid'];            
                        $sql = "SELECT * from user_profile where uid= ?;";
                        $stmt= mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt,$sql)){
                            header("Location: ./index.php?sql_error1");
                            // echo "sql_error1";
                            exit();
                        }
                        else {
                            mysqli_stmt_bind_param($stmt, "s", $uid);
                            mysqli_stmt_execute($stmt);
                            $result = $stmt->get_result();
                            if($result->num_rows == 0){
                                header("Location: ./index.php?error=nouser");
                                exit();
                            }
                            else{
                                while($row = $result->fetch_assoc()) {
                                    $jdate = $row['join_date'];
                                    $address =$row['address'];
                                    $phno=$row['phno'];
                                    $age=$row['age'];
                                    $profilepic=$row['profilepic'];
                                    echo $jdate;
                                    echo $address;
                                    echo $phno;
                                    echo $age;
                                    echo $profilepic;
                                    // splitting description and images

                                    // $desc_arr = preg_split("/\^/", $desc);
                                    // $pic_arr = preg_split("/\^/", $pictures); 
                                }
                            }
                            mysqli_stmt_close($stmt);
                            mysqli_close($conn);
                        }
                    }
                    else{
                        header("Location: ./index.php?error=illegal_access");
                        exit();
                    }
                    ?>
                </div>
                <!-- <canvas id="c"></canvas> -->
            </article>
        </section>
    </main>
   

    <?php include("footer.html")?>

    <!-- **************** SCRIPTS ***************** -->
    <!-- <script type="text/javascript" src="./js/getplaces.php"></script> -->
    <!-- <script src="./js/click.js" type="module"></script>  -->
    </body>
    <script>
        const body = document.querySelector('body');
        const loadingScreen = document.querySelector('.loading-screen');
        // loadingScreen.classList.toggle('complete');
        // setTimeout(function(){ body.classList.add('complete'); }, 2000);
        body.classList.add('complete');
        setTimeout(function(){ loadingScreen.classList.add('hide'); }, 2000);
    </script>
</html>