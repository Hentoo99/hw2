<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Utenti;
use Session;

class HomepageController extends Controller{
    public function hasLogged(){
        //qua ci arrivo tramite get 
       if(Session::has("user")){
           return view('mhw3')->with("user",Session::get("user"));
       }
       return redirect('login');
    }

    public function loadContenuti(){
        $contenuti = array
        (
            array("Piscine chiuse per la pandemia Covid-19", "Campionato sospeso"), 
            array("Il Cts ha gia' raccomandato la massima cautela per la ripresa delle attivita' sportive e dunque anche palestre e piscine continueranno a rimanere chiuse. I rimborsi di tutti gli abbonamenti saranno effettuati al piu' presto possibile. Se la gentile clientela avesse qualche dubbio, puo' contattare l'assistenza direttamente dall'apposita sezione", "Il campionato e' stato sospeso, non sappiamo quando il governo ci dara' l'ok per poter ricominciare a praticare il nostro sport preferito. Rimanete in contatto per ulteriori informazioni."), 
            array("Piscina.jpeg", "Piscina2.jpg", "Piscina5.jpg")
        );
        return $contenuti;
    }
   public function weather($id){
       // $url = "http://api.weatherstack.com/current?access_key=".env('weather_access_key')."&query=".$id;

    $curl = curl_init();
    curl_setopt($curl,CURLOPT_URL, "http://api.weatherstack.com/current?access_key=".env('weather_access_key')."&query=".$id);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $request = curl_exec($curl);
    curl_close($curl);
    echo $request;

   }

   public function spotify(){

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://accounts.spotify.com/api/token' );
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($curl, CURLOPT_POST,1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, 'grant_type=client_credentials' ); 
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic '.base64_encode(env('spotify_client_id').':'.env('spotify_client_secret')))); 

    $token=json_decode(curl_exec($curl),true);
    curl_close($curl);

    $curl_playlist = curl_init();
    curl_setopt($curl_playlist, CURLOPT_URL, 'https://api.spotify.com/v1/playlists/1XrOBHAEoouDXtQEV4oEiy');
    curl_setopt($curl_playlist, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($curl_playlist, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token['access_token']));
    $playlist = curl_exec($curl_playlist);
    curl_close($curl_playlist);
    echo $playlist;
        
    }
}
?>