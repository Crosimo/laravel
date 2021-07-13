@extends('template/welcome');

@section('content')
@include("./partials/homepart")

    <div class="container text-center fs-2 text">
       URL précédente : {{ url()->previous() }}
    </div>
    <div class="container text-center fs-2 text">
     URL actuelle :   {{request()->Fullurl()}}
    </div>





@endsection
