<?php

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model {

    public function user() {
        return $this->belongsTo("App\Models\User");
    }

    public function videogame() {
        return $this->hasMany("App\Models\Videogame", "titolo", "articolo");
    }

    public function merchandise() {
        return $this->hasMany("App\Models\Merchandise", "titolo", "articolo");
    }

    public function subscription() {
        return $this->hasMany("App\Models\Subscription", "titolo", "articolo");
    }
}

?>