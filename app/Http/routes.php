<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Http\Request;

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('sample', 'SampleController@index');

Route::get('top', function () {
    return View::make('top')
            ->with('title', 'TOP | nonovel.jp') // withでテンプレートに変数をセット
            ;
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/*
|--------------------------------------------------------------------------
| Example
|--------------------------------------------------------------------------
*/

Route::resource('sample','SampleController');

Route::post('foo/bar', function()
{
    return 'Hello World';
});

Route::put('foo/bar', function()
{
    //
});

Route::delete('foo/bar', function()
{
    //
});

Route::match(['get', 'post'], 'hello', function()
{
    return 'Hello World';
});

Route::any('foo', function()
{
    return 'Hello World';
});

Route::get('user/{id}', function($id)
{
    return 'ID: '.$id;
})
->where('id', '[0-9]+');

Route::get('user/{name}', function($name=null)
{
    $current = Route::currentRouteName();
    return 'User Name: '.$name.' --- '.$current;
});

Route::get('user/{id}/{name}', function($id, $name)
{
    return 'Name: '.$name.' / ID: '.$id;
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
