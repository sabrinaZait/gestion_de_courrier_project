@extends('layouts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Structures Page</div>
  <div class="card-body">
      
      <form action="{{ url('structure') }}" method="post">
        {!! csrf_field() !!}
        <label>code</label></br>
        <input type="text" name="code" id="code" class="form-control"></br>
        <label>nom</label></br>
        <input type="text" name="designiation" id="designiation" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop