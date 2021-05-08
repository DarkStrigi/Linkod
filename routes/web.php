<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
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

Route::get('/', function () {
    return view('landing');
});

Route::get('/insert', function() {
    $random = Str::random(10);
    $stuRef = app('firebase.firestore')->database()->collection('Users')->document($random);
    $stuRef->set([
         'First_Name' => 'Working',
         'Last_Name' => 'OMG',
         'Age' => 15
     ]);
});

Route::get('/signup', function(){
    return view('signup');
});

Route::get('/signup/create',[SignUpController::class]);
// Route::get('/account/{name}', function(){
//     $account = app('firebase.firestore')->database()->collection('Users')->document('name')->snapshot();
//     print_r('Age ='.$account->data()['Age']);
//     print_r("<br>". 'First_Name = '.$account->data()['First_Name']);
//     print_r("<br>".'Last_Name = '.$account->data()['Last_Name']);
// });
  
//   Route::get('/update', function(){
//     $student = app('firebase.firestore')->database()->collection('User')->document('166f34ea1c9641dab0a0')
//    ->update([
//     ['path' => 'age', 'value' => '18']
//    ]);
//    echo "<h1>".'updated'."</h1>";
//   });
  
//   Route::get('/delete', function(){
//    app('firebase.firestore')->database()->collection('User')->document('166f34ea1c9641dab0a0')->delete();
//    echo "<h1>".'deleted'."</h1>";
//   });
  