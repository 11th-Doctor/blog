<?php

use App\Post;
use App\Http\Resources\Posts as PostResource;

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
Route::group(['middleware'=>'web'],function(){
	route::get('blog/{slug}',['as'=>'blog.single','uses'=>'BlogController@getSingle'])
	->where('slug','[\w\d\-\_]+');
	Route::get('blog',['as'=>'blog.index','uses'=>'BlogController@getIndex']);
	Route::get('contact','PagesController@getContact'); //(url,controller)
	Route::get('about','PagesController@getAbout');
	Route::get('/','PagesController@getIndex');

	Route::resource('posts','PostController');
	Route::resource('categories','categoryController',['except' => ['create']]);

	Route::get('/resource/posts', function() {
		return PostResource::collection(Post::all());
	});

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
