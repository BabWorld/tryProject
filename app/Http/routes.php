<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
	//return realpath(base_path('resources/views'));
   // return view('welcome');
//});
//Route::get('users', ['uses'=>'UsersController@index']);
/*
Route::get('users', function()
{
	//creating an array of users
	$users=[
	   '0'=> [
	       'first_name' => 'Becky',
	       'last_name' => 'Addai',
	       'country'  => 'Ghana'

	   ],
	  ' 1'=> [
	       'first_name' => 'Fofie',
	       'last_name' => 'Ameyaw',
	       'country'  => 'USA'

	   ]


	];
return $users;

});
*/
/*Route::post('test', function()
{
echo "we just created an item";
});
Route::get('test', function(){
	echo '<form action="test" method="POST">';
	echo '<input type="submit">';
	echo '<input type="hidden" value="' . csrf_token() . '" name="_token">';
	echo '</form>';

});
*/
Route::get('/',function(){

});
Route::get('customer', function(){
	$customer=App\Customer::first();
	echo $customer->name;
});
Route::get("/",function(){
	return "welcome to laravel";

});
Route::get('about', 'PagesContorller@about');
Route::get('contact','PagesContorller@Contact');
//Route::get('about','PreviewController@about');


