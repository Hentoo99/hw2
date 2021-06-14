


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="page_lezioneprivata_style.css">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Unicase:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Della+Respira&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">

<script src="loading_istructors.js" defer></script>
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
        <div class="hidden"></div>
        <h1>Prenota una lezione privata!</h1>
        <div class="request">
        <form>
            <input type="hidden" name='_token' value= "{{ csrf_token() }}">

            <h1>Premi invio alla fine</h1>
           <div>
           <p>Inserisci Data: </p>
            <input type="date" name="data"> 
           </div> 
    

            <div>
            <p>Scegli una piscina:</p>
            <select name="piscina" onchange="onClick()">
                @foreach ($piscine as $item)
                    <option value="{{$item['ID']}}">{{$item['Nome']}}</option>
                @endforeach
            </select>
            </div>
            <div>
            <p> Scegli istruttore:</p>
            <select name="istruttore">
                @foreach ($istr_lavo as $item)
                    
                @endforeach
            </select>
            </div>
            <input type="submit" name="invio" >
        </form>
        </div>
       </div>
       <div class="request">
        <h1>Seleziona la lezione da eliminare</h1>

            <form>
                <input type="hidden" name='_token' value= "{{ csrf_token() }}">

            <label> Elimina una lezione:             
                <select name="delete">
                  @if ($pvt != null)
                  @foreach ($pvt as $item)
                      <option value="{{$item['data']}}">{{$item['data']}}</option>
                  @endforeach
                      
                  @endif
                </select>
                    
                <input type="submit" name="elimina"></label> 

            </form>
        </div>

       @if ($pvt != null)
       @foreach ($pvt as $pvts)
       @foreach ($istr_lavo as $pool)
       @if ($pool['ID_piscina'] == $pvts['ID_piscina'] && $pool['ID_istruttore'] == $pvts['ID_istruttore'])
       <p>
        Hai una lezione giorno {{$pvts['data']}} 
        nella piscina {{$pool['Nome_piscina']}}
        con {{$pool['Nome']}}  {{$pool['Cognome']}}
        </p> 
       @endif
       @endforeach
    @endforeach
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