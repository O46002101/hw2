@extends('layouts.curiosity')

@section('javascript')
<script src='{{ url("js/amiibo.js") }}' defer ></script>
<script type="text/javascript">
    const AMIIBO_ROUTE = "{{route('amiibo')}}";
    </script>
@endsection

@section('title', 'Amiibo')


@section('contenuto_api',"Cerca l'amiibo di un personaggio:")


