@extends('layouts.master')
@section('title', 'Not Ekle')
@section('content')

    <main id="main">
        <section id="" class="clearfix" style="margin-top: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3" style="background-color: #004a99;">
                                <h6 class="m-0 font-weight-bold text-primary">Not Ekle</h6>
                            </div>
                            <div class="card-body">
                                <div class="col-md-12 order-md-1">
                                    @include('partials.alert')
                                    <form action="{{route('createNote')}}" method="post" class="needs-validation"  enctype="multipart/form-data">
                                        @csrf
                                        <label for="files" class="btn btn-info btn-block py-5 btn-xs p-0 px-3 py-2 my-1">
                                            <i class="fas fa-paperclip"></i> Dosya Seç
                                        </label>
                                        <input id="files" style="visibility:hidden;" type="file" name="noteFile">

{{--                                        <style>--}}
{{--                                            #text{--}}
{{--                                                width: 100%;--}}
{{--                                                height: 100%;--}}
{{--                                                text-align: center;--}}
{{--                                                line-height: 170px;--}}
{{--                                                color: #252525;--}}
{{--                                                font-family: Arial;--}}
{{--                                            }--}}
{{--                                            #upload{--}}
{{--                                                position: absolute;--}}
{{--                                                margin: 0;--}}
{{--                                                padding: 0;--}}
{{--                                                width: 100%;--}}
{{--                                                height: 100%;--}}
{{--                                                outline: none;--}}
{{--                                                opacity: 0;--}}
{{--                                            }--}}
{{--                                        </style>--}}

{{--                                        <div class="shadow bg-light" style="border-radius: 7px; border: 4px solid white">--}}
{{--                                            <input type="file"  multiple id="upload" name="noteFiles">--}}
{{--                                            <p id="text">Ders Notu Seçin</p>--}}
{{--                                        </div>--}}
{{--                                        <br>--}}
{{--                                        <script>--}}
{{--                                            let upload =document.querySelector('#upload');--}}
{{--                                            window.addEventListener('DOMContentLoaded', (event) => {--}}
{{--                                                upload.addEventListener("change",function () {--}}
{{--                                                    $('#text').text(this.files.length + " Dosya Seçildi.");--}}
{{--                                                });--}}
{{--                                            });--}}
{{--                                        </script>--}}

                                        <input type="number" name="user_id"  hidden value="{{Auth::user()->id}}">

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="state">Bölüm </label>
                                                <select name="department_id" class="form-control select" required>
                                                    <option>Seçiniz</option>
                                                    @foreach($departments as $department)
                                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="zip">Ders</label>
                                                <select name="lecture_id" class="form-control select"   required>
                                                    <option>Seçiniz</option>
                                                    @foreach($lectures as $lecture)
                                                        <option value="{{ $lecture->id }}">{{$lecture->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label for="zip">Dersin Hocası</label>
                                                <select name="teacher_id" class="form-control select" required>
                                                    <option>Seçiniz</option>

                                                    @foreach($teachers as $teacher)
                                                        <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email">Not Başlığı <span class="text-muted"></span></label>
                                                <input type="text" class="form-control" name="noteTitle" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email">Not Açıklama <span class="text-muted"></span></label>
                                                <input type="text" class="form-control" name="noteDescription"
                                                       required>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="address2">Not Fiyatı <span class="text-muted"></span></label>
                                            <input type="number" class="form-control" id="address2" name="notePrice"
                                                   required>
                                        </div>
                                        <button type="submit" class="btn btn-success float-right">Ekle</button>
                                    </form>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </section>
    </main>

@endsection
