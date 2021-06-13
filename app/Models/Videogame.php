<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videogame extends Model {

    protected $primaryKey = "titolo";
    protected $autoIncrement = false;
    protected $keyType = "string";

    public function shopping_cart() {
        return $this-> belongsToMany("App\Models\ShoppingCart");
    }
}

?>