@extends('employee.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

    <form action="{{ url('employee') }}" method="post" enctype="multipart/form-data">>
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Name</label></br>
        <input type="text" name="name" id="name"       value="{{$employee->name}}    class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$employee->address}}    class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile"   value="{{$employee->mobile}}    class="form-control"></br>
        <input class="form-control" name="photo"            type="file" id="photo">
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  </div>
</div>
@stop
