@extends('layouts.master')
@section('title', 'Kayıt Ol')
@section('content')
    <section id="intro" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="signup-form">

                        <form action="{{route('register')}}" method="post">
                            @csrf
                            @include('partials.alert')

                            <div class="card border-0 ">
                                <div class="card-body">

                                    <h2>Kayıt Ol</h2>
                                    <p class="pb-3" style="border-bottom: 2px solid #F2F2F2">Kullanacağınız şifre pusula şifrenizden bağımsızdır.</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" placeholder="Ad" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="surname" placeholder="Soyad">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="@posta.pau.edu.tr" required="required">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Şifre" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Şifreyi Onayla" required="required">
                                    </div>
                                    <div class="form-group text-right">
                                        <label class="checkbox-inline"><input type="checkbox" required="required"> Kabul ediyorum <a href="#">Kullanım Koşulları </a> &amp; <a href="#">Gizlilik Politikası</a></label>
                                    </div>
                                    <div class="form-group ">
                                        <button type="submit" class="btn btn-block btn-primary btn-lg">Kayıt Ol</button>
                                    </div>
                                    <div class="hint-text">Zaten bir hesabın var mı? <a href="{{route('loginView')}}"> Giriş Yap</a></div>

                                </div>
                            </div>


                        </form>
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection
