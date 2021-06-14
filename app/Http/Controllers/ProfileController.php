<?php
namespace App\Http\Controllers;

use App\Models\Istruttori_lavorano;
use Illuminate\Routing\Controller;
use App\Models\Utenti;
use App\Models\Luogo;
use App\Models\Piscine;

use Session;

class ProfileController extends Controller{
    public function load(){
        if(Session::has("user")){    
           $user = Utenti::find(Session::get("user"));
           $pool = Piscine::find($user->abbonamento["piscina_id"]);
           $piscina = Istruttori_lavorano::select("Nome_piscina", "Citta", "Via")->where("ID_piscina", $pool["ID"])->first();
           return view('profile')
           ->with("user", $user)
           ->with("abbonamento", $user->abbonamento)
           ->with("abbonamenti_avuti", $user->archivio_clienti)
           ->with("lezioni_avute", $user->archivio_lezioni)
           ->with("piscina", $piscina);
       }
       return redirect('login');    
    }
}
?>