<html>

<head>

<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">


    <link rel='stylesheet' href='{{ url("css/homepage.css") }}'>
    <script type="text/javascript">
    const HOMEPAGE_ROUTE = "{{route('homepage')}}";
    </script>
    <script src='{{ url("js/homepage.js") }}' defer ></script>
    <script src='{{ url("js/gestione_carrello.js") }}' defer ></script>
    <script src='{{ url("js/mobile.js") }}' defer ></script>

    <meta name="viewport"content="width=device-width, initial-scale=1">
    
    <link rel="icon" type="image/png" href="favicon.png">

    <title> GameCorner </title>

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
        <div class="carrello">
        <a id="carrello"></a>
         </div>
        

        <div id="benvenuto_e_logout">
           <h2>Benvenuto</h2> <span id="username"> {{ $username }} </span>
           <div id="logout">
               <span></span>
               <a href='{{ url("logout") }}'>Logout</a>
            </div>
        </div>


    </nav>
    
    <header></header>

    <div class= "hidden menu_tendina">
    <div class= "voce_menu_tendina"> <a href=' {{ url("homepage") }} '> Homepage </a> </div>
    <div class= "voce_menu_tendina"> <a href=' {{ url("videogiochi_nuovi_arrivi") }} '> Nuovi Arrivi </a> </div>
    <div class= "voce_menu_tendina"> <a href=' {{ url("abbonamenti") }} '> Abbonamenti </a> </div>
    <div class= "voce_menu_tendina"> <a href=' {{ url("merchandise") }} '> Merchandise </a> </div>
    <div class= "voce_menu_tendina"> <a> Area Privata </a> </div>
    </div>

    <section>

        <p><strong>ultime Novita'</strong></p>  

        <h1>Le console del momento</h1>
        <div id="consolemomento">
        
            <span id="console1"> <a href="https://www.playstation.com/it-it/ps5/?smcid=pdc%3Ait-it%3Aprimary%20nav%3Amsg-hardware%3Aps5" class="button">PlayStation 5</a></span>
            <span id="console2"> <a href="https://www.xbox.com/it-IT/consoles/xbox-series-x" class="button">Xbox Series X/ Xbox Series S</a></span>
            
        
        </div>

        <h1>I pi?? popolari</h1>
        <div class="popolari">
        
            <span id="gioco1"> <a></a> </span>
            <span id="gioco2"> <a></a> </span>
        
        </div>

        <div class="popolari">

            <span id="gioco3"> <a></a> </span>
            <span id="gioco4"> <a></a> </span>

        </div>

        <div class="links">
            
            <a href='{{ url("videogiochi_popolari") }}' class="button">Scopri di pi??</a>

        </div>


        <h1>Curiosit??</h1>
        
        <div id="curiosita">
        
            <span id="amiibo"> <a href=' {{ url("amiibo")}}' class="button">Trova il tuo amiibo</a></span>
            <span id="metacritic"> <a href='{{ url("metacritic") }}' class="button">Punteggi Metacritic</a></span>
            
        
        </div>
        
        <h1>Preordini</h1>

        <div id="preordini">
        
    
    </div>


    </section>

    <div class= "hidden pannello_carrello">

    <div class="pannello_carrello2"></div>

    <div class="totale_carrello">Totale: ???<span></span></div>

    </div>


    <footer>

        <div><h2>GameCorner</h2>
            <a>Programma fedelt??</a>
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