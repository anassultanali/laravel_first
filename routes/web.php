<?php

use App\Http\Controllers\ExController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\redirect;


// Route::get("my/data", fn()=>view("my_data") );
// Route::controller(ExController::class)->group(function () {
//     Route::get("my/data" , "my_data");
// });

Route::get('example' , [ExController::class , 'my_data']);