@extends('backend.master')
@section('admin_content')
    <h1><b>  Appointment </b></h1>
    
    <a href="{{route('appointment.create')}}" class="btn btn-primary">Appointment Add</a>
    <br> </br>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Serial No</th>
          <th scope="col">Appointment ID</th>
          <th scope="col">Patient ID</th>
          <th scope="col">Patient Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone No</th>
          <th scope="col">Appointment Date</th>
          <th scope="col">Time</th>
          <th scope="col">Doctor Name</th>
          <!-- <th scope="col">Department</th> -->
          <th scope="col">Problem Details</th>
          <!-- <th scope="col">Status</th> -->
          <th scope="col">Action</th>
        </tr>
      </thead>

        <tbody>
          @foreach($appointments as $key=>$appointment)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$appointment->id}}</td>
   
      <td>{{$appointment->patient_id}}</td>
      <td>{{$appointment->patient_first_name}} {{$appointment->patient_last_name}}</td>
      <td>{{$appointment->email}}</td>
      <td>{{$appointment->phone}}</td>
      <td>{{$appointment->appointment_date}}</td>
      <td>{{$appointment->time}}</td>
      <td>{{$appointment->doctor_name}}</td>
      <td>{{$appointment->problem_details}}</td>
      <!-- <td>{{$appointment->status}}</td> -->
      <td>
     
        <a href=""><img src="{{url('backend/icon/edit.svg')}}" alt=""></a>
        <a href=""><img src="{{url('backend/icon/delete.svg')}}" alt=""></a>
        
        
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{$appointments->links()}}


@endsection