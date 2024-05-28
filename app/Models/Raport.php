<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raport extends Model
{
    use HasFactory;
    protected $fillable = [
        'Rapport finale de Stage', 'semi Rapport de Stage', 
    ];
    public function Stagiaire(){
        return $this->hasOne(Stagiaire::class,'id_raport');
    }
}
