<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Istruttore;
use App\Models\Istruttori_lavorano;
use Session;

class FindurpoolController extends Controller{
    public function hasLogged(){
       if(Session::has("user")){
           return view('find_ur_pool');
       }
       return redirect('login');
    }

    public function load(){
        $citta = Istruttori_lavorano::select("Nome_piscina", "Citta", "Via")->where("Citta", request("citta"))->groupBy("Nome_piscina")->get();
        echo $citta;
    }
}
?>