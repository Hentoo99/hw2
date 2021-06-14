<!DOCTYPE html>
<html>
<link rel="stylesheet" href="page_profile_style.css">
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
          @if (!isset($abbonamento))
          <div class="noabbonamento">
            <h1>Ciao, {{$user["user"]}}</h1>

            <p>Devi prima fare un abbonamento!</p>
        </div>
          @endif
         @if (isset($abbonamento))
         <div id="profilo">
            <h1>Profilo</h1>
           <div class="profile nome">
            <p>Username: {{$user["user"]}}</p>
            <p>Nome: {{$abbonamento["Nome"]}}</p>
            <p>Cognome: {{$abbonamento["Cognome"]}}</p>
            <p>Nato il: {{$abbonamento["Data_nascita"]}}</p>
            <p>Eta': {{$abbonamento["Eta"]}}</p>
           

           </div>
        </div>
        
        <div id="preferita">
            <h1>Piscina con abbonamento</h1>
            <div class="piscina">
                <h1>
                    {{$piscina["Nome_piscina"]}}
                </h1>
                <p>{{$piscina["Citta"]}}</p>
                <p>{{$piscina["Via"]}}</p>
            </div>
        </div>
         @endif   
       
        
        
        @if (count($abbonamenti_avuti) != 0 || count($lezioni_avute) != 0)

        <div id="statistiche">
            <h1>Statistiche</h1>
            
            <div class="piscina">
                @if(count($abbonamenti_avuti) != 0)
                <p>Abbonamenti avuti: {{count($abbonamenti_avuti)}}</p>
                @endif
    
                @if (count($lezioni_avute) != 0)
                    <p>Lezioni private svolte: {{count($lezioni_avute)}}</p>
                @endif
            </div>
            </div>
            
        @endif
        </section>

        <footer>
            <span>
                <img class="profilo" src="me.png" style="width: 100px;">
                <p>Enricomaria Di Rosolini</p>
                <p>O46002098</p>
            </span>
        </footer>
            
    </body>
</html>