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
   <?php include("header.html")?>

    <!-- ****************** ALL CONTENT HERE ******************* -->



    <main>
        
        <section class="container">
            <article class="about">
                <div>
                    <h1>About Surf</h1><br>
                    <p>Surf is an interactive guide to the world’s best travel destinations.</p>
                    <br><p>We give you the tools to plan your next trip: in-depth information on destinations; inspiring ideas on what to see and do.</p>
                    <br><p>Explore the world with our intuitive and easy to use 3D visualization by just pointing and clicking where you want to visit on the globe.</p>
                    <br><p>If you would like to contribute to the work we do at Surf, do look at our <a href="join.html">Join us</a> page</p>
                </div>
                <img src="./assets/images/3dearth.png">
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