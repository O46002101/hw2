@extends('layouts.shopping')

@section('javascript')
<script src='{{ url("js/videogiochi_popolari.js") }}' defer ></script>
<script type="text/javascript">
    const VIDEOGIOCHI_POPOLARI_ROUTE = "{{route('videogiochi_popolari')}}";
    </script>
@endsection

@section('title', 'I più popolari')

@section('categoria')

<p id="popolari"> I più popolari </p>

@endsection

