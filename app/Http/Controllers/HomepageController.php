<?php

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Videogame;

class HomepageController extends Controller {

    public function index() {
        // Leggiamo l'utente connesso
        $user = User::find(session('user_id'));
        
        if (!isset($user))
            return redirect('login');

        return view('homepage')->with('username', $user->username);
    }


    public function homepagejson(){ 

        $preorders = Videogame::where('preordine', 1)->get();
        return response()->json($preorders);

}
}
?>