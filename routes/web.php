<?php


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index']);



Route::get('contact', function(){

    return view('contact');
});



Route::get('about', function () {

    return view('about');
})->name('about');


// Route::get('posts/{slug}/{category?}', function ($slug, $category =null) {

//     $title='welcome to Laravel';

//     return view('posts',compact('title', 'slug', 'category'));
// });


Route::resource('posts', PostController::class);


Route::resource('category', CategoryController::class);
