<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

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
          'rating'=>'required|numeric',
          'ticket_price'=>'required',
          'country'=>'required',
          'genre'=>'required',
          'image'=>'required|max:10000|mimes:png,jpg,jpeg,gif',
      ]) ;
      
      $filmData=new Film;
      //Prepare Data to save inti database
      $filmData->name=$request->input('name');
      $filmData->description=$request->input('description');
      $filmData->release_date=$request->input('release_date');
      $filmData->rating=$request->input('rating');
      $filmData->ticket_price=$request->input('ticket_price');
      $filmData->country=$request->input('country');
      $filmData->genre=$request->input('genre');
      
      //Validate image
      $filmData->image=$image;
      
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
