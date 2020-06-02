@extends('layouts.master')
@section('title', 'Arama Sonuçları')
@section('content')
    <section id="about" style="margin-top: 50px">
        <div class="container">
            <h3>Notlar</h3>
            <div class="row">

                @foreach($searchNotes as $searchNote)
                    <div class="col-md-4 p-1">
                        <div class="card shadow">
                            <img style="height: 200px;"
                                 src="/upload/notes/{{$searchNote->files[0]->path}}"
                                 class="card-img-top" alt="...">
                            <div class="card-body">

                                <small class="d-block mb-3"><strong>yükleyen:</strong> <a
                                        href="">{{$searchNote->user->name}}</a> </small>

                                <small>{{$searchNote->title}}</small><br>{{$searchNote->teacher->name}}
                                <br>
                                {{$searchNote->description}}
                                <br>

                                <form action="{{route('payCost')}}" method="post">
                                    <input type="text" name="noteId" hidden value="{{$searchNote->id}}">

                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-primary"><i
                                            class="fas fa-shopping-bag"></i> Satın Al
                                    </button>

                                    <a href="/upload/notes/{{$searchNote->files[0]->path}}" type="submit" class="btn btn-sm btn-primary"><i
                                            class="fas fa-eye"></i> Önizleme
                                    </a>
                                </form>
                                <b class="mx-2 float-right">{{$searchNote->price}}TL</b>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


            <br><br>
            <h3>Kitaplar</h3>
            <div class="row">

                @foreach($searchBooks as $searchBook)
                    <div class="col-md-4 p-1">
                        <div class="card shadow">
                            <img style="height: 200px;"
                                 src="/upload/books/{{$searchBook->files[0]->path}}"
                                 class="card-img-top" alt="...">
                            <div class="card-body">

                                <small>{{$searchBook->title}}</small><br>{{$searchBook->teacher->name}}
                                <br>
                                {{$searchBook->description}}
                                <br>

                                <form action="{{route('payCost')}}" method="post">
                                    <input type="text" name="bookId" hidden value="{{$searchBook->id}}">

                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-primary"><i
                                            class="fas fa-shopping-bag"></i> Satın Al
                                    </button>
                                    <a href="/upload/notes/{{$searchBook->files[0]->path}}" type="submit" class="btn btn-sm btn-primary"><i
                                            class="fas fa-eye"></i> Önizleme
                                    </a>
                                </form>
                                <b class="mx-2 float-right">{{$searchBook->price}}TL</b>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
