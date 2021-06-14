<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Utenti;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\DbCommand;
class LoginController extends Controller{

    public function hasLogged(){
    
      if(Session::has("user")){
          return redirect('homepage');
      }
      return view("page_login");
    }

    public function login(){
       $user = Utenti::find(request("user"));
       if(password_verify(request("pass"), $user->pass)){
           Session::put("user", $user->user);
           echo json_encode(true);
       }else{
           echo json_encode(false);
       }
    }

   public function register(){
       $user = Utenti::find(request("nuser"));
       if($user == null){
            //non registrato
            $pass = password_hash(request('npass'), PASSWORD_BCRYPT);
            $values = array('user' => request("nuser"), 'pass' => $pass);
            $res = Utenti::insert($values);
            
            return json_encode($res);
       }else{
           //registrato
           return json_encode(false);
       }
   }
}

?>