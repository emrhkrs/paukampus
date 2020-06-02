@extends('layouts.master')
@section('title', $faculty->name . ' Bölümleri')
@section('content')

    <section id="intro" class="clearfix">
        <div class="container">
            <div class="card-header text-center text-white shadow border-0">
                <h4 class="pt-4"> <b>Bölümler</b> </h4>
            </div>
            <hr class="bg-white">
            <div class="row justify-content-center align-items-center">
                @foreach($departments as $department)

                    <div class="col-md-6 my-2 text-center">
                        <a href="{{route('showDepartmentLectures',$department->slug)}}">
                            <div class="card ">
                                <div>
                                    <div class="card-body move  shadow m-3" data-wow-delay="0.05s">
                                        <h6 class="py-5"> <b>{{$department->name}}</b> </h6>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
