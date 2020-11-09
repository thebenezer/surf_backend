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
   <?php include("header.php")?>
    <!-- ****************** ALL CONTENT HERE ******************* -->

    <main>
        <div class="page-heading">
            <h1>Profile Page</h1>
            <div class="clock-airplane"><img src="./assets/images/airplane.svg" alt=""></div>
        </div>
        <section class="container">
            <article class="article-content">
                <br><h3>Hi <?php echo $_SESSION['uid'];?></h3><br>
                <p>This is your profile page. It contains all information regarding your travel interests.</p><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet beatae quidem, sed ut commodi et ullam minus accusamus quaerat dolorum voluptates facere delectus sunt odio laudantium rem. Error, repudiandae excepturi?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet beatae quidem, sed ut commodi et ullam minus accusamus quaerat dolorum voluptates facere delectus sunt odio laudantium rem. Error, repudiandae excepturi?</p>
                <br><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet beatae quidem, sed ut commodi et ullam minus accusamus quaerat dolorum voluptates facere delectus sunt odio laudantium rem. Error, repudiandae excepturi?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet beatae quidem, sed ut commodi et ullam minus accusamus quaerat dolorum voluptates facere delectus sunt odio laudantium rem. Error, repudiandae excepturi?</p>
                <br>
            </article>
        </section>

    </main>
   

    <?php include("footer.html")?>

    <!-- **************** SCRIPTS ***************** -->
    
    <!-- <script src="/js/3dmodel.js" type="module"></script> -->
    <script>
        const body = document.querySelector('body');
        const loadingScreen = document.querySelector('.loading-screen');
        // loadingScreen.classList.toggle('complete');
        // setTimeout(function(){ body.classList.add('complete'); }, 2000);
        body.classList.add('complete');
        setTimeout(function(){ loadingScreen.classList.add('hide'); }, 2000);
    </script>
</body>

</html>