<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function test(){
    $book = \App\Book::find(1);
    echo $book->detail->isbn;
  }
}
