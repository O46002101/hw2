<?php

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SignupController extends Controller {


    protected function creaAccount()
    {
        $request = request();

        if($this->contaErrori($request) === 0) {
            $nuovoAccount =  User::create([
            'username' => $request['username'],
            'password' => $request['password'],
            'nome' => $request['nome'],
            'cognome' => $request['cognome'],
            'email' => $request['email']
            ]);
            if ($nuovoAccount) {
                Session::put('user_id', $nuovoAccount->id);
                return redirect('homepage');
            } 
            else {
                return redirect('signup')->withInput();
            }
        }
        else 
            return redirect('signup')->withInput();
        
    }

    private function contaErrori($data) {
        $error = array();
        
        // username
        if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $data['username'])) {
            $error[] = "Username non valido";
        } else {
            $username = User::where('username', $data['username'])->first();
            if ($username !== null) {
                $error[] = "Username già utilizzato";
            }
        }

          //e-mail
          if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $error[] = "Email non valida";
        } else {
            $email = User::where('email', $data['email'])->first();
            if ($email !== null) {
                $error[] = "Email già utilizzata";
            }
        }

        // password
        if(strlen($data["password"]) < 8 || !preg_match("#[0-9]+#", $data["password"]) || !preg_match("#[a-z]+#", $data["password"]) || 
    !preg_match("#[A-Z]+#", $data["password"]) || !preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-]/", $data["password"])){ 
        $error[]="La password deve essere di 8 caratteri e contenere almeno una lettera maiuscola, una minuscola, un numero ed un carattere speciale.";
        }

        // conferma password
        if (strcmp($data["password"], $data["conferma_password"]) != 0) {
            $error[] = "Le password non coincidono";
        }

        return count($error);
        }

    public function controllaUsername($query) {
        $exist = User::where('username', $query)->exists();
        return ['exists' => $exist];
    }

    public function controllaEmail($query) {
        $exist = User::where('email', $query)->exists();
        return ['exists' => $exist];
    }

    public function index() {
        return view('signup');
    } 

}
?>