@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('home')}}">Посмотреть посты</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{route('create')}}">Создать пост</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="col-md-12">
                                <form action="{{route('post.store')}}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputName">Название поста</label>
                                            <input type="text"  name="title" class="form-control" id="exampleInputName" placeholder="Введите название поста: ">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputText">Текст поста</label>
                                            <input type="text" name="text" class="form-control" id="exampleInputText" placeholder="Введите текст поста:">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Создать</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
