<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_de_famille', 'prenom', 'email', 'photo','date_de_fin_de_stage',' demande_de_stage','semi_rapport_de_stage','rapport_finale_de_stage' ,'etablissement', 'pole', 'duree_de_stage','assurance',
    ];
    public function Stagiaire(){
        return $this->hasOne(Raport::class , ' id_stagiaires');
    }
    protected $casts = [
        'date_debut' => 'date', // Add this line to cast date_debut as a date
    ];
    protected $table = 'stagiaires';
}
