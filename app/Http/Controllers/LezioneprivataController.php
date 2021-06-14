<?php
namespace App\Http\Controllers;

use App\Models\archivio_lezioni;
use Illuminate\Routing\Controller;
use App\Models\Istruttori_lavorano;
use App\Models\lezioni_pvt;
use App\Models\Piscine;

use Session;

class LezioneprivataController extends Controller{

    public function hasLogged(){
        if(Session::has('user')){
            $istr_lavo = Istruttori_lavorano::all();
            $pvt = lezioni_pvt::where("user",Session::get('user'))->get();
            if($pvt == null){
                return view('page_lezioneprivata')
                ->with("istr_lavo", $istr_lavo)
                ->with("pvt", null)
                ->with("piscine", Piscine::all('*'));
            }else{
                return view('page_lezioneprivata')
                ->with("istr_lavo", $istr_lavo)
                ->with("pvt", $pvt)
                ->with("piscine", Piscine::all('*'));
            }
           
        }
        return redirect('login');
    }

    public function getIstructors(){
         
        echo Istruttori_lavorano::all();
    }
    public function insertLezione(){
        $values = array("user" => Session::get("user"), 
        "ID_istruttore" => request("istruttore"),
        "ID_piscina" => request("piscina"),
        "data" => request("data"));
        $res = lezioni_pvt::insert($values);
       

    }

    public function deleteLezione(){
        
        $record = lezioni_pvt::find(Session::get("user"))
        ->where("data", request("delete"));
        $record->delete();

        $oldrecord = archivio_lezioni::find(Session::get("user"))
        ->where("data", request("delete"));
        $oldrecord->delete();
        
    }

}   

?>