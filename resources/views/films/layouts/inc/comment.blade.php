@section('sidebar')
        <div class="well well-sm">
        <h3>Your Comment</h3>
        </div>
        <div class="well well-lg">
        {!! Form::open(['url' => 'comment/submit']) !!}
<div class="form-group">
  {{Form::hidden('film_id', $film->id)}}
  {{Form::hidden('film_slug',str_slug($film->name,"-"))}}
  {{Form::label('user_name', 'Your Name',['class' => 'required'])}}
  {{Form::text('user_name', '', ['class' => 'form-control','placeholder'=>'Your Name','required' => 'required'])}}
</div>
        
        <div class="form-group">
  {{Form::label('comment', 'Comment',['class' => 'required'])}}
  {{Form::textarea('comment', '', ['class' => 'form-control','placeholder'=>'Write here','required' => 'required'])}}
</div>
        <div class="form-group">
  {{Form::submit('Post',['class'=>'btn btn-sm btn-info'])}}
</div>

{!! Form::close() !!}

<div class="clearfix"></div>

        </div>
 <div class="well well-lg">
        <h4>User Comments</h4>
        @if(count($comments) > 0)
@foreach($comments as $comment)
         <blockquote>
    <p>{{$comment->comment}}</p>
    <footer>{{$comment->user_name}}</footer>
  </blockquote>
@endforeach
@endif
        </div>
@endsection
   