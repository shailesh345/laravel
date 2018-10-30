<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
@if(count($errors) > 0)
@foreach($errors->all() as $error)
<div class="alert alert-danger">
{{$error}}
</div>
@endforeach 
@endif

@if(session('success'))
<div class="alert alert-success">
{{session('success')}}
</div>
@endif