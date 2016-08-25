<!DOCTYPE html>
<html>
<head>
    <title>404 Error</title>
    <?php
    @include("partials/head.php")
    ?>

</head>
<body class="stick">

<section class="static-content transition white">
    <div class="stripe-error-page grey absolute wow animated fadeInDownBig" data-wow-delay="0.6s"></div>
    <div class="container flex error">
        <div class="error-inner flex">
            <div class="error-number flex">
                <span class="yellow-color wow animated fadeInDownUp" data-wow-delay="0s">4</span>
                <span class="blue-color wow animated fadeInDownBig" data-wow-delay="0.2s">0</span>
                <span class="pink-color wow animated fadeInDownUp" data-wow-delay="0.4s">4</span>
            </div>
            <div class="error-content">
                <p class="blockTitle wow animated fadeInRight"
                   data-wow-delay="0.8s">Brak Projekcji ?</p>
                <p class="block-content wow animated fadeInRight"
                   data-wow-delay="1s">Coś poszło nie tak - ta strona nie istnieje.<br>
                    Możesz wrócić do strony głównej.</p>
                <p>
                    <a href="/" class="event-link yellow display toLeft wow animated fadeInRight"
                       data-wow-delay="1.2s">Strona główna</a>
                </p>
            </div>
        </div>
    </div>
</section>

<!--menu-->
<script type="text/javascript" src="js/libs.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
</body>
</html>