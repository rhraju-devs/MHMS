@extends('backend.master')


@section('admin_content')
    <h1><b>  Doctor's Information </b></h1>
    
    <a href="{{route('doctor.create')}}" class="btn btn-success">Doctor Add</a>
    <br> </br>
<!-- <style>
  tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style> -->
<style>
table {
  border-collapse: separate;
  border-spacing: 0;
  color: #4a4a4d;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
}
th,
td {
  padding: 10px 15px;
  vertical-align: middle;
}
thead {
  background: #395870;
  background: linear-gradient(#49708f, #293f50);
  color: #fff;
  font-size: 11px;
  text-transform: uppercase;
}
th:first-child {
  border-top-left-radius: 5px;
  text-align: left;
}
th:last-child {
  border-top-right-radius: 5px;
}
tbody tr:nth-child(even) {
  background: #f0f0f2;
}
td {
  border-bottom: 1px solid #cecfd5;
  border-right: 1px solid #cecfd5;
}
td:first-child {
  border-left: 1px solid #cecfd5;
}
.book-title {
  color: #395870;
  display: block;
}
.text-offset {
  color: #7c7c80;
  font-size: 12px;
}
.item-stock,
.item-qty {
  text-align: center;
}
.item-price {
  text-align: right;
}
.item-multiple {
  display: block;
}
tfoot {
  text-align: right;
}
tfoot tr:last-child {
  background: #f0f0f2;
  color: #395870;
  font-weight: bold;
}
tfoot tr:last-child td:first-child {
  border-bottom-left-radius: 5px;
}
tfoot tr:last-child td:last-child {
  border-bottom-right-radius: 5px;
}
   
</style>

<table class="table table-bordered">
    <!-- <table class="table table-bordered table-responsive"> -->
    <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Picture</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">License No</th>
      <th scope="col">Specialist</th>
      <th scope="col">Designation</th>
      <th scope="col">Experience</th>
      <th scope="col">Academic Records</th>
      <th scope="col">Email Address</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Present Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Role</th>
      <th scope="col">Availability Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($doctors as $key=>$doctor)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td> <img style ="width:100px; height:100px;" src="{{url('/uploads/doctor/').'/'.$doctor->picture}}"></td>
      <td>{{$doctor->first_name}}</td>
      <td>{{$doctor->last_name}}</td>
      <td>{{$doctor->license}}</td>
      <td>{{$doctor->specialist}}</td>
      <td>{{$doctor->designation}}</td>
      <td>{{$doctor->experience}}</td>
      <td>{{$doctor->academic_record}}</td>
      <td>{{$doctor->email}}</td>
      <td>{{$doctor->mobileno}}</td>
      <td>{{$doctor->address}}</td>
      <td>{{$doctor->gender}}</td>
      <td>{{$doctor->role}}</td>
      <td>{{$doctor->availability_status}}</td>
      <td>
        <a href="{{route('doctor.view',$doctor->id)}}"><img src="{{url('backend/icon/eye.svg')}}" alt=""></a>
        <a href="{{route('doctor.edit',$doctor->id)}}"><img src="{{url('backend/icon/edit.svg')}}" alt=""></a>
        <a href="{{route('doctor.delete',$doctor->id)}}"><img src="{{url('backend/icon/delete.svg')}}" alt=""></a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

{{$doctors->links()}}

@endsection