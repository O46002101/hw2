@extends('layouts.curiosity')

@section('javascript')
<script src='{{ url("js/metacritic.js") }}' defer ></script>
<script type="text/javascript">
    const METACRITIC_ROUTE = "{{route('metacritic')}}";
    </script>
@endsection

@section('title', 'Metacritic')

@section('contenuto_api','Punteggi Metacritic dei videogiochi::')



