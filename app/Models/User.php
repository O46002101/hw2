<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {

    use HasFactory, Notifiable;

    // Per la convenzione di Laravel, questa classe User farà riferimento ad un database users, quello che abbiamo creato
     protected $fillable = [
        'username', 'password', 'email', 'nome', 'cognome'
    ];

    public function shopping_cart() {
        return $this->hasMany("App\Models\ShoppingCart", "username");
    }

}

?>