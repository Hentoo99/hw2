<!DOCTYPE html>
<html>
<link rel="stylesheet" href="page_desciption_style.css">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Unicase:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Della+Respira&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">

<script src="nav.js" defer></script>
<head>
        <title>PoolParty</title>
    </head>

    <body >
        <div class="pos">
            <header>
                <div id="overlay">PoolParty
                    <div id="menuacomparsa">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </header>
            <nav>
                <div id="menu">
                    <a href="{{route('homepage')}}">Home</a>
                    <a href="{{route('profilo')}}">Profilo</a>
                    <a href="{{route('logout')}}">Logout</a>
                    <a href="{{route('istruttori')}}">Istruttori</a>
                    <a href="{{route('findurpool')}}">Trova la tua piscina</a>
                    <a href="{{route('abbonati')}}">Abbonati</a>
                    <a href="{{route('lezioneprivata')}}">Lezione Privata</a>
                    <a href="{{route('chisiamo')}}">Chi siamo</a>
                </div>
            </nav>
        </div>
        
        
        <section>
            <img src="logo.png">
            <div class="description">
               @foreach ($descrizione as $item)
                    <p>{{$item}}</p>
               @endforeach
            </div>
    
        </section>

        <footer>
            <span>
                <img class="profilo" src="me.png" >
                <p>Enricomaria Di Rosolini</p>
                <p>O46002098</p>
            </span>
        </footer>
            
    </body>
</html>