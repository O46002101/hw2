@extends('layouts.session')

@section('title', 'Accedi')

@section('testo_e_form')

<p>Pagina di login</p>

<span class='error'>

@if (session('errore'))
    {{ session('errore') }}
@endif

</span>

<form  name='form_login' method='post' id="form_login" action="{{ route('login') }}"> 
<input type='hidden' name='_token' value='{{ $csrf_token }}'>

<div class="username">
<div><label for='username'>Nome utente</label></div>
<div><input type='text' name='username' value='{{ old('username') }}'></div>
</div>

<div class="password">
<div><label for='password'>Password</label></div>
<div><input type='password' name='password'></div>
</div>

<div class="submit"><input type='submit' name='submit' value='Accedi'></div>

</form>

<div class="signup">Non hai un account? <a href="{{ route('signup') }}">Iscriviti</a></div>
</div>

@endsection