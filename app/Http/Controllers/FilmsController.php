<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmsController extends Controller
{
    public function films()
    {
    
    return view('films.films');
    
    }
    
      public function film_description()
    {
    
    return view('films.film_description');
    
    }
    
      public function create()
    {
    
    return view('films.create');
    
    }
    
      public function creste_insert()
    {
    
    
    
    }
    
      public function register()
    {
    
    return view('films.register');
    
    }
    
      public function register_insert()
    {
    
    
    
    }
    
      public function login()
    {
    
    return view('films.login');
    
    }
    
      public function login_pro()
    {
    
    
    
    }
    
      public function comment_insert()
    {
    
  
    
    }
    
  
      public function logout()
    {
    
    
    
    }
    
    
}
