@extends('layouts.master')
@section('title', $department->name. ' Bölümü Ders Notları')
@section('content')

    <section id="intro" class="clearfix mb-2">
        <div class="container">
            <div class="card-header text-center text-white shadow border-0">
                <h5 class="pt-4"> <b>Dersler</b> </h5>
            </div>
            <hr class="bg-white">
            <div class="row justify-content-center align-items-center">

                @forelse($lectures as $lecture)
                    <div class="col-md-3 my-2 text-center">
                        <a href="{{route('showLecturesNotes',[$department->slug,$lecture->slug])}}">
                            <div class="card">
                                <div>
                                    <div class="card-body move wow fadeInUp shadow m-2" id="cad" data-wow-delay="0.05s">
                                        <small class="py-5"><b>{{$lecture->name}}</b></small>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-md-12">
                        <div class="card ">
                            <div>
                                <div class="p-3 shadow m-2" id="cad">
                                    <small class="py-5"><b>{{ $department->name }} bölümünde herhangi bir ders bulunmuyor</b></small>
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

@endsection
