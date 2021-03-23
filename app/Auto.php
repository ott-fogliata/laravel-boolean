<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Auto extends Model
{
    protected $table = 'auto';
    public $fillable = ['model_name', 'cubic_capacity', 'max_speed', 'pic'];

    // obiettivo: quando l'applicazione richiamerà il created_at (che per noi è
    // quando è stata inserita l'automobile nel catalogo) non mostriamo il datetime intero
    // ma solo la data nel formato italiano giorno, mese, anno.

    public function getCreatedAtAttribute($value) {

        // qui ho uno spazio per poter elaborare il valore.
        // qui inseriremo il codice utile alla "trasformazione"
        // della data created_at.
        // Questo metodo si chiama "accessor".

        $date = new Carbon($value);

        $date = $date->format('d F Y');
        // qui i formati https://www.php.net/manual/en/datetime.format.php
        return $date;
    }

}
