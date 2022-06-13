@extends('layouts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('structure/' .$structures->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$structures->id}}" id="id" />
        <label>code</label></br>
        <input type="text" name="code" id="code" value="{{$structures->code}}" class="form-control"></br>
        <label>name</label></br>
        <input type="text" name="designiation" id="designiation" value="{{$structures->name}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop