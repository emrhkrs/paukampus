@extends('layouts.master')
@section('title', 'Anasayfa | '.config('app.name'))
@section('content')
    @guest()

        <section id="intro" class="clearfix mb-2">
            <div class="container">

                <div class="intro-img">
                    <img src="/img/about-img.svg" alt="" class="img-fluid wow fadeInUp" data-wow-delay="0.3s">
                </div>

                <div class="intro-info">
                    <h2>ihtiyacın<br>olan her şey<br><span>paukampus.com</span></h2>
                    <div>
                        <a href="{{route('registerView')}}" class="btn-get-started scrollto">Kayıt Ol</a>
                        <a href="{{route('loginView')}}" class="btn-services scrollto">Üye Girişi</a>
                    </div>
                </div>

            </div>
        </section>
    @endguest

    @auth()
        <section id="about" style="margin-top: 50px">
            <div class="container">

                <div class="row about-container">
                    <div class="col-lg-6 content order-lg-1 order-2">

                        <h5>Hoşgeldin {{Auth::user()->name}} , Ne Yapmak İstiyorsun?</h5>
                        <p class="text-muted">Paü Kampüs Pamukkale Üniversitesi öğrencileri için geliştirilmiş, öğrencilerin ders notlarını
                            ve
                            2.el kitaplarını paylaşmasına ve diğer öğrenciler tarafından bu ders notlarına ve kitaplara
                            kolayca erişim sağlanması amacıyla hazırlanmış bir web sitesidir. </p>

                        <div class="icon-box wow fadeInUp">
                            <a href="{{route('createNote')}}">
                                <div class="icon"><i class="fas fa-pen"></i></div>
                                <h4 class="title">Ders Notu Ekle</h4>
                                <p class="description text-muted">Paü Kampüs ile en son paylaşılan ders notlarına buraya
                                    tıklayarak ulaşabilirsiniz.</p>
                            </a>
                        </div>


                        <div class="icon-box wow fadeInUp">
                            <a href="{{route('showFaculties')}}">
                                <div class="icon"><i class="fa fa-pen"></i></div>
                                <h4 class="title">Kitap Ekle</h4>
                                <p class="description text-muted">Paü Kampüs ile en son paylaşılan ders notlarına buraya
                                    tıklayarak ulaşabilirsiniz.</p>
                            </a>
                        </div>

                        <div class="icon-box wow fadeInUp">
                            <a>
                                <div class="icon"><i class="fa fa-search"></i></div>

                                <form action="{{route('searching')}}" method="POST">
                                    @csrf
                                    <div class="input-group mb-3" style="padding: 0px; width: 70%;margin-left: 80px">
                                        <input type="text" name="search" class="py-3 form-control " placeholder="Not ara" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                    <p class="description text-muted">Ders Notlarını aratabilirsin</p>
                                </form>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp ">
                        <img src="/img/about-extra-2.svg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </section>
    @endauth
@endsection
