@extends('layouts.master')
@section('title', 'Tüm Fakülteler')
@section('content')

    <section id="intro" class="clearfix">
        <div class="container">
            <div class="card-header text-center text-white shadow border-0">
                <h5 class="pt-4"> <b>Fakülteler</b></h5>
            </div>
            <hr class="bg-white">
            <div class="row justify-content-center align-items-center">
                @foreach($faculties as $faculty)

                <div class="col-md-6 my-2 text-center">
                    <a href="{{route('showFacultyDepartments',$faculty->slug)}}">
                        <div class="card ">
                            <div>
                                <div class="card-body move shadow m-3" >
                                    <h5 class="py-5">{{$faculty->name}}</h5>
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
