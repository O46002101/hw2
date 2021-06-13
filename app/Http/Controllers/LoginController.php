<?php

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {

    public function login() {
        if(session('user_id') != null) {
            return redirect('homepage');
        }
        else {
            return view('login')
            ->with('csrf_token', csrf_token());
        }
     }

     public function controllaLogin() {
        $user = User::where('username', request('username'))->where('password', request('password'))->first(); 
        if (isset($user)){
            // Credenziali valide
            Session::put('user_id', $user->id);
            return redirect('homepage');
        } else {
            // Credenziali non valide
            return redirect('login')->withInput()->with('errore', "Credenziali non corrette");
        }
     }

     public function logout() {
         // Eliminiamo i dati di sessione
         Session::flush();
         // Torniamo al login
         return redirect('login');
     }

}
?>