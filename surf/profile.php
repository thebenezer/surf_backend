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
        include("header.php");

        if (isset($_SESSION['uid'])) {
            require './includes/dbh.inc.php';
        
            $uid = $_SESSION['uid'];         
            
            // ************************GET USER DETAILS*********************
            $sql = "SELECT * from user_profile where uid= ?;";
            $stmt= mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ./index.php?sql_error1");
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
                    $row = $result->fetch_assoc();
                    $name = $row['name'];
                    $jdate = $row['join_date'];
                    $address =$row['address'];
                    $phno=$row['phno'];
                    $age=$row['age'];
                    $profilepic=$row['profilepic'];
                    $backpic=$row['backpic'];
                    $about=$row['about'];
                }
                mysqli_stmt_close($stmt);
            }

            // ************************GET TRAVELLED INFO*********************
            $sql = "SELECT pid,trip_date from travelled where uid= ?;";
            $stmt= mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                $num_trav="-";
            }
            else {
                mysqli_stmt_bind_param($stmt, "s", $uid);
                mysqli_stmt_execute($stmt);
                $result = $stmt->get_result();
                $num_trav = 0;
                $travelled=[];
                if($result->num_rows != 0){
                    while($row = $result->fetch_assoc()){
                        $travelled[]=$row;
                        // array_push($travelled,$row['pid']);
                        $num_trav+=1;
                    }
                }
                mysqli_stmt_close($stmt);
            }

            // ************************GET BUCKET LIST INFO*********************
            $sql = "SELECT pid,dream_date from bucket_list where uid= ?;";
            $stmt= mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                $num_bucket="-";
            }
            else {
                mysqli_stmt_bind_param($stmt, "s", $uid);
                mysqli_stmt_execute($stmt);
                $result = $stmt->get_result();
                $num_bucket=0;
                $bucketlist=[];
                if($result->num_rows != 0){
                    while($row = $result->fetch_assoc()){
                        $num_bucket+=1;
                        $bucketlist[]=$row;
                        // array_push($bucketlist, $row['pid']);
                    }
                }
                mysqli_stmt_close($stmt);
            }

            // ************************GET BADGES*********************
            $sql = "SELECT * from badges where uid= ?;";
            $stmt= mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                $num_badges="-";
            }
            else {
                mysqli_stmt_bind_param($stmt, "s", $uid);
                mysqli_stmt_execute($stmt);
                $result = $stmt->get_result();
                $num_badges=0;
                $badge_pic=[];
                if($result->num_rows != 0){
                    $row = $result->fetch_assoc();
                    $num_badges += 1;
                    array_push( $badge_pic,strtolower($row['badge_name']));
                    // echo $num_badges;
                }
                mysqli_stmt_close($stmt);
            }
        ?>
    <!-- ****************** ALL CONTENT HERE ******************* -->

    <main>
        <section class="container">
            <article class="profile">
                <div class="card">
                    <!-- <img class="profile_pic" src="https://m.media-amazon.com/images/S/aplus-media/vc/cab6b08a-dd8f-4534-b845-e33489e91240._CR75,0,300,300_PT0_SX300__.jpg" alt=""> -->
                    <div class="profile_pic" style="background-image: url('./assets/profile_pics/<?php echo $backpic;?>');"></div>
                    <img class="globe_link" src="./assets/profile_pics/<?php echo $profilepic;?>">
                    <div class="card_info">
                        <div class="uid"><?php echo $uid;?></div>
                        <h2 class="name"><?php echo $name;?></h2>
                        <div class="desc"><?php echo $about;?></div>
                        <div class="actions">
                            <a href="editprofile.php"><img src="./assets/images/edit.svg" alt=""></a>
                            <!-- <button><img src="./assets/images/friends.svg" alt=""></button> -->
                            <!-- <button><img src="./assets/images/paper-plane.svg" alt=""></button> -->
                        </div>
                    </div>
                </div>
                <div class="badge-card">
                    <div class="badge" >
                        <img class="badge_pic" src="./assets/badges/fledgling.jpg" alt="">
                        <canvas class="badge_pic" id="c"></canvs>
                    </div>
                    <!-- <div class="globe_link"></div> -->
                    <div class="card_info">
                        <div class="badge">
                            <div>
                            <!-- <p><b>Badges Earned&nbsp;&nbsp;:</b> 12</p> -->
                                <p><b>Badges Earned&nbsp;&nbsp;:</b> <?php echo $num_badges;?></p>
                            </div>
                            <div>
                                <p><b>Travelled&nbsp;&nbsp;&nbsp; :</b> <?php echo $num_trav;?></p>
                                <p><b>Bucket List :</b> <?php echo $num_bucket;?></p>
                            </div>
                        </div>
                        <div class="actions">
                            <a><img src="./assets/images/paper-plane.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </article>
            <div class="flipbox" >
                <h3 class="fliptext">Travelled</h3>
                <input type="checkbox" class="flip_list" id="flip" onclick="toggleList()">
                <h3 class="fliptext">Wishlist</h3>
                <h2 class="mobile_fliptext"></h2>
            </div>
            <div class="mixed_grid travelled"> 
                <?php
                // ************************TRAVELLED PLACE DETAILS*********************
                foreach($travelled as $tplace){
                    // echo '<p>'.$bprint.'</p>';
                    $sql = "SELECT country,description,small_pic from destinations where pid=?;";
                    $stmt= mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        $bucketPlaces="-";
                    }
                    else {
                        mysqli_stmt_bind_param($stmt, "s", $tplace['pid']);
                        mysqli_stmt_execute($stmt);
                        $result = $stmt->get_result();
                        // $pic_arr = preg_split("/\^/", $pictures); 

                        if($result->num_rows != 0){
                            $row = $result->fetch_assoc();
                            echo ' <div class="place_card travelled">
                                    <a href="./place.php?country='.$tplace['pid'].'" class="pcard">
                                        <div class="p_left">
                                            <p class="uid">'.$row["country"].'</p>
                                            <p class="p_desc">Visited : '.$tplace['trip_date'].'</p>
                                        </div>
                                        <div class="p_right" style="background-image: url(./assets/placeimages/'.htmlspecialchars($row['small_pic']).');"></div>
                                    </a>
                                </div>';
                        }
                        mysqli_stmt_close($stmt);
                    }
                }
                ?>
                </div>
                <div class="mixed_grid bucketlist">
                <?php
                // ************************BUCKET PLACE DETAILS*********************
                foreach($bucketlist as $bplace){
                    // echo '<p>'.$bprint.'</p>';
                    $sql = "SELECT country,small_pic from destinations where pid=?;";
                    $stmt= mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        $bucketPlaces="-";
                    }
                    else {
                        mysqli_stmt_bind_param($stmt, "s", $bplace['pid']);
                        mysqli_stmt_execute($stmt);
                        $result = $stmt->get_result();
                        if($result->num_rows != 0){
                            $row = $result->fetch_assoc();
                            echo ' <div class="place_card bucketlist">
                                    <a href="./place.php?country='.$bplace['pid'].'" class="pcard">
                                        <div class="p_left">
                                            <p class="uid">'.$row["country"].'</p>
                                            <p class="p_desc">Dreamt-on : '.$bplace['dream_date'].'</p>
                                        </div>
                                        <div class="p_right" style="background-image: url(./assets/placeimages/'.htmlspecialchars($row['small_pic']).');"></div>
                                    </a>
                                </div>';
                        }
                        mysqli_stmt_close($stmt);
                    }
                }
                // **********************CLOSE CONNECTION****************************
                mysqli_close($conn);
            }
            else{
                header("Location: ./index.php?error=illegal_access");
                exit();
            }
                ?>
                <!-- <img src="./assets/placeimages/indonesia/1.jpg" style="width:100%">
                <img src="./assets/placeimages/indonesia/2.jpg" style="width:100%">
                <img src="./assets/placeimages/indonesia/3.jpg" style="width:100%">
                <img src="./assets/placeimages/indonesia/4.jpg" style="width:100%">
                <img src="./assets/placeimages/indonesia/5.jpg" style="width:100%"> -->
            </div>        </section>
    </main>
   

    <?php include("footer.html")?>

    <!-- **************** SCRIPTS ***************** -->
    <script type="text/javascript" src="./js/getplaces.php"></script>
    <script src="./js/profile_earth.js" type="module"></script> 
    </body>
</html>