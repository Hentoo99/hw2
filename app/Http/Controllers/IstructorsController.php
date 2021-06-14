<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Istruttore;
use App\Models\Istruttori_lavorano;
use Session;

class IstructorsController extends Controller{
    public function load(){
        //qua ci arrivo tramite get 
       if(Session::has("user")){
           $istruttori = Istruttori_lavorano::all('*');
           return view('page_istructors')->with("istruttori", $istruttori);
       }
       return redirect('login');
    }
}
?>