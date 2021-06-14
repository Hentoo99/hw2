<!DOCTYPE html>
<html>
<link rel="stylesheet" href="page_login_style.css">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Unicase:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Della+Respira&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
<script src="login.js" defer></script>
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
        <div class="codes"></div>


            <img src="logo.png">
            <div class="login"> 
                <span><h1>Effettua il login</h1></span>
                <form>
                    <input type="hidden" name='_token' value= "{{ csrf_token() }}"> 
                    <label>Username <input type="text" name="user"></label>
                    <label>Password <input type="password" name="pass" ></label>
                    <label> &nbsp;<input type="submit" name="invia"></label>
                </form>
                
            </div>
            <p>Non hai un account? <button class="butregi">Registrati</button></p>

            <div class="register, hidden">
            <div><h1>Effettua la registrazione</h1></div>

                <form >
                    <input type="hidden" name='_token' value= "{{ csrf_token() }}"> 

                    <label>Username <input type="text" name="nuser"></label>
                    <label>Password <input type="password" name="npass" ></label>
                    <label>Ripeti password <input type="password" name="rpass" ></label>

                    <label> &nbsp;<input type="submit" name="ninvia"></label>
                </form>

            </div>

          
            <div class="check, hidden">
            <h2>Password deve contenere</h2> 
            <p class="red">1) - Lunghezza minima 8 caratteri, massima 16 caratteri</p> 
            <p class="red">2) - Almeno un carattere maiuscolo</p> 
            <p class="red">3) - Le password non combaciano</p>
           </div>

           <p class="hidden">Hai un account? <button class="butlog">Login</button></p>

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