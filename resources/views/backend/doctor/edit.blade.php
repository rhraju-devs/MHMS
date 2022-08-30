@extends('backend.master')

@section('admin_content')

<h1><b>Edit Doctor's Information</b></h1>


<form action="{{route('doctor.update',$doctor->id)}}" method="post">
    @csrf
    <!--{{-- <label for="">Picture:</label>
    <input name="doctor_picture"  type="file" class="form-control" value="{{$doctor->picture}}"> --}}-->


    
    <div class="form-group col-md-4">
      <label for="inputrole"><b>Select Role</b></label>
      <select id="inputrole" name="role" class="form-control"  value="{{$doctor->role}}">
        <option selected disabled>choose role......</option>
        <option value="doctor">doctor</option>
        <option value="patient">patient</option>
      </select>
    </div>


    <label for="">Designation:</label>
    <input name="doctor_designation"  type="text" class="form-control" value="{{$doctor->designation}}">


    <div class="form-group col-md-4">
      <label for="inputAvailability"><b>Availability Status</b></label>
      <select id="inputAvailability" name="availability" class="form-control" value="{{$doctor->availability_status}}">
        <option>Choose....</option>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
      </select>
    </div>

    <!--{{-- <label for="">Email Address:</label>
    <input name="doctor_email"  type="email" class="form-control" value="{{$doctor->email}}">

    <label for="">Mobile No:</label>
    <input name="doctor_mobileno"  type="number" class="form-control" value="{{$doctor->mobileno}}"> --}}-->

    <button type="update" class="btn btn-success"> Update </button>
</form>

@endsection