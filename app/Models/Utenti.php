<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utenti extends Model{
    protected $table = "utenti";

    protected $primaryKey = "user";
    protected $autoIncrement = false;
    protected $keyType = "string";
    public $timestamps = false;

    protected $fillable = [
        "user", "pass"
    ];

    protected $hidden =[
        "pass"
    ];

    //ritorna l'abbonamento
    public function abbonamento(){
        return $this->hasOne("App\Models\Cliente", "account_id");
    }

    //ritorna le lezioni private attive
    public function lezioni_private(){
        return $this->hasMany("App\Models\lezioni_pvt", "user");
    }

    //ritorna l'archivio dei mensili
    public function archivio_clienti(){
        return $this->hasMany("App\Models\archivio_clienti", "user");
    }
    //ritorna l'archivio delle lezioniprivate
    public function archivio_lezioni(){
        return $this->hasMany("App\Models\archivio_lezioni", "user");
    }
}

?>