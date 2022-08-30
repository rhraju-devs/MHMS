@extends('backend.master')

@section('admin_content')

<h1>Question</h1>

<a href="{{route('question.create')}}" class="btn btn-primary mx-4">Add New Question</a>

<!--
{{-- <br> </br>

<table class="table table-bordered">
<thead>
<tr>
  <th scope="col">Serial No</th>
  <th scope="col">Disorder ID</th>
  <th scope="col">Question</th>
  <th scope="col">Status</th>
  <th scope="col">Action</th>
  
</tr>
</thead>


<tbody>
@foreach($questions as $key=>$question)
<tr>
  <th scope="row">{{$key+1}}</th>
  <td>{{$question-> }}</td>
  <td>{{$question-> }}</td>
  <td>{{$question-> }}</td>
  <td>{{$question-> }}</td>

  <td>
 
    <a href=""><img src="{{url('icon/trash.svg')}}" alt=""></a>
    
  </td>
</tr>
@endforeach
</tbody>
</table> --}}
-->



@endsection