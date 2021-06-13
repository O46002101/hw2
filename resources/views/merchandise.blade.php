@extends('layouts.shopping')

@section('javascript')
<script src='{{ url("js/merchandise.js") }}' defer ></script>
<script type="text/javascript">
    const MERCHANDISE_ROUTE = "{{route('merchandise')}}";</script>
@endsection

@section('title', 'Merchandise')

@section('categoria')

<p id="popolari"> Merchandise </p>

@endsection

