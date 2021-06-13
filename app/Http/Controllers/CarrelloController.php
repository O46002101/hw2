<?php

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Shopping_cart;
use App\Models\Videogame;
use App\Models\Subscription;
use App\Models\Merchandise;
use App\Models\User;

class CarrelloController extends Controller
{

    public function caricaCarrello(){ 

        $user = User::find(session('user_id'));
        $elementi_carrello = ShoppingCart::where("username", $user->username)->orderBy("created_at")->get();
        return response()->json($elementi_carrello);

    }

    public function aggiungiVideogioco($articolo, $prezzo){
    
        $immagine = Videogame::find($articolo);
        
        $user = User::find(session('user_id'));
        $elemento_da_aggiungere = new ShoppingCart;
        $elemento_da_aggiungere->username = $user->username;
        $elemento_da_aggiungere->articolo = $articolo; 
        $elemento_da_aggiungere->quantita = 1; 
        $elemento_da_aggiungere->prezzo = $prezzo;
        $elemento_da_aggiungere->immagine = $immagine->immagine;
        $elemento_da_aggiungere->save();

    }

    public function aggiungiMerchandise($articolo, $prezzo){
    
        $immagine = Merchandise::find($articolo);
        
        $user = User::find(session('user_id'));
        $elemento_da_aggiungere = new ShoppingCart;
        $elemento_da_aggiungere->username = $user->username;
        $elemento_da_aggiungere->articolo = $articolo; 
        $elemento_da_aggiungere->quantita = 1; 
        $elemento_da_aggiungere->prezzo = $prezzo;
        $elemento_da_aggiungere->immagine = $immagine->immagine;
        $elemento_da_aggiungere->save();

    }

    public function aggiungiAbbonamento($articolo, $prezzo){
    
        $immagine = Subscription::find($articolo);
        
        $user = User::find(session('user_id'));
        $elemento_da_aggiungere = new ShoppingCart;
        $elemento_da_aggiungere->username = $user->username;
        $elemento_da_aggiungere->articolo = $articolo; 
        $elemento_da_aggiungere->quantita = 1; 
        $elemento_da_aggiungere->prezzo = $prezzo;
        $elemento_da_aggiungere->immagine = $immagine->immagine;
        $elemento_da_aggiungere->save();

    }



    public function eliminaArticolo($articolo){ 
        $user = User::find(session('user_id'));
        $elemento_da_eliminare = ShoppingCart::where("username", $user->username)->where("articolo", $articolo);
        $elemento_da_eliminare->delete();
    }
    
    
    public function diminuisciQuantita($articolo){ 
        $user = User::find(session('user_id'));
        $elemento_carrello = ShoppingCart::where("username", $user->username)->where("articolo", $articolo)->first();
        $elemento_carrello->quantita = $elemento_carrello->quantita - 1;
        $elemento_carrello->save();
    }

    public function aumentaQuantita($articolo){
        $user = User::find(session('user_id'));
        $elemento_carrello = ShoppingCart::where("username", $user->username)->where("articolo", $articolo)->first();
        $elemento_carrello->quantita = $elemento_carrello->quantita +  1;
        $elemento_carrello->save();
    }

}

?>