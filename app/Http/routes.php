<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
<<<<<<< HEAD


=======
Route::get('/names/{rtype}', ['as' => 'names', 'uses' => 'NameController@names' ]);
Route::get('/index', ['as' => 'index', 'uses' => 'NameController@index' ]);
>>>>>>> d2e5093baf910f66b7bbfc051a597afebaf3557a
//Route::get('/names/fl', ['as' => 'flnames', 'uses' => 'NameController@allFlNames' ]);
//Route::get('/names/ul', ['as' => 'ulnames', 'uses' => 'NameController@allUlNames' ]);

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
<<<<<<< HEAD
    Route::get('/', function(){
        return redirect('blank');
    });

    Route::get('/index/{rtype}', ['as' => 'index', 'uses' => 'NameController@index' ]);
    Route::get('/blank', ['as' => 'blank', 'uses' => 'NameController@blank' ]);
    Route::post('/save', ['as' => 'save', 'uses' => 'NameController@save' ]);
=======
    //
>>>>>>> d2e5093baf910f66b7bbfc051a597afebaf3557a
});
