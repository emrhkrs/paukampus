<?php

//Route::group(['prefix'=>'/fakulteler'],function (){
//    Route::get('','FacultyController@index')->name('faculties');//tüm fakülteleri liseleme
//    //Route::get('/{fakulte_adi}','FacultyController@getFacultyDetails')->name('facultyDetails');
//});

Route::get('/deneme', function (){
    return view('search-result');
});
Route::get('/', 'AnasayfaController@index')->name('anasayfa');
Route::get('/kayit-ol', 'UserController@registerView')->name('registerView');
Route::post('/kayit-ol', 'UserController@register')->name('register');
Route::get('/giris-yap', 'UserController@loginView')->name('loginView');
Route::post('/giris-yap','UserController@login')->name('login');
Route::post('/cikis-yap','UserController@logout')->name('logout');

Route::get('/not-olustur','NoteController@createNoteView')->name('createNoteView');
Route::post('/not-olustur','NoteController@createNote')->name('createNote');
Route::get('/kitap-olustur','BooksController@createBookView')->name('createBookView');
Route::post('/kitap-olustur','BooksController@createBook')->name('createBook');

//Route::get('/sepet', 'SepetController@index')->name('sepet');

Route::get('/ders-notlari', 'FacultyController@showFaculties')->name('showFaculties');
Route::get('/fakulte/{fakulte_adi}', 'FacultyController@showFacultyDepartments')->name('showFacultyDepartments');
Route::get('/b/{bolum_adi}', 'DepartmentController@showDepartmentLectures')->name('showDepartmentLectures');
Route::get('/b/{bolum_adi}/{ders_adi}', 'LectureController@showLectureNotes')->name('showLecturesNotes');

Route::get('/pay/payment',function (){
    return redirect(route('showFaculties'));
})->name('payCostView');
Route::post('/pay/payment','PaymentController@payCost')->name('payCost');

Route::post('/ara/ara','SearchController@search')->name('searching');

















