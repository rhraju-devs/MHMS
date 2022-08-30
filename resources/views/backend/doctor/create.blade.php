@extends('backend.master')


@section('admin_content')
    <h1><b>  Add Doctor's Information </b></h1>

    <a href="{{route('doctor.list')}}" class="btn btn-primary">Doctor List</a>
    <br> </br> 

    @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


    <form action="{{route('doctor.store')}}" method="POST" >
      @csrf


    <div class="form-group">
    <label for="inputpicture"><b>Insert Picture</b></label>
    <input type="file" name="doctor_picture" class="form-control" id="inputname"placeholder="Insert Picture">
  </div>
    <div class="form-group">
    <label for="inputname"><b>Enter Name</b></label>
    <input type="text"  name="doctor_name" class="form-control" id="inputname"placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="inputlicense"><b>Enter License No</b></label>
    <input type="number"  name="doctor_license" class="form-control" id="inputlicense"placeholder="License No">
  </div>
  <div class="form-group">
    <label for="inputspecialist"><b>Enter Specialist</b></label>
    <input type="string"  name="doctor_specialist" class="form-control" id="inputspecialist"placeholder="Enter Specialist">
  </div>
  <div class="form-group">
    <label for="inputdesignation"><b>Enter Designation</b></label>
    <input type="string"  name="doctor_designation" class="form-control" id="inputdesignation"placeholder="Enter Designation">
  </div>
  <div class="form-group">
    <label for="inputexperience"><b>Experience</b></label>
    <textarea  name="doctor_experience" class="form-control" id="inputexperience"placeholder="" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="inputacademicrecords"><b>Academic Records</b></label>
    <textarea  name="doctor_record" class="form-control" id="inputacademicrecords"placeholder="here....." rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="inputemailaddress"><b>Enter Email address</b></label>
    <input type="email"  name="doctor_email"class="form-control" id="inputemailaddress"placeholder="name@example.com" required>
  </div>
  <div class="form-group">
    <label for="inputmobileno"><b>Enter Mobile No</b></label>
    <input type="number"  name="doctor_mobileno" class="form-control" id="inputmobileno"placeholder="Enter Mobile No">
  </div>
  <div class="form-group">
    <label for="inputaddress"><b>Enter Address</b></label>
    <textarea  name="doctor_address" class="form-control" id="inputaddress"placeholder="Enter Addresss" rows="3"></textarea>
  </div>
 
  <!-- <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
   -->
   <div class="form-group">
    <label for="inputgender"><b>Gender</b></label>
   <!-- <input type="string" class="form-control" id="inputdesignation"placeholder="Gender">
   --> 
    </div>

  <div name="gender" class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary">
    <input type="radio" name="gender" id="gender1" value="male"> Male
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="gender" id="gender2" value="female"> Female
  </label>
</div>



<br> </br>


<button type="reset" class="btn btn-primary">Reset</button>
<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection