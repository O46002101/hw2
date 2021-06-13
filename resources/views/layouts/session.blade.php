<html>

<head>

<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@700&display=swap" rel="stylesheet">
   
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">


    <link rel='stylesheet' href='{{ url("css/session.css") }}'>
    @yield('javascript')
    <script src='{{ url("js/mobile.js") }}' defer ></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="favicon.png">

    <title> GameCorner - @yield('title') </title>
</head>

<body>

<nav>


<div id="menu">
           <div></div>
           <div></div>
           <div></div>
       </div>


        <div class="collegamenti">
        <a href=' {{ url("homepage") }} '>Homepage</a>
        <a href=' {{ url("videogiochi_nuovi_arrivi") }} '>Nuovi Arrivi</a>
        <a href=' {{ url("abbonamenti") }} '>Abbonamenti</a>
        <a href=' {{ url("merchandise") }} '>Merchandise</a>
        <a>Area Privata</a>
        </div>

        <div id="benvenuto_e_logout">
           <h2>Benvenuto</h2> <span id="username"> Visitatore </span>
           <div id="logout">
               <div>Accedi o registrati per visualizzare il sito.</div>
            </div>
        </div>

    </nav>

    <div class= "hidden menu_tendina">
    <div class= "voce_menu_tendina"> <a href=' {{ url("homepage") }} '> Homepage </a> </div>
    <div class= "voce_menu_tendina"> <a href=' {{ url("videogiochi_nuovi_arrivi") }} '> Nuovi Arrivi </a> </div>
    <div class= "voce_menu_tendina"> <a href=' {{ url("abbonamenti") }} '> Abbonamenti </a> </div>
    <div class= "voce_menu_tendina"> <a href=' {{ url("merchandise") }} '> Merchandise </a> </div>
    <div class= "voce_menu_tendina"> <a> Area Privata </a> </div>
    </div>


<section id="corpo"> 

<div class="testo_e_form">

@section('testo_e_form')
@show


<div class="contenitore_foto"> 
<div class="foto"></div>
</div>


</section>

<footer>
        <div><h2>GameCorner</h2>
            <a>Programma fedeltà</a>
            <a>Regolamento</a>
            <a>Informativa e privacy</a>
        </div>

        <div><h2>Servizi</h2>
            <a>Tutti i servizi</a>
            <a>Garanzia acquisti</a>
            <a>Ritiro in negozio</a>
            <a>Newsletter</a>
        </div>

         <div><h2>Business</h2>
            <a>Lavora con noi</a>
            <a>Apri un Corner</a>
         </div>

        <div><h2>Social</h2>
            <a>Facebook</a>
            <a>Instagram</a>
            <a>Twitter</a>
            <a>Twitch</a>
        </div>

        <div><h2>Contatti</h2>
            <a>Cerca un Corner</a>
            <a>Assistenza chat</a>
            <a>Reclami</a>
        </div>

         <div id="nomecognome"><h2>Antonio</h2><h2>Longo</h2><h2>O46002101</h2></div>

    </footer>

</body>
</html>