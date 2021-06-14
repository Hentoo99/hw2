<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Istruttore;
use App\Models\Istruttori_lavorano;
use Session;

class ChisiamoController extends Controller{
     
   public function load(){

    $descrizione = array("PoolParty nasce da un'idea di Enricomaria durante la progettazione del database per l'esame del corso di Database and Web Programming.","PoolParty ha come obiettivo quello di far conoscere l'ambiente sportivo e competitivo che la piscina riesce a creare. Avvolgendo la persona a 360°  e aiutandola ad acquisire il benessere fisico, psichico e mentale.");
        return view('page_description')->with("descrizione", $descrizione);
   }
}
?>