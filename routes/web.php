<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;

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

//use App\Models\Image;

Route::get('/', function () {

    /*$images = Image::all();
    foreach ($images as $image) {
        echo "<hr>";

        echo($image->user->name);
        echo "<br>";

        if ($image->comments->isNotEmpty()) {
            echo'<strong>Comentarios</strong>';
            echo "<br>";

            foreach ($image->comments as $comment) {
                echo $comment->user->name. ':  ' .$comment->content;
            }
            echo "<br>";
        }

        foreach ($image->likes as $like) {
            echo $like->user->name. '  LIKES:  ' .count($image->likes);
            echo "<br>";
            echo "<hr>";
        }
        

        
    }*/

    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
