<?php
use App\Mail\TestEmail;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/', function () {
  //  return view('welcome');
//});

// Auth::routes();
Auth::routes(['verify' => true]);

 

Route::get('/home', 'HomeController@index')->name('home') ;



//Route::group(['prefix' => 'user', 'middleware'=>'auth'], function () {
  Route::group([ 'middleware'=>'auth'], function () {   
    //route for posts
    Route::get('/posts', 'PostsController@index')->name('posts'); 
    Route::get('/post/trashed', 'PostsController@trashed')->name('post.trashed');
    Route::get('/post/hdelete/{id}', 'PostsController@hdelete')->name('post.hdelete');
    Route::get('/post/restore/{id}', 'PostsController@restore')->name('post.restore');
    Route::get('/post/edit/{id}', 'PostsController@edit')->name('post.edit');
    Route::post('/post/update/{id}', 'PostsController@update')->name('post.update');
    Route::get('/post/create', 'PostsController@create')->name('post.create');
    Route::post('/post/store', 'PostsController@store')->name('post.store'); 
    Route::get('/post/delete/{id}', 'PostsController@destroy')->name('post.delete'); 
    
     //route for Categories
    Route::get('/categories', 'CategoriesController@index')->name('categories'); 
    Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('category.edit');
    Route::get('/category/delete/{id}', 'CategoriesController@destroy')->name('category.delete'); 
    Route::get('/category/create', 'CategoriesController@create')->name('category.create');   
    Route::post('/category/store', 'CategoriesController@store')->name('category.store'); 
    Route::post('/category/update/{id}', 'CategoriesController@update')->name('category.update'); 


    //route for Tag
    Route::get('/tags', 'TagController@index')->name('tags'); 
    Route::get('/tag/edit/{id}', 'TagController@edit')->name('tag.edit');
    Route::get('/tag/delete/{id}', 'TagController@destroy')->name('tag.delete'); 
    Route::get('/tag/create', 'TagController@create')->name('tag.create');   
    Route::post('/tag/store', 'TagController@store')->name('tag.store'); 
    Route::post('/tag/update/{id}', 'TagController@update')->name('tag.update'); 
 


    //route for users
    Route::get('/users', 'UsersController@index')->name('users'); 
    Route::get('/users/admin/{id}', 'UsersController@admin')->name('users.admin'); //->middleware('admin'); 
    Route::get('/users/notadmin/{id}', 'UsersController@notAdmin')->name('users.not.admin'); 
    Route::get('/users/create', 'UsersController@create')->name('users.create'); 
    Route::post('/users/store', 'UsersController@store')->name('users.store'); 
    Route::get('/users/delete/{id}', 'UsersController@destroy')->name('users.delete'); 
    
    
    //route for user profile
    Route::get('/users/profile', 'ProfilesController@index')->name('users.profile');
    Route::post('/users/profile/update', 'ProfilesController@update')->name('users.profile.update');
    Route::get('/users/profile/create', 'ProfilesController@create')->name('users.profile.create'); 


     //route for about
    Route::get('/abouts', 'AboutsController@index')->name('abouts'); 
    //Route::get('/about/trashed', 'AboutsController@trashed')->name('about.trashed');
   // Route::get('/about/hdelete/{id}', 'AboutsController@hdelete')->name('about.hdelete');
   // Route::get('/about/restore/{id}', 'AboutsController@restore')->name('about.restore');
    Route::get('/abouts/edit/{id}', 'AboutsController@edit')->name('abouts.edit');
    Route::post('/abouts/update/{id}', 'AboutsController@update')->name('abouts.update');
    Route::get('/abouts/create', 'AboutsController@create')->name('abouts.create');
    Route::post('/abouts/store', 'AboutsController@store')->name('abouts.store'); 
  //  Route::get('/abouts/delete/{id}', 'AboutsController@destroy')->name('about.delete'); 
    

  //route for Categories
    Route::get('/teachers', 'TeachersController@index')->name('teachers'); 
    Route::get('/teacher/edit/{id}', 'TeachersController@edit')->name('teacher.edit');
    Route::get('/teacher/delete/{id}', 'TeachersController@destroy')->name('teacher.delete'); 
    Route::get('/teacher/create', 'TeachersController@create')->name('teacher.create');   
    Route::post('/teacher/store', 'TeachersController@store')->name('teacher.store'); 
    Route::post('/teacher/update/{id}', 'TeachersController@update')->name('teacher.update'); 



 //route for Categories
    Route::get('/aboutus', 'AboutusController@index')->name('aboutus'); 
    Route::get('/aboutus/edit/{id}', 'AboutusController@edit')->name('aboutus.edit');
	 Route::post('/aboutus/update/{id}', 'AboutusController@update')->name('aboutus.update'); 
    Route::get('/aboutus/create', 'AboutusController@create')->name('aboutus.create');   
	Route::post('/aboutus/store', 'AboutusController@store')->name('aboutus.store');
	Route::get('/aboutus/delete/{id}', 'AboutusController@destroy')->name('aboutus.delete'); 
    
     
   
 //route for Categories
    Route::get('/manges', 'MangesController@index')->name('manges');  
    Route::get('/mange/edit/{id}', 'MangesController@edit')->name('mange.edit');
    Route::get('/mange/delete/{id}', 'MangesController@destroy')->name('mange.delete'); 
    Route::get('/mange/create', 'MangesController@create')->name('mange.create');   
    Route::post('/mange/store', 'MangesController@store')->name('mange.store'); 
    Route::post('/mange/update/{id}', 'MangesController@update')->name('mange.update'); 




    Route::get('/callus', 'CallusController@index')->name('callus'); 
    Route::get('/callus/edit/{id}', 'CallusController@edit')->name('callus.edit');
	Route::post('/callus/update/{id}', 'CallusController@update')->name('callus.update'); 
    Route::get('/callus/create', 'CallusController@create')->name('callus.create');   
	Route::post('/callus/store', 'CallusController@store')->name('callus.store');
	Route::get('/callus/delete/{id}', 'CallusController@destroy')->name('callus.delete');





   //route for Categories
    Route::get('/prefs', 'PrefController@index')->name('prefs'); 
    Route::get('/pref/edit/{id}', 'PrefController@edit')->name('pref.edit');
	 Route::post('/pref/update/{id}', 'PrefController@update')->name('pref.update'); 
    Route::get('/pref/create', 'PrefController@create')->name('pref.create');   
	Route::post('/pref/store', 'PrefController@store')->name('pref.store');
	Route::get('/pref/delete/{id}', 'PrefController@destroy')->name('pref.delete'); 
	
	
	
	
	 //route for Categories
    Route::get('/calcul','CalculController@index')->name('calcul'); 
    Route::get('/calcul/edit/{id}','CalculController@edit')->name('calcul.edit');
	 Route::post('/calcul/update/{id}','CalculController@update')->name('calcul.update'); 
    Route::get('/calcul/create','CalculController@create')->name('calcul.create');   
	Route::post('/calcul/store','CalculController@store')->name('calcul.store');
	Route::get('/calcul/delete/{id}','CalculController@destroy')->name('calcul.delete'); 
	
	
	
	
	
	//route for Categories
    Route::get('/emangs', 'EmangController@index')->name('emangs'); 
    Route::get('/emang/edit/{id}', 'EmangController@edit')->name('emang.edit');
	 Route::post('/emang/update/{id}', 'EmangController@update')->name('emang.update'); 
    Route::get('/emang/create', 'EmangController@create')->name('emang.create');   
	Route::post('/emang/store', 'EmangController@store')->name('emang.store');
	Route::get('/emang/delete/{id}', 'EmangController@destroy')->name('emang.delete'); 
    
	
     //route for Categories
    Route::get('/edepts', 'EdeptController@index')->name('edepts'); 
    Route::get('/edept/edit/{id}', 'EdeptController@edit')->name('edept.edit');
	 Route::post('/edept/update/{id}', 'EdeptController@update')->name('edept.update'); 
    Route::get('/edept/create', 'EdeptController@create')->name('edept.create');   
	Route::post('/edept/store', 'EdeptController@store')->name('edept.store');
	//Route::post('/edept/{upload}', 'EdeptController@upload')->name('edept.upload');
	Route::get('/edept/delete/{id}', 'EdeptController@destroy')->name('edept.delete'); 
	


   //route for Categories
    Route::get('/grats', 'GratController@index')->name('grats'); 
    Route::get('/grat/edit/{id}', 'GratController@edit')->name('grat.edit');
	 Route::post('/grat/update/{id}', 'GratController@update')->name('grat.update'); 
    Route::get('/grat/create', 'GratController@create')->name('grat.create');   
	Route::post('/grat/store', 'GratController@store')->name('grat.store');
	
	Route::get('/grat/delete/{id}', 'GratController@destroy')->name('grat.delete'); 
	
	
	
	//route for Categories
    Route::get('/form1s', 'Form1Controller@index')->name('form1s'); 
    Route::get('/form1/edit/{id}', 'Form1Controller@edit')->name('form1.edit');
	 Route::post('/form1/update/{id}', 'Form1Controller@update')->name('form1.update'); 
    Route::get('/form1/create', 'Form1Controller@create')->name('form1.create');   
	Route::post('/form1/store', 'Form1Controller@store')->name('form1.store');
	Route::get('/form1/delete/{id}', 'Form1Controller@destroy')->name('form1.delete');    






 //route for Settings
        Route::get('/settings', 'SettingsController@index')->name('settings');
        Route::post('/settings/update', 'SettingsController@update')->name('settings.update');


  // Route::get('/', 'siteUIcontroller@index')->name('index');
	
	
   Route::get('/', 'webUcontroller@indexxx')->name('indexxx');

//Route::get('/', 'Ocontroller@ola')->name('ola');
// Route::get('/deptsh', ' DeptshController@deptsh1')->name('deptsh1'); 

    	//Route::resource('videos' , 'videos')->except(['show']);
		
     Route::get('/post/{slug}', 'webUcontroller@showPost')->name('post.show'); 

		 Route::get('/dep', 'webDcontroller@dep')->name('dep');
		  Route::get('/more', 'webDcontroller@more')->name('more');
		  Route::get('/mang', 'webDcontroller@mang')->name('mang');
		  
		  Route::get('/form1', 'webDcontroller@form1')->name('form1');
		   Route::get('/call', 'webDcontroller@call')->name('call');

       });
	   
	   
	   
