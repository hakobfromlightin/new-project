 <?php


 use App\Task;

 Route::group(['middleware' => ['web']], function (){
     Route::get('/', function () {

         $tasks = App\Task::latest()->get();
//         dd($tasks);

         return view('lessons.16_custom_directives', compact('tasks'));
     });

     Route::delete('tasks/{task}', function (Task $task){
         $task->delete();
     });
 });
