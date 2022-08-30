@extends('backend.master')

@section('admin_content')

<h1><b> Symptom </b></h1>

<a href="{{route('symptom.list')}}" class="btn btn-primary">Symptom List</a>
<br> </br>


<form action="{{route('storeSymptom', $disorder->id)}}" method="POST">
    @csrf

    <div class="form-group col-md-4">
      <label for="inputSymptom"><b>Select Symptom</b></label>
      <select id="inputSymptom" name="symptom_n" class="form-control">
        <option >Choose Symptom</option>
        @foreach($symptoms as $symptom)
        <option value="{{$symptom->id}}">{{$symptom->symptom_name}}</option>
        @endforeach
      </select>
    </div>

<br>   </br>
<button type="save" class="btn btn-success">Save</button>

</form>
@endsection