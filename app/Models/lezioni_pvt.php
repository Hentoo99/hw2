<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lezioni_pvt extends Model{

    protected $table = "lezione_privata";

    protected $primaryKey = "user";
    protected $autoIncrement = false;
    protected $keyType = "string";
    public $timestamps = false;


    protected $fillable = [
        "user", "ID_istruttore", "ID_piscina", "data"
    ];

    protected $hidden =[
    ];

}

?>