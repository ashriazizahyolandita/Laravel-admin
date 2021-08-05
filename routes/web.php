<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
route::get('/friends/{id}', [Cobacontroller::class, 'show']);
route::put('/friends/{id}', [Cobacontroller::class, 'update']);
route::delete('/friends/{id}', [Cobacontroller::class, 'destroy']);

route::get('', [ProfileController::class, 'index']);

route::resources([
    'profile' =>ProfileController::class,
]);
