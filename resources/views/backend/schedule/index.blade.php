@extends('backend.master')

@section('admin_content')
    <h1><b>  Doctor's Schedule </b></h1>
    
    <a href="{{route('schedule.create')}}" class="btn btn-success">Schedule Add</a>
    <br> </br>

    <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">Doctor Specialist</th>
      <th scope="col">Day</th>
      <th scope="col">Start Time</th>
      <th scope="col">End Time</th>
      <th scope="col">Per Patient Time</th>
      <th scope="col">Serial Visibility</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>


  <tbody>
  @foreach($schedules as $key=>$schedule)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$schedule->doctor_name}}</td>
      <td>{{$schedule->doctor_specialist}}</td>
      <td>{{$schedule->available_days}}</td>
      <td>{{$schedule->start_time}}</td>
      <td>{{$schedule->end_time}}</td>
      <td>{{$schedule->per_patient_time}}</td>
      <td>{{$schedule->serial_visibility}}</td>
      <td>{{$schedule->status}}</td>
      <td>
     
        <a href=""><img src="{{url('backend/icon/edit.svg')}}" alt=""></a>
        <a href=""><img src="{{url('backend/icon/delete.svg')}}" alt=""></a>
        
        
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{$schedules->links()}}

@endsection