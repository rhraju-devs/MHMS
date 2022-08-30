@extends('backend.master')

@section('admin_content')

<h1><b> Add Appointment </b></h1>
    
    <a href="{{route('appointment.list')}}" class="btn btn-primary">Appointment List</a>
   <br> </br>


<form action="{{route('appointment.store')}}" method="POST" style="padding: 50px;">
  @csrf

  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputPatientId"><b>Patient ID</b></label>
      <input type="stirng" name="patientid" class="form-control" placeholder="xyz123.....">
    </div>

    <div class="form-group col-md-6">
      <label for="inputDoctorName"><b>Select Doctor</b></label>
      <select class="custom-select" id="inputDoctorName" name="doctorname">
        <option selected> Select Doctor</option>
        @foreach($doctors as $doctor)
        <option value="{{$doctor->id}}">{{$doctor->name}}</option>
        @endforeach
      </select>
    </div>
  
    
    <!-- <div class="form-group col-md-6">
        <label for="inputDepartment"><b>Department</b></label>

      <input type="string" name="department" class="form-control" placeholder="Department">
    </div> -->


    <div class="form-group col-md-6">
        <label for="date"><b>Date</b></label>

      <input type="date" name="date" class="form-control" placeholder="Appointment Date">
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4"><b>Email</b></label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="abc123@example.com">
    </div>
    
  </div>



  
  <!-- <div class="form-group col-md-4">
      <label for="inputProblem">Problem</label>
      <select id="inputProblem" class="form-control">
        <option selected>Choose...</option>
        <option>Anxiety</option>
        <option>Depression</option>
        <option>Schizophrenia</option>
        <option>Phobias</option>
        <option>Eating Disorders</option>
        <option>Bipolar Disorders</option>
        <option>Panic Disorder</option>
      </select>
    </div> -->

    <div class="form-group">
    <div class="form-group col-md-8">
    <label for="inputProblemDetails"><b>Write Problem Details</b></label>
    <textarea  name="problemdetails" class="form-control" id="inputProblemDetails"placeholder="here....." rows="3"></textarea>
  </div>

    <div class="form-group">
    <label for="inputStatus"><b>Status</b></label> 
    </div>

  <div name="status" class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
    <input type="radio" name="status" id="status1" value="active"> Active
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="status" id="status2" value="inactive"> Inactive
  </label>
</div>

  <form> 
  <div class="form-group">
    <br> </br>
  <button type="reset" class="btn btn-primary">Reset</button>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</form>


@endsection