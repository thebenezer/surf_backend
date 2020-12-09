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
    <link rel="stylesheet" href="./css/places.css">
    
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
                            $pictures=$row['pictures'];

                            // splitting description and images

                            $desc_arr = preg_split("/\^/", $desc);
                            $pic_arr = preg_split("/\^/", $pictures); 
                            ?>
                            

                            <?php
                                                     
                            //print_r($desc_arr[0]);

                            
                            
                            
                            
                            // echo '"'.$country.'"'.':['.$lat.','.$lon.',"'.$pic.'",'.$pid.'],'; ?>
                            
                            <section class="container">
                                <article class="article-content">
                                    <h1 style="font-size: 3em;text-align: center; margin-top: 15vh;"><?=$country?></h1>
                                    <div class="container main-container" style="margin-top: 70px; margin-bottom: 90px;">                                  

                                    <div class="blog-item blog-item4">
                                        <div class="blog-item-image blog-item-image4"
                                            style="background-image: url('<?=$pic_arr[0]?>');">
                                        </div>
                                        <div class="blog-item-content">
                                            <h1><?=$desc_arr[0]?></h1>
                                            <?=$desc_arr[1]?>
                                            <div class="blog_post_image_grid">

                                                <img src="<?=$pic_arr[9]?>"/>
                                                <img src="<?=$pic_arr[10]?>"/>
                                                <img src="<?=$pic_arr[11]?>"/>
                                                <img src="<?=$pic_arr[12]?>"/>
                                                <img src="<?=$pic_arr[13]?>"/>
                                                <img src="<?=$pic_arr[14]?>"/>
                                                <img src="<?=$pic_arr[15]?>"/>
                                                <img src="<?=$pic_arr[16]?>"/>
                                            </div>
                                            <!--image grid -->

                                        </div>
                                        <!--blog item content -->
                                    </div>
                                    <!--blog item -->

                                    <div class="blog-item blog-item1">
                                        <div class="blog-item-image"
                                            style="background-image: url('<?=$pic_arr[1]?>');">
                                        </div>
                                        <div class="blog-item-content">
                                            <h1><?=$desc_arr[2]?></h1>
                                            <?=$desc_arr[3]?>
                                        </div>
                                        <!--blog item content -->
                                    </div>
                                    <!--blog item -->

                                    <div class="blog-item blog-item2">
                                        <div class="blog-item-image"
                                            style="background-image: url('<?=$pic_arr[2]?>');">
                                        </div>
                                        <div class="blog-item-content">
                                        <h1><?=$desc_arr[4]?></h1>
                                        <?=$desc_arr[5]?>
                                        </div>
                                        <!--blog item content -->
                                    </div>
                                    <!--blog item -->

                                    <div class="blog-item blog-item3">
                                        <div class="blog-item-image"
                                            style="background-image: url('<?=$pic_arr[3]?>');">
                                        </div>
                                        <div class="blog-item-content">
                                            <h1><?=$desc_arr[6]?></h1>
                                            <?=$desc_arr[7]?>
                                        </div>
                                        <!--blog item content -->
                                    </div>
                                    <!--blog item -->

                                    <div class="blog-item blog-item5">
                                        <div class="blog-item-image"
                                            style="background-image: url('<?=$pic_arr[4]?>');">
                                        </div>
                                        <div class="blog-item-content">
                                            <h1><?=$desc_arr[8]?></h1>
                                            <?=$desc_arr[9]?>
                                        </div>
                                        <!--blog item content -->
                                    </div>
                                    <!--blog item -->

                                    <div class="blog-item blog-item6">
                                        <div class="blog-item-image"
                                            style="background-image: url('<?=$pic_arr[5]?>');">
                                        </div>
                                        <div class="blog-item-content">
                                            <h1><?=$desc_arr[10]?></h1>
                                            <?=$desc_arr[11]?>
                                        </div>
                                        <!--blog item content -->
                                    </div>
                                    <!--blog item -->
                                    <div class="blog-item blog-item7">
                                        <div class="blog-item-image blog-item-image7"
                                            style="background-image: url('<?=$pic_arr[6]?>');">
                                        </div>
                                        <div class="blog-item-content">
                                            <h1><?=$desc_arr[12]?></h1>
                                            <?=$desc_arr[13]?>
                                        </div>
                                        <!--blog item content -->
                                    </div>
                                    <!--blog item -->

                                    <div class="blog-item blog-item8">
                                        <div class="blog-item-image"
                                            style="background-image: url('<?=$pic_arr[7]?>');">
                                        </div>
                                        <div class="blog-item-content">
                                            <h1><?=$desc_arr[14]?></h1>
                                            <?=$desc_arr[15]?>
                                        </div>
                                        <!--blog item content -->
                                    </div>
                                    <!--blog item -->
                                    <div class="blog-item blog-item9">
                                        <div class="blog-item-image"
                                            style="background-image: url('<?=$pic_arr[8]?>');">
                                        </div>
                                        <div class="blog-item-content">
                                            <h1><?=$desc_arr[16]?></h1>
                                            <?=$desc_arr[17]?>
                                        </div>
                                        <!--blog item content -->
                                    </div>
                                    <!--blog item -->
                                    
                                    </div>
                                </article>
                            </section>

                                
                            
                        <?php
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