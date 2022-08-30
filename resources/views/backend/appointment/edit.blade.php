@extends('backend.master')

@section('admin_content')

<h1><b>Edit Appointment's Information</b></h1>


<form action="{{route('appointment.update',$appointment->id)}}" method="post">
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


    <label for="">Change Appointment Date:</label>
    <input name="appointmentDate"  type="date" class="form-control" value="{{$appointment->date}}">

    
    <label for="">Change Appointment Time:</label>
    <input name="appointmentTime"  type="time" class="form-control" value="{{$appointment->time}}">

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