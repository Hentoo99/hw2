<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class archivio_clienti extends Model{
    protected $table = "archivio_clienti";

    protected $primaryKey = "user";
    protected $autoIncrement = false;
    protected $keyType = "string";
    public $timestamps = false;

    protected $fillable = [
        "user", "piscina_id", "inizio", "fine"
    ];

    protected $hidden =[
        "user"
    ];

}

?>