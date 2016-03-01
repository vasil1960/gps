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


// get request
    Route::get('/', function(){
        return redirect('blank');
    });

    Route::get('/add_names/{rtype}', ['as' => 'add_names', 'uses' => 'NameController@add_names' ]);
    Route::get('/show_names', ['as' => 'show_names', 'uses' => 'NameController@show_names' ]);
    Route::get('/blank', ['as' => 'blank', 'uses' => 'NameController@blank' ]);
    Route::get('/city_autocomplete', ['as' => 'city_autocomplete', 'uses' => 'AutocompleteController@city_autocomplete' ]);
    Route::get('/city1_autocomplete', ['as' => 'city1_autocomplete', 'uses' => 'AutocompleteController@city1_autocomplete' ]);

// post request
    Route::post('/save', ['as' => 'save', 'uses' => 'NameController@save' ]);

// 112
    Route::get('/signali', ['as' => 'signali', 'uses' => 'Signali112Controller@allSignals' ]);

});
