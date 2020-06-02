@extends('layouts.master')
@section('title', $lecture->name. ' Bölümü Ders Notları')
@section('content')

    {{--    <style>--}}
    {{--        .box{--}}
    {{--            position: relative;--}}
    {{--            display: inline-block;--}}
    {{--            transition: all .2s ease-in-out;/* Make the width of box same as image */--}}
    {{--        }--}}
    {{--        .box:hover .text {--}}
    {{--            opacity: 1;--}}
    {{--        }--}}
    {{--        .box .text{--}}
    {{--            transition: all .2s ease-in-out;--}}
    {{--            border-radius: 6px;--}}
    {{--            position: absolute;--}}
    {{--            z-index: 999;--}}
    {{--            margin: 0 auto;--}}
    {{--            left: 0;--}}
    {{--            right: 0;--}}
    {{--            text-align: center;--}}
    {{--            bottom: 0%; /* Adjust this value to move the positioned div up and down */--}}
    {{--            background: rgba(0, 0, 0, 0.8);--}}
    {{--            font-family: Arial,sans-serif;--}}
    {{--            color: #fff;--}}
    {{--            width: 40%; /* Set the width of the positioned div */--}}
    {{--        }--}}

    {{--    </style>--}}

    {{--    <div class="box">--}}
    {{--        <img src="/img/portfolio/app1.jpg" alt="Flying Kites">--}}
    {{--        <div class="text">--}}
    {{--            <h1>Flying Kites</h1>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <section id="intro" class="clearfix mb-2">


        <div class="container al">
            <div class="card-header text-center text-white shadow border-0">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                           aria-controls="pills-home" aria-selected="true">Notlar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                           aria-controls="pills-profile" aria-selected="false">Kitaplar</a>
                    </li>
                </ul>
            </div>

            <hr class="bg-white">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <section id="portfolio" class="clearfix">
                        <div class="container">
                            <div class="row portfolio-container">
                                @forelse($books as $book)

                                    <div class="col-lg-3 col-md-4  portfolio-item filter-app">
                                        <div class="card">
                                            <div class="card-body move pb-0" style="padding: 0.50em!important;">
                                                <div class="portfolio-wrap">
                                                    <img style="height: 200px" src="/upload/books/{{ $book->files[0]->path }}" class="img-fluid" alt="">
                                                    <div class="portfolio-info">
                                                        <div>
                                                            <a href="/upload/books/{{ $book->files[0]->path }}"
                                                               data-gall="portfolioGallery"
                                                               title="Önizleme" class="venobox link-preview"><i
                                                                    class="fas fa-eye"></i></a>
                                                            <a href="#" class="link-details" title="More Details"><i
                                                                    class="fas fa-lira-sign"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-header" style="padding: 0.02rem 1.25rem!important;">
                                                <div class="media text-muted pt-3">
                                                    <form action="{{route('payCost')}}" method="post" >
                                                        @csrf
                                                        <p class="media-body pb-3 mb-0 small lh-125  border-gray">
                                                            <strong
                                                                class="d-block text-gray-dark">{{$book->title}}</strong>
                                                            <input type="text" name="bookTitle" hidden value="{{$book->title}}">
                                                            <strong class="d-block text-gray-dark">{{$book->price}}
                                                                ₺ </strong>
                                                            <input type="text" name="bookPrice" hidden value="{{$book->price}}">
                                                            <input type="text" name="bookId" hidden value="{{$book->id}}">

                                                            <label>{{$book->description}}</label>
                                                            <small class="d-block mb-3"><strong>yükleyen:</strong> <a
                                                                    href="">{{$book->user->name}}</a> </small>

                                                            <button type="submit" style="font-size: 13px;"
                                                                    class="btn btn-primary"><i
                                                                    class="fas fa-shopping-bag"></i> Satın Al
                                                            </button>
                                                            <a href="/upload/books/{{ $book->files[0]->path }}" style="font-size: 13px;"
                                                               class="btn btn-primary"><i class="fas fa-eye"></i>
                                                                Önizleme</a>
                                                        </p>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div>
                                                <div class="p-3 shadow m-2" id="cad">
                                                    <small class="py-5"><b>{{ $lecture->name }} bölümünde herhangi bir
                                                            ders
                                                            bulunmuyor</b></small>
                                                    <small class="py-5">
                                                        <a href="{{route('anasayfa')}}">Anasayfaya dön</a>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforelse
                            </div>
                        </div>
                    </section>
                </div>


                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <h1>asdads</h1>
                    <h1>asdads</h1>
                    <h1>asdads</h1>
                    <h1>asdads</h1>
                </div>
            </div>
        </div>
    </section>

@endsection
