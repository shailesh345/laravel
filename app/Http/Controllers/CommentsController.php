<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
class CommentsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except='=>['/','show']]);
    }
public function comment_submit(Request $request)
    {
    
      $this->validate($request, [
          'user_name'=>'required',
          'comment'=>'required'
      ]) ;
      
      $filmData=new Comment;
      //Prepare Data to save inti database
      $filmData->user_name=$request->input('user_name');
      $filmData->comment=$request->input('comment');
      $filmData->film_id=$request->input('film_id');
      $filmData->user_id= auth()->user()->id;
      
     $filmData->save();
      
     return redirect('/films/'.$request->input('film_slug').'/'.$request->input('film_id'))->with('success','Your comment is posted');
    }
}
