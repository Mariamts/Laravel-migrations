@extends('home-page')

@section('Edit Car')

@section('content')
<div class="card">
  <div class="card-header">
    <h3>Edit Car</h3>
  </div>

  <form action="{{ route('cars.update', ['id' => $cars->id]) }}" method="post">
      
    @csrf
    
    <div class="card-body">
      <div class="form-group">
        <label>Name</label>
        <input class="form-control" type="text" name="name" value="{{ $cars->name }}" placeholder="Enter Name" >
      </div>
      <div class="form-group">
        <label>Make</label>
        <input class="form-control" type="text" name="make" value="{{ $cars->make }}" placeholder="Enter make">
      </div>
      <div class="form-group">
        <label>model</label>
        <input class="form-control" type="text" name="model" value="{{ $cars->model }}" placeholder="Enter model">
      </div>
      <div class="form-group">
        <label>license_number</label>
        <input class="form-control" type="number" name="license_number" value="{{ $cars->license_number }}" placeholder="Enter license_number">
      </div>
      <div class="form-group">
        <label>Weigth</label>
        <input class="form-control" type="number" name="weigth" value="{{ $cars->weigth }}" placeholder="Enter weigth">
      </div>
      <div class="form-group">
        <label>Registraion year</label>
        <input class="form-control" type="number" name="registration_year" value="{{ $cars->registration_year }}" placeholder="Enter registration_year">
      </div>
    </div>

    <div class="card-footer">
      <button class="btn btn-success">Update</button>
    </div>
  </form>
  
</div>
@endsection