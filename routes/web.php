<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;





Route::get('/',[PostController::class,'index']);

// Route::get('post',[PostController::class,'create']);
Route::resource('posts', PostController::class);

?>
