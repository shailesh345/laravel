@extends('films.layouts.app')
@section('content')
<h1>Film Description</h1>

@if(count($film_discription) > 0)
@foreach($film_discription as $film)
<ul class="list-group">
<li class="list-group-item"><img class="center" src="/film_images/{{$film->image}}"></li>
<li class="list-group-item"><h3>{{$film->name}}</h3></li>
<li class="list-group-item">{{$film->description}}</li>
<li class="list-group-item">Rating : @for($i=1;$i<=$film->rating;$i++)
<span class="fa fa-star checked"></span>
@endfor
@for($i=1;$i<=(5-$film->rating);$i++)
<span class="fa fa-star"></span>
@endfor
</li>
<li class="list-group-item">Ticket Price : {{$film->ticket_price}}</li>
<li class="list-group-item">Genres : 
{{ucwords(implode(' , ',(array)json_decode($film->genre)))}}</li>
<li class="list-group-item">Release date : {{$film->release_date}}</li>
<li class="list-group-item">Country : {{$film->country}}</li>
</ul>
@endforeach
@endif
@endsection
@include('films.layouts.inc.comment')
