<?php

use App\Http\Controllers\contentController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\route;

Route::get('/', [ContentController::class, 'index']);
Route::resource('contents', ContentController::class);

?>