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
<?php include("header.php")?>

    <!-- ****************** ALL CONTENT HERE ******************* -->



    <main>
        <h1 style="font-size: 3em;text-align: center; margin-top: 20vh;">Contact Us</h1>
        <section class="container">
            
            <form class="forms">
                <label>
                    <input type="text" required />
                    <div class="label-text">First Name</div>
                </label>
                <label>
                    <input type="text" required />
                    <div class="label-text">Last Name</div>
                </label>
                <label>
                    <input type="email" required />
                    <div class="label-text">Email Address</div>
                </label>
                <label class="textbox">
                    <div class="label-textarea">Message</div>
                    <textarea></textarea>
                </label>
                <button>Submit</button>
            </form>
        </section>

    </main>


    <?php include("footer.html")?>




    <!-- **************** SCRIPTS ***************** -->
    
    <script src="./js/forms.js"></script>
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