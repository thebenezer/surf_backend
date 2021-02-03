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
    <link rel="stylesheet" href="./css/testimonial.css">
</head>

<body>
   <?php include("header.php")?>

    <!-- ****************** ALL CONTENT HERE ******************* -->


	<main>
        <br><br>
        <h1 style="font-size: 3em;text-align: center; margin-top: 10vh;">Reviews</h1>
        <section class="container">
            <div class="testimonials">
                
                <div class="test-body">
                    <div class="item">
                        <img src="./assets/reviews/p1.jpg">
                        <div class="name" style="text-align: center;">Vamsi Kumar</div>
                        <small class="desig">Bangalore</small>
                        <div class="share">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>Nice place to plan your next trip. Would've missed many attractions on our trip to Italy if not for your website.</p>
                    </div>
                    <div class="item">
                        <img src="./assets/reviews/p2.jpg">
                        <div class="name" style="text-align: center;">John Statham</div>
                        <small class="desig">London</small>
                        <div class="share">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <p>As a solo traveler, I rely on a trusted company that can get me safely from point A to B, especially when I’m unfamiliar with the area. After my third trip with Surf, I feel safe to assume that they check all of these boxes off for me!</p>
                    </div>
                    <div class="item">
                        <img src="./assets/reviews/p3.webp">
                        <div class="name" style="text-align: center;">Hideo Kojima</div>
                        <small class="desig">Tokyo</small>
                        <div class="share">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <p>What an incredible experience we had! The trip was perfectly organized, the accommodations great, the food fantastic, especially all the fish we had.</p>
                    </div>
				</div>  
				<div class="test-body">
                    <div class="item">
                        <img src="./assets/reviews/p4.webp">
                        <div class="name" style="text-align: center;">Mikhail Boris</div>
                        <small class="desig">Moscow</small>
                        <div class="share">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p>This trip was totally amazing. beautiful scenery, wonderful guides, great food and full of lots off active adventures.</p>
                    </div>
                    <div class="item">
                        <img src="./assets/reviews/p5.jpg">
                        <div class="name" style="text-align: center;">Emily Parker</div>
                        <small class="desig">New York</small>
                        <div class="share">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <p>My favourite website for all things travel! The new bucket list is a nice touch.</p>
                    </div>
                    <div class="item">
                        <img src="./assets/reviews/p6.jpg">
                        <div class="name" style="text-align: center;">Roberto Casellati</div>
                        <small class="desig">Rome</small>
                        <div class="share">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <p>When I started planning my New Zealand adventure vacation, more than anything, I wanted to be sure it included the right mix of activity and relaxation. Surf helped me plan the best places to visit in the limited time i had.</p>
                    </div>
                </div>  
            </div>
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