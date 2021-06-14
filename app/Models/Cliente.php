<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model{
    protected $table = "cliente";

    protected $primaryKey = "account_id";
    protected $autoIncrement = false;
    protected $keyType = "string";
    public $timestamps = false;
    
    protected $fillable = [
        "Nome", "Cognome", "Data_nascita", "Eta", "inizio", "account_id", "piscina_id"
    ];

    protected $hidden =[
        
    ];
    
}
?>