<?php

use App\Http\Controllers\FormValidationController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\invokable\relationship\hasManyController;
use App\Http\Controllers\invokable\relationship\hasOneController;
use App\Http\Controllers\InvokeController;
use App\Http\Controllers\MultipleWhereController;
use App\Http\Controllers\PaginationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeacherController;

/**
 * Testing parameter @param id and optional parameter @param id
 * TODO: passing  the "?" sign to make the parameter optional
 */
Route::get('welcome/{id?}', function ($id=null) {
    if($id){
      return $id;
    }
    return "There have nothing to show. No ID found";
});

/**
 * Route parameter type selection @param id
 * TODO: use the whereNumber method to select the parameter type to a number
 */
Route::get('parameter-type-number/{id}', function($id = null){
  return $id;
})->whereNumber('id');

/** 
 * TODO: use the whereAlpha method to select the parameter type to a alphabet
 */
Route::get('/parameter-type-alpha/{string}', function(string $string){
  return $string;
})->whereAlpha('string');

/** 
 * TODO: use the whereAlphaNumeric method to select the parameter type to both alphabet and numeric
 */
Route::get('/parameter-type-alpha-numeric/{string}', function(string $string){
  return $string;
})->whereAlphaNumeric('string');


/** 
 * TODO: use the whereIn method to select the parameter from the array return value
 */
Route::get('/parameter-type-from-array/{array}', function(string $string){
  if ($string === 'name' || $string === 'email') {
    return 'EliteDev Emon';
  }
})->whereIn('array', ['post', 'name', 'email']);

/** 
 * TODO: use the where method to select the parameter from the regular expression
 */
Route::get('regex/{regex}', function(string $string){
  return $string;
})->where('regex', '[0-9a-zA-Z]+@gmail.com');

/**
 * Redirect URL
 * TODO: use redirect method to redirect any url to another url
 */
Route::redirect('parameter-type-from-regex/{regex}', 'regex/{regex}', 301);

/**
 * Route group with prefix
 */
Route::prefix('post')->group(function () {
    Route::get('about', function(){
      return "This is about route";
    });
    Route::get('contact', function(){return "This is contact route";});
});

/**
 * Fallback route
 */
Route::fallback(function(){
  return "<h1>Page not found.</h1>";
});

/**
 * Blade template syntax
 */
Route::view('blade-syntax', 'blade-syntax');

/**
 * Make a controller group
 */
Route::controller(PostController::class)->group(function(){
  Route::get('index',  'index')->name('index');
  Route::get('post', 'post')->name('post');
  Route::get('write', 'write')->name('write');
});

/**
 * section checking system
 */
Route::view('section-checking', 'layout-check');

/**
 * *include directive check
 */
Route::view('include-directive', 'include-directive.body');

/**
 * Send value to view using @param Array method
 * Send value using @param with method
 * Send value with @param keyname in method
 */
Route::get('post', function(){
  $name = 'MD EMON HASSAN';
  // return view('send-value', ['name' => $name]);
  // return view('send-value')->with('nickname', $name);
  // return view('send-value')->withName($name);
});

/**
 * Checking the abort_if() method
 */


function getName($index){
  //variable names
  $names = [
    1 => ['name'=>'MD EMON HASSAN'],
    2 => ['name'=>'ELITEDEV EMON']
  ];

  abort_if(!isset($names[$index]), 404);

  // returning the name value
  return $names[$index]['name'];
}

Route::get('name/{index}', function($index){
  $name = getName($index);
  return $name;
});

/**
 * invokable controller testing
 */
Route::get('invokable-controller', InvokeController::class);

/**
 * Multiple where condition check
 */
Route::get('multiple-where-controller', MultipleWhereController::class);

/**
 * Checking pagination links
 */
Route::get('pagination', PaginationController::class);

/**
 * check group and join status
 */
Route::get('join-group', GroupController::class);

/**
 * check union for students and teachers table
 */
Route::get('union-data', TeacherController::class);

/**
 * Form validation with @param request instance
 */
Route::view('form-validation', 'forms.formValidation');
Route::post('form-validation', FormValidationController::class)->name('form-validation');

/**
 * Relationship controller
 */

Route::prefix('relation')->group(function(): void{
  # hasOne
  Route::get('has-one', hasOneController::class);
  # hasMany
  Route::get('has-many', hasManyController::class);
});