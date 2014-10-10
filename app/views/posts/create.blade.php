@extends('layouts.master')

@section('content')

<form role="form">
  <div class="form-group">
    <label for="exampleInputEmail1">Blog Title</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Add title here">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Blog Post</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter post here">
  </div>
  <div class="form-group">
  <div class="checkbox">
    <label>
      <input type="checkbox"> Save Blog to Private Records
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


@stop