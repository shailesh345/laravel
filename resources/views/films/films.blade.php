@extends('films.layouts.app')
@section('content')
<h1>Films Page</h1>

@if(count($filmlist) > 0)
@foreach($filmlist as $film)
<ul class="list-group">
<li class="list-group-item"><img class="center" src="film_images/{{$film->image}}"></li>
<li class="list-group-item"><h3>{{$film->name}}</h3></li>
<li class="list-group-item">Rating : @for($i=1;$i<=$film->rating;$i++)
<span class="fa fa-star checked"></span>
@endfor
@for($i=1;$i<=(5-$film->rating);$i++)
<span class="fa fa-star"></span>
@endfor
</li>
<li class="list-group-item"><a href='/films/{{str_slug($film->name,"-")}}/{{$film->id}}'><button class="btn btn-sm btn-info">Get Full Description</button></a></li>
</ul>
@endforeach
@endif
 @include('films.layouts.inc.pager')
@endsection
@include('films.layouts.inc.sidebar')