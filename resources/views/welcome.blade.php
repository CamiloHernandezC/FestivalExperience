<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="google-site-verification" content="P_yEgFijsmcG-GjA_AgDfW4N384ev7ACxASfQB2n-2I" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@lang('general.AppName')</title>
    <meta name="description" content="Recibe Ofertas de Entrenadores Personales, Compara y Elige al Entrenador Correcto por el Precio que Quieres"/>
    <link rel="canonical" href="{{env('APP_URL')}}/"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,900|K2D" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>


    <!-- bootstrap 4.1.0 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- End bootstrap -->

    <!--footer-->
    <link rel="stylesheet" href="{{asset('css/footer/footer-distributed-with-address-and-phones.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">

    <link rel="stylesheet" href="{{asset('css/carousel.css')}}">

    <link rel="stylesheet" href="{{asset('css/utils.css')}}">

    <link rel="stylesheet" href="{{asset('css/chats.css')}}">

    <link rel="stylesheet" href="{{asset('css/review.css')}}">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{env('GTAG')}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{env('GTAG')}}');
    </script>

    <script src="{{ asset('js/moment.min.js') }}"></script>
</head>
<body data-spy="scroll" data-target=".navbar">

<!--Navbar color effect
<script>
    $(window).on("scroll", function() {
        $("#top-navbar").css("backgroundColor", 'rgba(0, 0, 0, '+$(window).scrollTop());
    });
</script>
-->

<nav id="top-navbar" class="navbar navbar-expand-md navbar-dark fixed-top">
    <a class="navbar-brand" href="#" style="width: 60px; padding: 0">
        <img src="{{asset('images/brand/imago_fondo_claro.png')}}" width="70%" height="70%">
    </a>
    <div class="top-right links">
        <a href="#">Registro</a>
    </div>
</nav>

<div class="modal fade justify-content-center align-items-center" id="msgModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background: none; border: none">
            <div class="modal-body" style="padding: 0 0 3vh 0">
                <div class="alert bg-{{session('msg_level')}} color-white redondeado">
                    <p>{{session('msg')}}</p>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="welcome" class="flex-center position-ref full-height">
    <div class="content">
        <div class="title">
            <video autoplay muted loop class="portrait-video landingVideo" src="{{asset('video/landing_page_portrait.mp4')}}" preload="auto"></video>
            <video autoplay muted loop class="landscape-video landingVideo" src="{{asset('video/landing_page_landscape.mp4')}}" preload="auto"></video>
            <a id="schedule-courtesy" href="https://api.whatsapp.com/send/?phone=573159142914<&text=Hola,%20quiero%20informacion%20de%20Festival%20Experience&app_absent=0" style="background: linear-gradient(90deg, rgba(10,10,10,1) 0%, rgba(20,20,20,1) 72%, rgba(30,30,30,1) 100%);" class="btn ml-auto mr-auto" target="_blank">
                ¡Más Información!
            </a>
            <button id="sound" class="btn position-absolute bg-dark color-white" style="bottom:5vh; left: 5vh; height: 40px; line-height: 0">
                <span id="volume_off" class="material-icons" style="font-size: smaller">volume_off</span>
                <span id="volume_on" class="material-icons" style="font-size: smaller; display: none">volume_up</span>
            </button>

        </div>
    </div>
</div>

<div class="w-100 text-center p-5 color-white" style="background: linear-gradient(90deg, rgba(10,10,10,1) 0%, rgba(20,20,20,1) 72%, rgba(30,30,30,1) 100%)">
    <h3>LA MEJOR AGENCIA FESTIVALERA</h3>
</div>

<div class="section text-center d-block">
    <h1 class="mb-5" style=" font-family: 'Cinzel'!important; font-weight: 200!important;">Experiencias</h1>
    <div class="floating-card p-4 mb-3 text-left col-8 col-md-6 mx-auto color-white" style="background: linear-gradient(90deg, rgba(10,10,10,1) 0%, rgba(20,20,20,1) 72%, rgba(30,30,30,1) 100%)">
        <div class="float-left">
            <img class="rounded-circle" height="48px" width="48px" alt="user"
                 src="{{asset('images/avatars/2.PNG')}}">
        </div>
        <div class="user-info d-inline-block w-auto">
            <h6>Melissa Mogollon</h6>
            <div class="fullRating-container"
                 style="min-width: calc(64px); max-width: calc(100px); width: calc(10vw);"></div>
            <img id="emptyRating" alt="rating" src="{{asset('images/empty_rating.png')}}">
        </div>
        <div style="height: 2.5vw; min-height: 16px; max-height: 25px;"></div>
        <blockquote class="blockquote mt-4" style="font-size: 1rem; text-align: justify">
            <h5 class="mb-0">"Viví muchas experiencias nuevas en este viaje. La agencia pensó en todo: traslados, hospedaje, entradas… solo tuve que llegar y disfrutar. EDC fue una locura de energía y libertad. Muchas gracias a Az y Juli por el excelente servicio"</h5>
        </blockquote>
    </div>

    <div class="floating-card p-4 mb-3 text-left col-8 col-md-6 mx-auto color-white" style="background: linear-gradient(90deg, rgba(10,10,10,1) 0%, rgba(20,20,20,1) 72%, rgba(30,30,30,1) 100%)">
        <div class="float-left">
            <img class="rounded-circle" height="48px" width="48px" alt="user"
                 src="{{asset('images/avatars/1.JPG')}}">
        </div>
        <div class="user-info d-inline-block w-auto">
            <h6>Camilo Hernandez</h6>
            <div class="fullRating-container"
                 style="min-width: calc(64px); max-width: calc(100px); width: calc(10vw);"></div>
            <img id="emptyRating" alt="rating" src="{{asset('images/empty_rating.png')}}">
        </div>
        <div style="height: 2.5vw; min-height: 16px; max-height: 25px;"></div>
        <blockquote class="blockquote mt-4" style="font-size: 1rem;">
            <h5 class="mb-0">"Viví el festival Zamna al 100% gracias a esta agencia. Ellos se encargaron de todo, yo solo me dediqué a disfrutar. ¡Cumplidos, atentos y el ambiente fue mágico! Un experiencia soñada"</h5>
        </blockquote>
    </div>
</div>

<div class="section text-center d-block" style="background: linear-gradient(90deg, rgba(10,10,10,1) 0%, rgba(20,20,20,1) 72%, rgba(30,30,30,1) 100%); color: white;">
    <h1 class="mb-5" style=" font-family: 'Cinzel'!important; font-weight: 200!important; font-size: 2.9rem">Tomorrowland</h1>
    <div class="d-block d-md-flex p-2 m-auto col-10">
        <div class="m-auto mx-md-0 my-md-auto text-justify p-3 col-12 col-md-6" style="height: fit-content">
            <h3 class="mb-5">Vive la magia de Tomorrowland, el festival de música electrónica más grande del mundo. Una experiencia única, llena de energía, música y sueños que se hacen realidad.</h3>
        </div>
        <div class="col-12 col-md-4 m-auto ml-md-auto fade-in-section" style="height: 60vh; background-image: url({{asset('images/festivals/tomorrowland.PNG')}}); background-size: contain; background-position: center"></div>
    </div>
</div>

<x-type-section title="EDC" description="Vive la locura de EDC México 2026, donde la música, las luces y la energía no paran. Un paraíso electrónico que tienes que experimentar al menos una vez en la vida." img="{{asset('images/festivals/EDC_MX_2026.jpg')}}" background="white" color="black"></x-type-section>

<div class="section d-flex flex-column">
    <div class="mx-auto mb-4">
        <h1 class="w-80  text-center mx-auto mb-5">¿Porqué <br> Festival Experience?</h1>
        <p class="w-50 m-auto text-justify">
            En Festival Experience hacemos realidad tu viaje soñado.
            Te llevamos a los mejores festivales del mundo y nos encargamos de todo: vuelos, hospedaje, entradas y experiencias únicas.
            Tú solo disfruta, nosotros nos ocupamos del resto.
        </p>
    </div>
    <div class="flex-grow-1 w-100">
        <div class="m-auto" style="height: 400px; width: 400px; background-image: url('{{asset('images/brand/Imago_fondo_claro.png')}}'); background-size: cover; background-position: center"></div>
    </div>
</div>

<!--Pure Chat component
<!--Pure Chat component
<div class="draggable purechat-button-expand" style="background-image: url(&quot;https://app.purechat.com/assets/spanish.c1fabaeb81f83ee3f3db.png&quot;) !important; background-size: cover; position: fixed; right: 0; bottom: 0; margin: 3vh; height: 80.55px !important; width: 90px !important; z-index: 9 !important;"></div>
-->

<footer style="margin: 0" class="footer-distributed">

    <div class="footer-left">

        <!--<p class="footer-links">
            <a href="#quienesSomos">Quienes somos</a>
            ·
            <a href="#nuestoCompromiso">Nuestro compromiso</a>
            ·
            <a href="#mision">Mision</a>
            ·
            <a href="#valores">Valores</a>
            ·
            <a href="#equipo">Equipo de trabajo</a>
        </p>-->


        <p class="footer-company-name mt-4 d-none d-md-block">Desarrollado por: Educlick &copy; 2018</p>
        <p class="footer-company-name d-none d-md-block">322 243 42 96</p>
    </div>

    <div class="footer-center">

        <div>
            <a href="https://api.whatsapp.com/send/?phone=573159142914<&text=Hola,%20quiero%20informacion%20de%20Festival%20Experience&app_absent=0" target="_blank">
                <i class="fa fa-phone m-0"></i>
                <p>315 914 29 14</p>
            </a>
        </div>
    </div>

    <div class="footer-right">
        <!--<a href="#"><i class="fab fa-facebook"></i></a>-->
        <a href="https://www.instagram.com/festival.experience/">
            <i class="fab fa-instagram m-0" style="font-size: 25px"></i>
            <p>@festival.experience</p>
        </a>
    </div>

</footer>

<div class="floating_button">
    <div class="chats">
        <a href="https://api.whatsapp.com/send/?phone=573159142914<&text=Hola,%20quiero%20informacion%20de%20Festival%20Experience&app_absent=0" class="icon-whatsapp" target="_blank">
            <img class="icon" width="100%" height="100%" alt="whatsapp" src="{{asset('images/wathsapp_icon.png')}}">
        </a>
    </div>
</div>

@stack('modals')

@if(session('msg'))
    <script>
        $(document).ready(function(){
            $('#msgModal').modal({show: true});
        });
    </script>
    @php(\Illuminate\Support\Facades\Session::forget('msg'))
@endif

<script>
    $(document).ready(function() {
        $("#schedule-courtesy").delay(2000).fadeIn()
    });
</script>

<script>
    $(document).ready(function() {
        let options = {
            root: null,    // browser viewport
            rootMargin: '0px',
            threshold: 0.5 // target element visible 50%
        }

        let observer = new IntersectionObserver(fadeOnFocus, options);
        let targets = document.querySelectorAll('.fade-in-section');
        targets.forEach(target => {    // adding observer for all videos
            observer.observe(target);
        });
    });

    let compo = null
    const fadeOnFocus = (entries, observer) => {    // callback
        entries.forEach((entry) => {
            if(entry.isIntersecting) {
                entry.target.className += entry.target.classList.contains("is-visible") ? "" : " is-visible";
            }
        });
    };
</script>

<script>
    var button = document.getElementById('sound');
    var videos = document.querySelectorAll('.landingVideo');
    var volume_off = document.getElementById("volume_off")
    var volume_on = document.getElementById("volume_on")

    button.onclick = function (){

        volume_off.style.display=window.getComputedStyle(volume_off).display === "none" ? "block" : "none";
        volume_on.style.display=window.getComputedStyle(volume_on).display === "none" ? "block" : "none";


        videos.forEach(video => {    // adding observer for all videos
            if(window.getComputedStyle(video).display !== "none")
                video.muted = !video.muted;
        });
    };

    $(document).ready(function() {
        let options = {
            root: null,    // browser viewport
            rootMargin: '0px',
            threshold: 0.5 // target element visible 50%
        }

        let observer = new IntersectionObserver(playOnFocus, options);
        let targets = document.querySelectorAll('.landingVideo');
        targets.forEach(target => {    // adding observer for all videos
            observer.observe(target);
        });
    });

    const playOnFocus = (entries, observer) => {    // callback
        entries.forEach((entry) => {
            if(entry.isIntersecting) {
                entry.target.play();    // play target video
            } else {
                entry.target.pause();    // pause video
            }
        });
    };
</script>

<script src="{{asset('js/bootstrap-swipe-carousel.min.js')}}" type="text/javascript"></script>

<!--Script para carousel con items que vienen de backend-->
<script>
    $(document).ready(function() {
        $(".carousel-item:first-child").addClass('active');
    });
</script>

<!--Scripts para que vuelvan a la primer card cuando llegue a la última (slider ciclico)-->
<script>
    $(document).ready(function() {
        var totalItems = $(".itemDivAlmostReady").length;
        //console.log('totalItems: '+totalItems);//for debug purpose

        $("#almostReadyCarousel").on("slide.bs.carousel", function(e) {
            var $e = $(e.relatedTarget);
            var idx = $e.index();
            //console.log('index: '+idx);//for debug purpose
            if (idx == totalItems) {
                var it = (totalItems - idx);
                //console.log('otro: '+it);//for debug purpose
                for (var i = 0; i < it; i++) {
                    // append slides to end
                    if (e.direction == "left") {//forward
                        $(".itemDivAlmostReady")
                            .eq(i)
                            .appendTo("#innerAlmostReady");
                    }
                }
                /*$(".media-slider").css('width', '100');*/
            }
            if (e.direction == "right") {
                //console.log('index: '+idx);//for debug purpose
                if(idx == 0){
                    $(".itemDivAlmostReady")
                        .eq(totalItems-1)
                        .prependTo("#innerAlmostReady");
                }

            }
        });
        $("#myCarousel").on("slid.bs.carousel", function(e) {
            $(".media-slider").css('width', '100%');
        });
    });
</script>

@stack('scripts')

</body>
</html>
