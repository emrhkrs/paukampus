@extends('layouts.master')
@section('title', 'Giriş Yap | '.config('app.name'))
@section('content')
    <section id="intro" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="signup-form">

                        <form action="{{route('login')}}" method="post">
                            @csrf
                            @include('partials.alert')
                            <div class="card border-0">
                                <div class="card-body">
                                    <h2 class="pb-3" style="border-bottom: 2px solid #F2F2F2">Giriş Yap</h2>

                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email"
                                               placeholder="@posta.pau.edu.tr" required="required">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Şifre"
                                               required="required">
                                    </div>

                                    <div class="form-group text-right">
                                        <label class="checkbox-inline"><input type="checkbox" name="beni_hatirla" > Beni
                                            Hatırla</label>
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-block btn-primary btn-lg">Giriş Yap
                                        </button>
                                    </div>
                                    <div class="hint-text">Hesabın yok mu? <a
                                            href="{{route('registerView')}}">Kaydol</a></div>

                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection

