<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('contact/us','Hellocontroller@contact')->name('contact');

//Route::get('home/main Page','Hellocontroller@home')->name('home');

Route::get('about/us','Hellocontroller@about')->name('about');
//Route::get('write/post','Bolocontroller@writePost')->name('write.post');

//====================Category CURD are here=====================


Route::get('add/category','Addcontroller@AddCategory')->name('add.category');

//Read route==============================
Route::get('all/category','Allcontroller@AllCategory')->name('all.category');

//Inseart/Create route==============================
Route::post('store/category','Addcontroller@StoreCategory')->name('store.category');

//Single Data View route==================
Route::get('view/category/{id}','Viewcontroller@ViewController');

//Delete route==============================
Route::get('delete/category/{id}','Deletecontroller@DeleteController');
//Edit route===============================
Route::get('edit/category/{id}','Editcontroller@EditController');
//Update route===============================
Route::post('update/category/{id}','Updatecontroller@UpdateController');

//==========================Image post CRUD are here===========================

Route::get('write/post/','Postcontroller@WritePost')->name('write.post');

Route::post('store/post/','Postcontroller@StoreCategory')->name('store.post');
Route::get('all/post/','Postcontroller@AllPost')->name('all.post');

//View post================================
Route::get('view/post/{cat}','Postcontroller@ViewPost');






//Route::get('/home',function (){
//    echo "This is home page";
//});
//

//Route::get('/contact',function (){
//   return view('pages.contact');
//})->middleware ('age');
//
//
//
//Route::prefix('learnhunter')->group(function (){
//
//    Route::get('/about',function (){
//        return view('about');
//    });
//
//    Route::get('/contact',function (){
//        return view('pages.contact');
//
//    });
//});

