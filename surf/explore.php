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
    <link rel="stylesheet" href="./css/search.css">
</head>

<body>
<?php include("header.php")?>

    <!-- ****************** ALL CONTENT HERE ******************* -->



    <main>
        <section class="searching">
                <a id="pop-info">Place </a>
                <!-- <div class="boxcontainer">
                    <table class="elementcontainer">
                        <tr>
                            <td>
                                <input type="text" placeholder="Search" class="search">
                            </td>
                            <td>
                                <a href="#"><i class="material-icons">search</i></a>
                            </td>
                        </tr>
                    </table>
                </div> -->
               
                <canvas class="search_earth" id="c"></canvas>
                <div class="searchcont">
                    <form class="search_bar">
                        <input type="text" placeholder="Beach, wildlife, jungle..." name="search_query"class="search" autocomplete="off">
                        <!-- <input list="filters" name="browser" class="search" placeholder="Beach, wildlife, jungle..."> -->
                        <!-- <datalist id="filters">
                            <option value="Beach">
                            <option value="Wildlife">
                            <option value="Forest">
                            <option value="Trekking">
                            <option value="Ice">
                            <option value="Luxury">
                        </datalist> -->
                        <button type="submit" name="search_go"><img src="./assets/images/search.png" alt="Search"></button>
                        <button type="reset" name="reset_go">Clear</button>
                    </form>
                </div>
        </section>

    </main>
   

    <?php include("footer.html")?>

    <!-- **************** SCRIPTS ***************** -->
   
    <script type="text/javascript" src="./js/getplaces.php"></script>
    <script src="./js/click.js" type="module"></script>
    <!-- <script type="text/javascript" src="./js/explore.js" type="module"></script> -->
    <!-- <script>
        const body = document.querySelector('body');
        const loadingScreen = document.querySelector('.loading-screen');
        // loadingScreen.classList.toggle('complete');
        // setTimeout(function(){ body.classList.add('complete'); }, 2000);
        body.classList.add('complete');
        setTimeout(function(){ loadingScreen.classList.add('hide'); }, 2000);
    </script> -->
</body>

</html>