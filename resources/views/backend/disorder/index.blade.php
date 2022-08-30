@extends('backend.master')


@section('admin_content')
    <h1><b>  Disorder </b></h1>

    <a href="{{route('disorder.create')}}" class="btn btn-success">Disorder Add</a>


    <br> </br>

    <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">ID No</th>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
      <th scope="col">Symptom Name</th>
      <th scope="col">Status</th>
      <th scope="col">Symptom</th>

    </tr>
  </thead>
  <tbody>

  @foreach($disorders as $key=>$disorder)
    <tr>
      <th scope="row">{{$key+1}}</th>

      <!-- $migration table name -> migration table coloumn name-->
      <td>{{$disorder->id}}</td>
      <td>{{$disorder->disorder_name}}</td>
      <td>{{$disorder->disorder_details}} </td>
      <td>{{optional($disorder->getSymptom)->symptom_name}}</td>
      <td>{{$disorder->disorder_status}}</td>
      <td>

        <a href="{{route('disorder.symptom.create', $disorder->id)}}" class="btn btn-success"> Add </a>
        <a href="{{route('disorder.delete', $disorder->id)}}" class="btn btn-danger"> Delete </a>

      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{$disorders->links()}}

@endsection