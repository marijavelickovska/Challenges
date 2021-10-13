@extends('layouts.master')

@section('button')
<button class="btn btn-danger btn-sm ms-5 p-2"><a href="{{route('brainster.index')}}" class="logBtn px-3 text-light">Logout/Admin</a>
</button>
@endsection

@section('content')
<div class="container">
    <div>
        <ul class="nav nav-tabs mt-3">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Дома</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Профил</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('admin.create')}}">Додај</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('admin.edit')}}">Измени</a>
            </li>
        </ul>
    </div>

    <h4 class="mt-3">Додај нов производ:</h4>
    <br>
    
    <div class="row">
        <div class="col-6 offset-3">
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="bg-red red">
                <li class="ms-2">{{ $error }}</li>
            </div>
            @endforeach
            @endif

            @if(session()->has('message'))
            <div class="bg-green green p-2">
                <p class="ms-2">{{ session()->get('message') }}</p>
            </div>
            @endif

            <form action="{{ route('admin.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Име</label>
                    <input type="text" name="name" class="form-control mb-4">
                </div>
                <div class="form-group">
                    <label for="subtitle">Поднаслов</label>
                    <input type="text" name="subtitle" class="form-control mb-4">
                </div>
                <div class="form-group">
                    <label for="image">Слика</label>
                    <input type="text" name="image" class="form-control mb-4">
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" name="url" class="form-control mb-4">
                </div>
                <div class="form-group">
                    <label for="description">Опис</label>
                    <input type="text" name="description" class="form-control mb-4">
                </div>
                <div class="form-group d-grid">
                    <button type="submit" class="btn btn-warning">Додај</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection