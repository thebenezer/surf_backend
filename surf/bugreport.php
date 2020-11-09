<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Surf</title>

    <!-- FAVICONS -->
    <link rel="icon" type="image/svg" href="favicon.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="static/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="static/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="static/images/favicons/favicon-16x16.png">
    
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    
    <!-- STYLES -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/content.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/form.css">

    
</head>

<body>
<?php include("header.php")?>

    <!-- ****************** ALL CONTENT HERE ******************* -->



    <main>
        <div class="page-heading">
            <h1>Found a bug?</h1>
        </div>
        <section class="container">
            <article class="article-content">
                <form class="forms">
                    <h2>Send us a bug report</h2> 
                        <label>
                            <input type="text" required />
                            <div class="label-text">Name</div>
                        </label>
                        <label>
                            <input type="email" required />
                            <div class="label-text">Email Address</div>
                        </label>
                        <label>
                            <input type="text" required />
                            <div class="label-text">Issue</div>
                        </label>
                        <label class="textbox">
                            <div class="label-textarea">Please Elaborate</div>
                            <textarea></textarea>
                        </label>
                   
                    <button>Submit</button>
                </form>
            </article>
        </section>
        
    </main>


    <?php include("footer.html")?>




    <!-- **************** SCRIPTS ***************** -->
    
    <script src="./js/forms.js"></script>
    <script type='text/javascript' src='./js/bug.js'></script>
    <script type='text/javascript'>
        // default fruit fly bug:
        new BugController({'minBugs':10, 'maxBugs':30, 'mouseOver':'die'});

        // default spiders:
        new SpiderController({'minBugs':3, 'maxBugs':20, 'mouseOver':'die'});
    </script>
    <!-- <script src="/js/3dmodel.js" type="module"></script> -->
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