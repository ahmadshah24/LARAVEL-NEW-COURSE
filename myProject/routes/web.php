<?php

use Illuminate\Http\Response;
use Illuminate\Http\Request;


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


// class Task
// {
//   public function __construct(
//     public int $id,
//     public string $title,
//     public string $description,
//     public ?string $long_description,
//     public bool $completed,
//     public string $created_at,
//     public string $updated_at
//   ) {
//   }
// }

// $tasks = [
//   new Task(
//     1,
//     'Buy groceries',
//     'Task 1 description',
//     'Task 1 long description',
//     false,
//     '2023-03-01 12:00:00',
//     '2023-03-01 12:00:00'
//   ),
//   new Task(
//     2,
//     'Sell old stuff',
//     'Task 2 description',
//     null,
//     false,
//     '2023-03-02 12:00:00',
//     '2023-03-02 12:00:00'
//   ),
//   new Task(
//     3,
//     'Learn programming',
//     'Task 3 description',
//     'Task 3 long description',
//     true,
//     '2023-03-03 12:00:00',
//     '2023-03-03 12:00:00'
//   ),
//   new Task(
//     4,
//     'Take dogs for a walk',
//     'Task 4 description',
//     null,
//     false,
//     '2023-03-04 12:00:00',
//     '2023-03-04 12:00:00'
//   ),
// ];

    Route::get('/', function(){
        return redirect()->route('tasks.index');
    });

    Route::get('/tasks', function (){
        return view('index', [
            // 'tasks' => \App\Models\Task::all()
            // 'tasks' => \App\Models\Task::latest()->get() // will only get the latest records
            'tasks' => \App\Models\Task::latest()->where('completed', true)->get() // will only get the records with completed 
            
            
        ]);
    })->name('tasks.index');

    Route::view('tasks/create', 'create')->name('tasks.create');
    Route::get('/tasks/{id}', function ($id){
        // return 'only single tasks';
        // $task = collect($tasks)->firstWhere('id',$id);
        

        // if(!$task){
        //     abort(Response::HTTP_NOT_FOUND);
        // }

        // return view('show', ['task' => \App\Models\Task::find($id)]);
        return view('show', ['task' => \App\Models\Task::findOrFail($id)]);
    })->name('tasks.show');

    Route::post('/tasks', function(Request $request){
      dd($request->all());
    })->name('tasks.store');
// Route::get('hello', function () {
//     return 'hello';
// })->name('hello');
// // with the ->name we can set a name to our route
// Route::get('/greet/{name}', function ($name) {
//     return 'hello '.$name.' welcome';
// });


// Route::get('/hallo', function () {
//     return redirect()->route('hello');
// });
// and this is how we can call our rout with it's name


// if the no route matches the we can you fallback route 

Route::fallback(function () {
    return 'the route you are looking for is not found';
});



