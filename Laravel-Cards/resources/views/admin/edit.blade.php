@extends('layouts.master')

@section('button')
<button class="btn btn-danger btn-sm ms-5 p-2"><a href="{{route('brainster.index')}}" class="logBtn px-3 text-light">Logout/Admin</a>
</button>
@endsection

@section('content')
<div class="container mt-5">
    <div>
        <ul class="nav nav-tabs mt-3">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Дома</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Профил</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('admin.create')}}">Додај</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('admin.edit')}}">Измени</a>
            </li>
        </ul>
    </div>

    <h4 class="mt-4">Измени постоечки производ:</h4>
    <br>

    <div class="row">
        @foreach ($projects as $project)
        <div class="col-4 mt-3">
            <div class="card text-center" style="width: 20rem; height:30rem;">
                <div class="card-body cardFront">
                    <img src="{{$project->image}}" class="m-4" style="width: 10rem;">
                    <h5 class="card-title">{{$project->name}}</h5>
                    <h6 class="card-subtitle mb-3 text-muted">{{$project->subtitle}}</h6>
                    <p class="card-text">{{$project->description}}</p>
                </div>
                <div class="card-footer footerFront text-center hidden my-0">
                    <button class="edit btn btn-sm lightGray inline"><i class="fas fa-pen-square fa-2x m-1"></i></button>
                    <form action="{{ route('admin.destroy', $project->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <a href="javascript:;" onclick="parentNode.submit();" type="submit" class="btn btn-sm lightGray inline"><i class="fas fa-times fa-2x m-1"></i></a>
                    </form>
                    <!-- Modal -->
                    <!-- <div class="modal" id="modalDelete" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Избриши</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Дали сте сигурни дека сакате да го избришете производот?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Откажи</button>
                                    <button type="button" class="btn btn-warning">Избриши</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="card-body cardBack hide">
                    <form action="{{ route('admin.update', $project->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Име</label>
                            <input type="text" name="name" class="form-control mb-4" value="{{ $project->name }}">
                        </div>
                        <div class="form-group">
                            <label for="subtitle">Поднаслов</label>
                            <input type="text" name="subtitle" class="form-control mb-4" value="{{ $project->subtitle }}">
                        </div>
                        <div class="form-group">
                            <label for="image">Слика</label>
                            <input type="text" name="image" class="form-control mb-4" value="{{ $project->image }}">
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="text" name="url" class="form-control mb-4" value="{{ $project->url }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Опис</label>
                            <input type="text" name="description" class="form-control mb-4" value="{{ $project->description }}">
                        </div>
                        <button type="submit" class="save btn-sm">Зачувај</button>
                        <button class="cancel btn-sm">Откажи</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection