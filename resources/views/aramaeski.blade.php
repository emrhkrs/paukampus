@extends('layouts.master')
@section('content')

    <div class="container">

        <ol class="breadcrumb">
            <li><a href="{{route('anasayfa')}}">Anasayfa</a></li>
            <li class="active">Arama Sonucu</li>
        </ol>

        <div class="row about-container">
            <div class="row">
                @if(count($notes)==0)
                    <div class="col-md-12 text-center">
                        Ürün Bulunamadı!
                    </div>
                    @endif
                @foreach($notes as $note)
                    <div class="col-md-3 content"
                    <a href="{{route('note', $note->slug)}}">asdasd</a>
                    <p>
                        <a href="{{route('note',$note->slug) }}">
                            {{$note->title}}
                        </a>
                    </p>
                    <p class="price">{{$note->price}}r</p>

                @endforeach
            </div>
        </div>

    </div>

@endsection
