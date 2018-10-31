<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Comment;
class FilmsController extends Controller
{
    public function films($pageno=FALSE)
    {
    if(!$pageno){$pageno=0;}
    return view('films.films')->with('filmlist',Film::where('id','>',$pageno)->paginate(1));
    
    }
    
      public function film_description($name,$id)
    {
    return view('films.film_description',['film_discription'=>Film::where('id',$id)->get(),'comments'=>Comment::where('film_id',$id)->get()]);
    
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
          'image'=>'required|image|max:10000|mimes:png,jpg,jpeg,gif',
      ]) ;
      
      $filmData=new Film;
      //Prepare Data to save inti database
      $filmData->name=$request->input('name');
      $filmData->description=$request->input('description');
      $filmData->release_date=$request->input('release_date');
      $filmData->rating=$request->input('rating');
      $filmData->ticket_price=$request->input('ticket_price');
      $filmData->country=$request->input('country');
      $filmData->genre=json_encode((object)$request->input('genre'));
      
      //Validate image
        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/film_images');
        $image->move($destinationPath, $name);
    }
      $filmData->image=$name;
      
     $filmData->save();
      
     return redirect('/create')->with('success','Film record successfully created');
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
