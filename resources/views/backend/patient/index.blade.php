@extends('backend.master')


@section('admin_content')
    <h1><b>  Patient </b></h1>
    
    <a href="{{route('patient.create')}}" class="btn btn-success">Patient Add</a>
    <br> </br>

    <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">ID No</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Email Address</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Gender</th>
      <th scope="col">Marital Status</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($patients as $key=>$patient)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$patient->id}}</td>
      <td>{{$patient->first_name}}</td>
      <td>{{$patient->last_name}}</td>
      <td>{{$patient->mobileno}}</td>
      <td>{{$patient->email}}</td>
      <td>{{$patient->dob}}</td>
      <td>{{$patient->gender}}</td>
      <td>{{$patient->marital_status}}</td>
      <td>{{$patient->status}}</td>
      <td>
     
        <a href=""><img src="{{url('backend/icon/edit.svg')}}" alt=""></a>
        <a href="{{route('patient.delete',$patient->id)}}"><img src="{{url('backend/icon/delete.svg')}}" alt=""></a>
        
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{$patients->links()}}

@endsection