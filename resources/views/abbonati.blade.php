

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="page_abbonati_style.css">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Unicase:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Della+Respira&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">

<script src="loading_pools.js" defer></script>
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
        <div class="status"></div>

        <h1>Entra a far parte della nostra famiglia, {{$user}}!</h1>

            <div class="model">
                <div class="img">
                    <img src="logo.png">
                </div>
                <div class="abbonamento">

                <form>
                    <input type="hidden" name='_token' value= "{{ csrf_token() }}"> 

                   <p>Nome</p>
                    <input type="text" name="nome"> 
                    <p>Cognome</p>
                    <input type="text" name="cognome"> 
                    
                        <p>Data di Nascita</p>
                        <input type="date" name="data"   min="1930-01-01"> <!-- DATA DI NASCITA--> 
                    
                       <p>Scegli la piscina</p>
                       <select name="piscina">
                           @foreach ($pools as $item)
                               <option value="{{$item['ID']}}">{{$item['Nome']}}</option>
                           @endforeach
                    </select>
                    <p>Inizio abbonamento</p>
                    <input type="date" name=dataabb class="hidden">
                   <label><input type="submit"></label> 
                </form>
            </div>
            </div>
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