<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
Get money
*/
Route::get('get/outcome', 'OutcomeController@index');
Route::get('get/income', 'IncomeController@index');

/*
Last 5 actions
*/
Route::get('last/outcome', 'OutcomeController@lasts');
Route::get('last/income', 'IncomeController@lasts');
/*
Post money
*/

Route::post('income', 'IncomeController@store');
Route::post('outcome', 'OutcomeController@store');

/*
Delete money
*/
Route::delete('income{id}', 'IncomeController@destroy');
Route::delete('outcome{id}', 'OutcomeController@destroy');
