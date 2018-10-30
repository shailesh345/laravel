@extends('films.layouts.app')
@section('content')
<h1>Create Film</h1>
<div class="form-horizontal" style="margin-bottom:55px;">
{!! Form::open(['url' => 'create/submit']) !!}
<div class="form-group">
  {{Form::label('name', 'Film Name')}}
  {{Form::text('name', '', ['class' => 'form-control','placeholder'=>'Enter Film Name'])}}
</div>

<div class="form-group">
  {{Form::label('description', 'Film Description')}}
  {{Form::textarea('description', '', ['class' => 'form-control','placeholder'=>'Enter Description'])}}
</div>

<div class="form-group">
  {{Form::label('release_date', 'Release Date')}}
  {{Form::date('release_date', \Carbon\Carbon::now(), ['class' => 'form-control'])}}
</div>

<div class="form-group">
  {{Form::label('rating', 'Rating')}}
  {{Form::selectRange('rating',1,10,null,['class' => 'form-control','placeholder'=>'Select Rating'])}}
</div>

<div class="form-group">
  {{Form::label('ticket_price', 'Ticket Price')}}
  {{Form::text('ticket_price', '', ['class' => 'form-control','placeholder'=>'Ticket Price in $'])}}
</div>

<div class="form-group">
  {{Form::label('country', 'Country')}}
  {{Form::select('country',['WW'=>'World Wide','IN'=>'India','UK'=>'United Kingdom','USA'=>'United State Of America'],null ,['class' => 'form-control','placeholder'=>'Select Country'])}}
</div>

<div class="form-group" id="genres_init">
<div class="row">
  <div class="col-md-12">
  {{Form::label('genre', 'Genres')}}
  </div>
    <div class="col-md-4">
  {{Form::select('country',['action'=>'Action','romance'=>'Romance','drama'=>'Drama','scifi'=>'Sci-Fi'],null ,['class' => 'form-control','placeholder'=>'Genres Type'])}}
  </div>
  <div class="col-md-2">
    <span class="add_more_span">{{Form::button('+',['class'=>'btn btn-xs btn-success add_more'])}}</span>
    <span class="add_remove_span">{{Form::button('x',['class'=>'btn btn-xs btn-danger add_remove'])}}</span>
  </div>
</div>
  </div>


<div class="form-group">
  {{Form::label('image', 'Upload Poster')}}
  {{Form::file('image')}}
</div>

<div class="form-group">
  {{Form::submit('Submit',['class'=>'btn btn-sm btn-info'])}}
</div>

{!! Form::close() !!}

<div class="clearfix"></div>

<script>
$(document).ready(function(){
function rm_btn()
{
$(".add_remove").show();
$(".add_remove").first().hide();
}
rm_btn();

var genresDataRow=$("#genres_init").html();
//Add
$(document).on("click",".add_more",function(){
$("#genres_init").append(genresDataRow);
rm_btn();
return ;
});
//remove
$(document).on("click",".add_remove",function(){
$(this).parents('.row').first().remove();
rm_btn();
return ;
});
});
</script>
</div>
@endsection

