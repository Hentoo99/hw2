<?php
namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\Piscine;
use Illuminate\Routing\Controller;
use App\Models\Utenti;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\DbCommand;
class AbbonatiController extends Controller{

    public function hasLogged(){
    
      if(Session::has("user")){
          $pools = Piscine::all('*');
          return view('abbonati')->with("pools", $pools)->with("user", Session::get("user"));
      }
      return redirect("login");
    }

    public function insertAbb(){
        $user = Cliente::find(Session::get("user"));
        if($user != null){
            return json_encode(false);
        }else{
            
              //nessun abbonamento
              $values = array("Nome" => request("nome"), 
              "Cognome" => request("cognome"),
              "Data_nascita" => request("data"),
              "Inizio" => request("dataabb"),
              "account_id" => Session::get("user"),
              "piscina_id" => request("piscina"));
              $res = Cliente::insert($values);
              return json_encode($res);
        }
    }
}

?>