@extends('employee.layout')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">Name : {{$Employees->name}}    </h5>
        <p class="card-text">Address :{{$Employees->address}}</p>
        <p class="card-text">Mobile : {{$Employees->mobile}}  </p>
        <p class="card-text">photo : {{$Employees->photo}}  </p>
  </div>

    </hr>

  </div>
</div>
