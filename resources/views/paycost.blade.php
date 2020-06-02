@extends('layouts.master')
@section('title', ' Ödeme')
@section('content')
    @unless(empty($note))
        <section id="about" style="margin-top: 20px">
            <div class="container">

                <div class="row about-container">
                    <div class="col-lg-4 mx-auto background order-lg-1 order-xs-2 order-1 wow fadeInUp ">
                        <h5><b>{{$note->title}}</b></h5>
                        <img src="/upload/notes/{{$note->files[0]->path}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 px-3 py-2 content order-lg-2  order-xs-1 order-2">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <h5><b>Ödeme Sayfası</b></h5>
                                <div class="my-3">
                                    <label for="cardNumber">Card Number</label>
                                    <input type="cardNumber" class="form-control" id="cardNumber">
                                </div>
                                <div class="my-3">
                                    <label for="cardNumber">Card Number</label>
                                    <input type="cardNumber" class="form-control" id="cardNumber">
                                </div>
                                <div class="my-4">
                                    <div class="row">
                                        <div class="col-4">
                                            <select name="" id="" class="form-control">
                                                <option value="">YY</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select name="" id="" class="form-control">
                                                <option value="">MM</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select name="" id="" class="form-control">
                                                <option value="">CVC</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-right py-3">
                                    <label  for="aasd">Fiyat : <b>{{$note->price}} TL</b></label>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary btn-block">Öde</button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </section>
    @endunless

    @unless(empty($book))
        <section id="about" style="margin-top: 20px">
            <div class="container">

                <div class="row about-container">
                    <div class="col-lg-4 mx-auto background order-lg-1 order-xs-2 order-1 wow fadeInUp ">
                        <h5><b>{{$book->title}}</b></h5>
                        <img src="/upload/books/{{$book->files[0]->path}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 px-3 py-2 content order-lg-2  order-xs-1 order-2">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <h5><b>Ödeme Sayfası</b></h5>
                                <div class="my-3">
                                    <label for="cardNumber">Card Number</label>
                                    <input type="cardNumber" class="form-control" id="cardNumber">
                                </div>
                                <div class="my-3">
                                    <label for="cardNumber">Card Number</label>
                                    <input type="cardNumber" class="form-control" id="cardNumber">
                                </div>
                                <div class="my-4">
                                    <div class="row">
                                        <div class="col-4">
                                            <select name="" id="" class="form-control">
                                                <option value="">YY</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select name="" id="" class="form-control">
                                                <option value="">MM</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select name="" id="" class="form-control">
                                                <option value="">CVC</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-right py-3">
                                    <label  for="aasd">Fiyat : <b>{{$book->price}} TL</b></label>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary btn-block">Öde</button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </section>
    @endunless()

@endsection
