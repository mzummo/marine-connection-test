<?php

use Illuminate\Http\Request;
use App\Boat;
use App\Customer;
use App\Sale;
//use App\Http\Resources\Boat as BoatResouse;
use App\Http\Resources\CustomerCollection as CustomerCollection;
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



//Route::get('/customer', function () {
//    return UserResource::collection(User::all());
//});

// todo: namespace API Controllers and pass in API namespace to use so we dont need to use API\... each time
Route::resource('customer', 'CustomerController'); // return resource and collections from within controller

