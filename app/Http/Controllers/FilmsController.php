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
    
      public function create_submit(Request $request)
    {
    
      $this->validate($request, [
          'name'=>'required',
          'description'=>'required',
          'release_date'=>'required',
          'rating'=>'required',
          'ticket_price'=>'required',
          'rating'=>'required',
          'country'=>'required',
          'genre'=>'required',
      ]) ;
     return 'SUCCESS';
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
