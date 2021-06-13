@extends('layouts.shopping')

@section('javascript')
<script src='{{ url("js/videogiochi_nuovi_arrivi.js") }}' defer ></script>
<script type="text/javascript">
    const VIDEOGIOCHI_NUOVI_ARRIVI_ROUTE = "{{route('videogiochi_nuovi_arrivi')}}";
    </script>
@endsection

@section('title', 'Nuovi Arrivi')

@section('categoria')

<p id="popolari"> Nuovi Arrivi </p>

@endsection

