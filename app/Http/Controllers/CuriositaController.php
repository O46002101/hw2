<?php

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Shopping_cart;
use App\Models\Videogame;
use App\Models\Subscription;
use App\Models\Merchandise;
use App\Models\User;

class CuriositaController extends Controller
{

    public function indexamiibo(){ 
        $user = User::find(session('user_id'));
        
        if (!isset($user))
        return redirect('login');
        
        return view('amiibo')->with('username', $user->username);
    }

    public function indexmetacritic(){ 
        $user = User::find(session('user_id'));
        
        if (!isset($user))
        return redirect('login');
        
        return view('metacritic')->with('username', $user->username);
    }

    public function amiibo($query){

    $personaggio = urlencode($query);

    $curl= curl_init();    
    curl_setopt($curl, CURLOPT_URL, "https://www.amiiboapi.com/api/amiibo/?character=".$personaggio);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result= curl_exec($curl);
    return $result;
    curl_close($curl);
    }

    public function metacritic($query){

    $apikey = env('APIKEY');

    $videogioco = urlencode($query);

    $curl= curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://api.rawg.io/api/games?key=".$apikey."&search=".$videogioco);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result= curl_exec($curl);
    return $result;
    curl_close($curl);
    }

}

?>