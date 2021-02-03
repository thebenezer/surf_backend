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
            <h1>Privacy Policy</h1>
            <div class="clock-airplane"><img src="./assets/images/airplane.svg" alt=""></div>
        </div>
        <section class="container">
            <article class="article-content" style="text-align:left">
                
                <br><h3>Here We Go</h3><br>
                <p>We at Surf know that you care how information about you is used and shared, and we appreciate your trust that we will do so carefully and sensibly.</p>
                <div>
                    <ul>
                        <li><a href="#l1">What User Data We Collect</a></li>
                        <li><a href="#l2">Why We Collect Your Data</a></li>
                        <li><a href="#l3">Safeguarding and Securing the Data</a></li>
                        <li><a href="#l4">Our Cookie Policy</a></li>
                        <li><a href="#l5">Links to Other Websites</a></li>
                        <li><a href="#l6">Third Parties</a></li>
                        <li><a href="#l7">A Final Word</a></li>
                        </ul>
                </div>
                <br>
                <h3 id="l1">What User Data We Collect</h3><br>
                <p>When you visit the website, we may collect the following data:</p>
                <ul>
                  <li>Your contact information and email address before you make a purchase or if you subscribe to our newsletter.</li>
                  <li>Other information such as interests and preferences.</li>
                  <li>Data profile regarding your interests on our website.</li>
                </ul><br>
          
          
                <h3 id="l2">Why We Collect Your Data</h3><br>
                <p>We collect your data for several reasons:</p>
                <ul>
                  <li>To improve our services and products.</li>
                  <li>To better understand your needs.</li>
                  <li>To customize our website according to your online behavior and personal preferences.</li>
                  <li>To send you promotional emails containing the information we think you will find interesting.</li>
                  <li>To contact you to fill out surveys to better determine your interests.</li>
                </ul><br>
          
          
                <h3 id="l3">Safeguarding and Securing the Data</h3><br>
                <p>Surf is committed to securing your data and keeping it confidential.
                  Surf has done all in its power to prevent data theft, unauthorized access and disclosure.
                  We will safeguard all the information we collect online. Any online transanction made on our website is safely redirected to <a href="https://www.paypal.com">PayPal.com</a>.
                  We store only your address, contact information (and order ID if you have made any purchases) on our servers.</p>
                <br>
                <h3 id="l4">Our Cookie Policy</h3><br>
                <p>We use cookies only to track our website traffic, to store product interests and cart items. They are strictly used to monitor which pages you find useful and which you do not so that we can provide a better experience for you.
                  The data we collect by using cookies is used to customize our website to your needs and for statistical analysis. We do not give away your data to any third parties.</p>
                <p>Once you agree to allow our website to use cookies, you also agree to use the data it collects regarding your online behavior (analyze web traffic, store product interests). Please note that cookies don't allow us to gain control of your computer in any way.
                If you want to disable cookies, you can do it by accessing the settings of your internet browser. </p>
                <br>
                <h3 id="l5">Links to Other Websites</h3><br>
                <p>Our website contains links that lead to paypal.com. If you click on these links, Surf is not held responsible for your data and privacy protection.
                  Visiting those websites is not governed by this privacy policy agreement.
                  Make sure to read PayPal's privacy policy  <a href="https://www.paypal.com/in/webapps/mpp/ua/privacy-full">here</a>.</p>
                <br>
                <h3 id="l6">Third Parties</h3><br>
                <p>Surfwill not lease, sell or distribute your personal information to any third parties, unless we have your permission. We might do so if the law forces us.
                Your personal information will be used when we need to send you promotional materials if you agree to this privacy policy. You have the right to unsubscribe from our mailing list in order to stop receiving any promotional emails</p>
                <p>At some point, you might wish to restrict the use and collection of your personal data. When you are filling the forms on the website, make sure to read our privacy policy before you submit your details. If you have already agreed to share your information with us, feel free to contact us via email through our contact page and we will be more than happy to change this for you.</p>
                <br>
                <h3 id="l7">A Final Word</h3><br>
                <p>If you want to make sure that you are up to date with the latest changes, we advise you to frequently visit this page. We reserve the right to change this policy at any given time, of which you will be promptly updated. We respect your privacy.</p>
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