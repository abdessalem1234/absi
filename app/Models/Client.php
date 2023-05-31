<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    
    protected $table = 'clients';

    protected $fillable = [
        'name',
        'availability',
    ];

    protected static function booted()
    {
        static::saving(function ($client) {
            // Vérifie si la valeur de `availability` n'est ni "disponible" ni "utilisée"
            if ($client->availability !== 'disponible' && $client->availability !== 'utilisé') {
                // Définit la valeur par défaut à "disponible"
                $client->availability = 'disponible';
            }
        });
    }
}
