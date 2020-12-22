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
    <link rel="stylesheet" href="./css/form.css">

    
</head>

<body>
<?php include("header.php");

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
    mysqli_close($conn);
}
else{
    header("Location: ./index.php?error=illegal_access");
    exit();
}
?>

    <!-- ****************** ALL CONTENT HERE ******************* -->



    <main>
        <h1 style="font-size: 3em;text-align: center; margin-top: 20vh;">Edit Profile</h1>
        <section class="container">
            <article class="profile">
                <form action="./includes/edit.inc.php" method="post" enctype="multipart/form-data" class="edit_profile">
                    <label>
                        <input type="text" name="name" placeholder="<?php echo $name;?>" value="<?php echo $name;?>"/>
                        <div class="label-text">Full Name</div>
                    </label>
                    <label>
                        <input type="text" name="phno"placeholder="<?php echo $phno;?>" value="<?php echo $phno;?>"/>
                        <div class="label-text">Pnone Number</div>
                    </label>
                    <label>
                        <input type="number" min="0" name="age" placeholder="<?php echo $age;?>" value="<?php echo $age;?>"/>
                        <div class="label-text">Age</div>
                    </label>
                    <label>
                        <input type="text" name="address" placeholder="<?php echo $address;?>" value="<?php echo $address;?>"/>
                        <div class="label-text">Location/Country</div>
                    </label>
                    <label>
                        <div class="about-text">About</div>
                        <textarea class="editabout" name="about"placeholder="<?php echo $about;?>"><?php echo $about;?></textarea>
                    </label>
                    <label for="profile_pic"><b>Upload Profile Picture</b></label>
                    <input type="file" name="profile_pic">
                    <label for="back_pic"><b>Upload Background Picture</b></label>
                    <input type="file" name="back_pic">
                    <br>
                    <!-- <br>
                    <label>
                        <input type="password"/>
                        <div class="label-text">Password</div>
                    </label> -->
                    <button type="submit" name="edit-submit">Confirm</button>
                </form>
                <div class="card" style="height:300px;">
                    <!-- <img class="profile_pic" src="https://m.media-amazon.com/images/S/aplus-media/vc/cab6b08a-dd8f-4534-b845-e33489e91240._CR75,0,300,300_PT0_SX300__.jpg" alt=""> -->
                    <div class="profile_pic" style="background-image: url('./assets/profile_pics/<?php echo $backpic;?>');"></div>
                    <img class="globe_link" src="./assets/profile_pics/<?php echo $profilepic;?>">
                    <div class="card_info">
                        <div class="uid"><?php echo $uid;?></div>
                        <h2 class="name"><?php echo $name;?></h2>
                        <div class="desc"><?php echo $about;?></div>
                        <div class="actions">
                            <a href="profile.php"><img src="./assets/images/view.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </article>
        </section>

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