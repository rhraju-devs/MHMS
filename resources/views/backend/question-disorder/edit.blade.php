@extends('backend.master')

@section('admin_content')

<h1><b>Edit Information</b></h1>


<form action="{{route('question-disorder.update',$newQuestion->id)}}" method="post">
    @csrf
    <div class="form-group col-md-4">
      <label for="inputstatus"><b> Status</b></label>
      <select id="inputstatus" name="status" class="form-control"  value="{{$newQuestion->status}}">
        <option>Choose......</option>
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
      </select>
    </div>

    <button type="update" class="btn btn-success"> Update </button>
</form>

@endsection