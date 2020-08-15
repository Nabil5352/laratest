<?php

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
* Display all Tasks
*/
Route::get('/', function (){

});

/*
* Add a new task
*/
Route::post('/task', function (){
    
});

/*
* Update a task
*/
Route::patch('/task/{id}', function (){
    
});

/*
* Delete a task
*/
Route::delete('/task/{id}', function (){
    
});
