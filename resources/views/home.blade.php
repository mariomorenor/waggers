@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-3 justify-content-center">
        <div class="col-9 col-sm-5 col-md-7 col-lg-6 mx-auto">
            <div class="shadow">
                <a href="{{ route('list_players') }}" class="btn btn-primary btn-block">
                    {{__('Search waGGer Players')}}
                </a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection
