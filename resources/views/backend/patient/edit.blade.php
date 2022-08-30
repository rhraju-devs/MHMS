@extends('backend.master')

@section('admin_content')

<h1><b>Edit Patient's Status</b></h1>


<form action="{{route('patient.update',$patient->id)}}" method="post">
    @csrf
    
    <div class="form-group col-md-4">
      <label for="inputstatus"><b>Select Status</b></label>
      <select id="inputstatus" name="status" class="form-control" value="{{$patient->role}}">
        <option>Choose......</option>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
      </select>
    </div>

    <button type="update" class="btn btn-success"> Update </button>
</form>

@endsection