@extends('backend.master')

@section('admin_content')
    <h1><b>  Screening </b></h1>
    
    <a href="{{route('screening.create')}}" class="btn btn-success">Screening Add</a>
    <br> </br>

    <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Patient ID</th>
      <th scope="col">Doctor ID</th>
      <th scope="col">Date</th>
      <th scope="col">Remark</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>


  <tbody>
  @foreach($screenings as $key=>$screening)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$schedule->pat_id}}</td>
      <td>{{$schedule->doc_id}}</td>
      <td>{{$schedule->screening_date}}</td>
      <td>{{$schedule->screening_remark}}</td>

      <td>
     
        <a href=""><img src="{{url('icon/pencil-square.svg')}}" alt=""></a>
        <a href=""><img src="{{url('icon/trash.svg')}}" alt=""></a>
        
      </td>
    </tr>
  @endforeach
  </tbody>
</table>


{{$screenings->links()}}

@endsection