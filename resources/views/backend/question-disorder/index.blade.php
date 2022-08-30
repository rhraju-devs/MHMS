@extends('backend.master')

@section('admin_content')

<h1><b>Question-Disorder Table</b></h1>

<a href="{{route('question.create')}}" class="btn btn-primary mx-4">Add New Question</a>


<br> </br>

<table class="table table-bordered">
<thead>
<tr>
  <th scope="col">Serial No</th>
  <th scope="col">Question ID</th>
  <th scope="col">Question Title</th>
  <th scope="col">Status</th>
  <th scope="col">Action</th>
  
</tr>
</thead>


<tbody>
@foreach($newQuestion  as $key=>$question)
<tr>
  <th scope="row">{{$key+1}}</th>
  <td>{{$question->id }}</td>
  <td>{{$question->question }}</td>
  <td>{{$question->status }}</td>

  <td>
     
        <a href=""><img src="{{url('backend/icon/edit.svg')}}" alt=""></a>
        <a href=""><img src="{{url('backend/icon/delete.svg')}}" alt=""></a>
        
      </td>
</tr>

@endforeach
</tbody>
</table> 

@endsection