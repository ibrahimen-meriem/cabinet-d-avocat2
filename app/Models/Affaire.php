<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affaire extends Model
{
    use HasFactory;
    protected $table="affaires";
    public $incrementing = true ;
    protected $fillable = [

        'name',
        'nomber',
        'prix',
        'adversaire',
        'jugement',
        'jugementDate',
        'type',
        'etat',
        'id_client',
        'id_user',

    ];
}
