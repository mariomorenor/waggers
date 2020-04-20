@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="font-weight-bolder text-center"> {{$user->nickname}}</h1>
            </div>
            <div class="col d-flex ">
                <div class="ml-auto"> 
                    <a href="{{ route('home') }}" class="btn btn-success mr-auto">Regresar</a>
                </div>
            </div>
        </div>
    </div>
    <showwagger-component user_id="{{$user->id}}" ></showwagger-component>
@endsection