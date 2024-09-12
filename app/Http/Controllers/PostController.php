<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index(){
    return "this is index method";
  }

  public function post(){
    return  "this is post method";
  }

  public function write(){
    return "this is write method";
  }
}
