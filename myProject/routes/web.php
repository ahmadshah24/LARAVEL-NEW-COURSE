<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


class Task{
    public function __construct(
        public int $id,
        public string $name
    ) {

    }
}

$tasks = [
    new Task(
        1,
        'shah'
    ),
    new Task(
        2,
        'shah'
    ),
    new Task(
        3,
        'shah'
    ),
    new Task(
        4,
        'shah'
    )
    ];
Route::get('/', function () use($tasks){
    return view('index', [
        // 'name' => 'ahmad shah',
        'tasks' => $tasks
    ]);
});

Route::get('hello', function () {
    return 'hello';
})->name('hello');
// with the ->name we can set a name to our route
Route::get('/greet/{name}', function ($name) {
    return 'hello '.$name.' welcome';
});


Route::get('/hallo', function () {
    return redirect()->route('hello');
});
// and this is how we can call our rout with it's name


// if the no route matches the we can you fallback route 

Route::fallback(function () {
    return 'the route you are looking for is not found';
});



