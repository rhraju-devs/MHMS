@extends('backend.master')


@section('admin_content')

    <h1><b>  Symptom </b></h1>
    <a href="{{route('symptom.create')}}" class="btn btn-success">Symptom Add</a>
    <br> </br>


    <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>



  <tbody>
  @foreach($symptoms as $key=>$symptom)
    <tr>
      <th scope="row">{{$symptom->id}}</th>
      <td>{{$symptom->symptom_name}}</td>
      <td>

        <a href="{{route('symptom.view',$symptom->id)}}"><img src="{{url('backend/icon/edit.svg')}}" alt=""></a>
        <a href="{{route('symptom.delete',$symptom->id)}}"><img src="{{url('backend/icon/delete.svg')}}" alt=""></a>
        
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{$symptoms->links()}}

@endsection 