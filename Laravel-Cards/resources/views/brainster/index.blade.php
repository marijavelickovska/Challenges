@extends('layouts.master')

@section('button')
<button class="btn btn-danger btn-sm ms-5 p-2"><a href="{{route('admin.login_form')}}" class="logBtn px-3 text-light">Login/Admin</a>
</button>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 bg-image d-flex align-items-center justify-content-center text-light ">
            <p>
            <h1 class="text-center">Brainster.xyz Labs</h1>
            </p>
            <p>Проекти од академиите на Brainster</p>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        @foreach ($projects as $project)
        <div class="col-4 mt-3">
            <div class="card text-center zoom" style="width: 20rem; height: 28rem;">
                <div class="card-body">
                    <img src="{{$project['image']}}" class="card-img-top">
                    <h5 class="card-title mt-4">{{$project['name']}}</h5>
                    <h6 class="card-subtitle mb-3 text-muted">{{$project['subtitle']}}</h6>
                    <p class="card-text">{{$project['description']}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection