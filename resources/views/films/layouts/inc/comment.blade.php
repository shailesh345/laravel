@section('sidebar')
        <div class="well well-sm">
        <h3>Your Comment</h3>
        </div>
        <div class="well well-lg">
        {!! Form::open(['url' => 'create/submit','enctype' => 'multipart/form-data']) !!}
<div class="form-group">
  {{Form::label('user_name', 'Your Name')}}
  {{Form::text('user_name', '', ['class' => 'form-control','placeholder'=>'Your Name'])}}
</div>
        
        <div class="form-group">
  {{Form::label('comment', 'Comment')}}
  {{Form::textarea('comment', '', ['class' => 'form-control','placeholder'=>'Write here'])}}
</div>
        <div class="form-group">
  {{Form::submit('Post',['class'=>'btn btn-sm btn-info'])}}
</div>

{!! Form::close() !!}

<div class="clearfix"></div>

        </div>
 <div class="well well-lg">
        <h4>User Comments</h4>
        </div>
@endsection
   