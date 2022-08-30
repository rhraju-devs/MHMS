@extends('backend.master')

@section('admin_content')

<h1><b>  Add Doctor's Schedule </b></h1>
   
    <a href="{{route('schedule.list')}}" class="btn btn-primary">Schedule List</a>
    <br> </br> 
  

<form action="{{route('schedule.store')}}" method="POST">
  @csrf


  <div class="form-group">
  <div class="form-group col-md-5">
    <label for="inputDoctorName"><b>Doctor Name</b></label>
    <input type="text" name="name" class="form-control" id="inputDoctorName" placeholder="Doctor Name">
  </div>


  <div class="form-group">
  <div class="form-group col-md-5">
    <label for="inputDoctorSpecialist"><b>Doctor Specialist</b></label>
    <input type="text" name="specialist" class="form-control" id="inputDoctorSpecialist" placeholder="Doctor Specialist">
  </div>


  <div class="form-group col-md-4">
      <label for="inputAvailableDays"><b>Available Days</b></label>
      <select id="inputState" name="available_d" class="form-control">
        <option>Sunday</option>
    
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
      </select>
    </div>


  <div class="form-group">
  <div class="form-group col-md-5">
    <label for="inputStartTime"><b>Start Time</b></label>
    <input type="time" name="start_t" class="form-control" id="inputStartTime" >
  </div>


  <div class="form-group">
  <div class="form-group col-md-5">
    <label for="inputEndTime"><b>End Time</b></label>
    <input type="time" name="end_t" class="form-control" id="inputEndTime">
  </div>

  <div class="form-row">
  <div class="form-group col-md-5">
      <label for="inputPerPatientTime"><b>Per Patient Time</b></label>
      <input type="text" name="per_patient_t"  class="form-control" id="inputPerPatientTime" placeholder="time">
    </div>
   </div>
  
  
    <div class="form-group col-md-4">
      <label for="inputSerialVisibility"><b>Serial Visibility</b></label>
      <select id="inputState" name="serial_v" class="form-control">
        <option>Sequential</option>
        <option value="Sequential">Sequential</option>
        <option value="Timestamp">Timestamp</option>
      </select>
    </div>


    <div class="form-group">
    <div class="form-group col-md-6">
    <label for="inputStatus"><b>Status</b></label> 
    </div>


  <div name="schedulestatus" class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
    <input type="radio" name="status" id="status1" value="active"> Active
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="status" id="status2" value="inactive"> Inactive
  </label>
</div>



  <br> </br>

  <button type="reset" class="btn btn-primary">Reset</button>

  <button type="save" class="btn btn-success">Save</button>

</form>

@endsection