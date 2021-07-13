@extends('template/welcome');

@section('content')
<div class="container w-100">

    @include("./partials/cardTitle")
</div>
<div class="container d-flex justify-content-around">
    @include('partials/card')
</div>
@endsection
