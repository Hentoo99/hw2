<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Piscine extends Model{
    protected $table = "piscina_aziendale";
    public $timestamps = false;

    protected $fillable = [
     "ID", "Nome", "ID_citta"
    ];

    protected $hidden =[
       
    ];

}

?>