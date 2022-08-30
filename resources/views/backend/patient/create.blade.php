@extends('backend.master')


@section('admin_content')
<h1><b>  Patient </b></h1>
   
    <a href="{{route('patient.list')}}" class="btn btn-primary">Patient List</a>
    <br> </br> 
  

<form action="{{route('patient.store')}}" method="POST">
  @csrf

  <div class="form-group">
  <div class="form-group col-md-5">
    <label for="inputFirstName"><b>Enter First Name</b></label>
    <input type="string" name="patient_firstname" class="form-control" id="inputFirstName" placeholder="First Name">
  </div>

  <div class="form-group">
  <div class="form-group col-md-5">
    <label for="inputLastName"><b>Enter Last Name</b></label>
    <input type="string" name="patient_lastname" class="form-control" id="inputLastName" placeholder="Last Name">
  </div>

  <div class="form-group">
  <div class="form-group col-md-5">
    <label for="inputMobileNo"><b>Mobile No</b></label>
    <input type="number" name="patient_mobileno" class="form-control" id="inputMobileNo" placeholder="+880....">
  </div>

  <div class="form-row">
  <div class="form-group col-md-5">
      <label for="inputEmail"><b>Email</b></label>
      <input type="email" name="patient_email"  class="form-control" id="inputEmail" placeholder="abc123@example.com">
    </div>
   </div>
  
  <div class="form-group">
  <div class="form-group col-md-4">
    <label for="inputDateOfBirth"><b>Date of Birth</b></label>
    <input type="date" name="patient_dateofbirth" class="form-control" id="inputDateOfBirth" placeholder="Date of Birth">
  </div>


  <div class="form-group">
  <div class="form-group col-md-6">
    <label for="inputAddress"><b>Address</b></label>
    <input type="text" name="patient_address" class="form-control" id="inputAddress" placeholder="Address">
  </div>
  
    <div class="form-group col-md-4">
      <label for="inputBloodGroup"><b>Blood Group</b></label>
      <select id="inputState" name="patient_bloodgroup" class="form-control">
        <option>Choose...</option>
        <option value="A+">A+</option>
        <option value="AB+">AB+</option>
        <option value="O+">O+</option>
        <option value="AB-">AB-</option>
        <option value="B+">B+</option>
        <option value="A-">A-</option>
        <option value="B-">B-</option>
        <option value="O-">O-</option>
      </select>
    </div>

    <div class="form-group">
    <div class="form-group col-md-6">
    <label for="inputgender"><b>Gender</b></label> 
    </div>

  <div name="gender" class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
    <input type="radio" name="patient_gender" id="patient_gender1" value="male"> Male
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="patient_gender" id="patient_gender2" value="female"> Female
  </label>
</div>



  <br> </br>

  <button type="reset" class="btn btn-primary">Reset</button>

  <button type="submit" class="btn btn-success">Submit</button>

</form>

@endsection