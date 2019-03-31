<?php

use App\Mail\MailContact;

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

Route::get('/', 'PagesController@homePage')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact', 'PagesController@Postcontact')->name('contact.send');


// Route::get('/post', function () {
//     return view('frontend.pages.post');
// })->name('post');

//les routes du blog
Route::prefix('blog')->namespace('Blog')->group(function(){
        Route::get('/','PostsController@index')->name('blog.show');
});