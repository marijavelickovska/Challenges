@extends('layouts.master')

@section('content')
<div class="row mt-10">
    <div class="col-6 offset-3 mt-5">
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="bg-red red">
            <li class="ms-2">{{ $error }}</li>
        </div>
        @endforeach
        @endif
        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <div class="form-group mt3">
                <label for="email">Е-маил</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group mt-3">
                <label for="password">Пасворд</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-warning btn-block text-light">Логирај се</button>
            </div>
        </form>
    </div>
</div>
@endsection