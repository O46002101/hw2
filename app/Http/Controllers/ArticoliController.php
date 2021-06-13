<?php

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Videogame;
use App\Models\Subscription;
use App\Models\Merchandise;
use App\Models\User;

class ArticoliController extends Controller
{
    //index

    public function indexvideogiochipopolari(){ 
        $user = User::find(session('user_id'));
        
        if (!isset($user))
        return redirect('login');
        
        return view('videogiochi_popolari')->with('username', $user->username);
    }

    public function indexvideogiochinuoviarrivi(){ 
        $user = User::find(session('user_id'));
        
        if (!isset($user))
        return redirect('login');
        
        return view('videogiochi_nuovi_arrivi')->with('username', $user->username);
    }

    public function indexabbonamenti(){ 
        $user = User::find(session('user_id'));
        
        if (!isset($user))
        return redirect('login');
        
        return view('abbonamenti')->with('username', $user->username);
    }

    public function indexmerchandise(){ 
        $user = User::find(session('user_id'));
        
        if (!isset($user))
        return redirect('login');
        
        return view('merchandise')->with('username', $user->username);
    }

    // json
    
    public function videogiochipopolarijson(){ 

        $popolari = Videogame::where('nuovi_arrivi', 0)->where('preordine', 0)->get();
        return response()->json($popolari);

}

    public function videogiochinuoviarrivijson(){ 

    $nuoviarrivi = Videogame::where('nuovi_arrivi', 1)->get();
    return response()->json($nuoviarrivi);

}
    
    public function abbonamentijson(){ 

        $abbonamenti = Subscription::all();
        return $abbonamenti;

}

    public function merchandisejson(){ 
    $merchandise = Merchandise::all();
    return $merchandise;

}



}

?>