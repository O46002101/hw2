@extends('layouts.shopping')

@section('javascript')
<script src='{{ url("js/abbonamenti.js") }}' defer></script>
<script type="text/javascript">
    const ABBONAMENTI_ROUTE = "{{route('abbonamenti')}}";</script>
@endsection

@section('title', 'Abbonamenti')

@section('categoria')
<p id="popolari"> Abbonamenti </p>
@endsection

