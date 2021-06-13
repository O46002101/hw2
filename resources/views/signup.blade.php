@extends('layouts.session')

@section('javascript')
<script src='{{ url("js/signup.js") }}' defer ></script>
    <script type="text/javascript">
    const SIGNUP_ROUTE = "{{route('signup')}}";
    </script>
@endsection

@section('title', 'Iscriviti')

@section('testo_e_form')


<p>Pagina di registrazione</p>

<form  name='form_signup' method='post' action="{{ route('signup') }}"> 
@csrf

<div class="username">
<div><label for='username'>Nome utente</label></div>
<div><input type='text' name='username' value='{{ old('username') }}'></div>
<span>Username già in utilizzo.</span>
</div>

<div class="nome">
<div><label for='nome'>Nome</label></div>
<div><input type='text' name='nome' value='{{ old('nome') }}'></div>
<span>Nome non valido</span>
</div>

<div class="cognome">
<div><label for='cognome'>Cognome</label></div>
<div><input type='text' name='cognome' value='{{ old('cognome') }}'></div>
<span>Cognome non valido</span>
</div>

<div class="email">
<div><label for='email'>Email</label></div>
<div><input type='text' name='email' value='{{ old('email') }}'></div>
<span>E-mail non valida</span>
</div>

<div class="password">
<div><label for='password'>Password</label></div>
<div><input type='password' name='password'></div>
<span>Inserisci una password di almeno 8 caratteri</span>
</div>

<div class="conferma_password">
<div><label for='conferma_password'>Conferma Password</label></div>
<div><input type='password' name='conferma_password'></div>
<span>Le password non coincidono</span>
</div>


<div class="submit"><input type='submit' name='submit' value='Registrati' id="submit" disabled></div>

<div class="allow"> 
<div><input type='checkbox' name='allow' value="1"></div>
<div><label for='allow'>Acconsento al trattamento dei dati personali</label></div>
</div>

</form>

<div class="signup">Hai già un account? <a href="{{ route('login') }}">Accedi</a></div>
</div>


@endsection
