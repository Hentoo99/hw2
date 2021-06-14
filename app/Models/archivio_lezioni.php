<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class archivio_lezioni extends Model{
    protected $table = "archivio_lezioni_private";

    protected $primaryKey = "user";
    protected $autoIncrement = false;
    protected $keyType = "string";
    public $timestamps = false;

    protected $fillable = [
        "user", "ID_istruttore", "ID_piscina", "data"
    ];

    protected $hidden =[
        "user"
    ];
}
?>