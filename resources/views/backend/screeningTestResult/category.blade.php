@extends('backend.master')

@section('admin_content')

<h1><b> Screening Category </b></h1>

<a href="{{route('screening.create')}}" class="btn btn-primary">Add Screening</a>
<br> </br>


<form action="{{route('symptom.store')}}" method="POST">
    @csrf

    <div class="form-group col-md-4">
      <label for="inputScreening"><b>Select Screening Category</b></label>
      <input type="text" name="screening_n" id="inputScreening" class="form-control" require>
      <!-- <select id="inputSymptom" name="symptom_n" class="form-control">
        <option>Choose...</option>
        <option value="Feeling sad or down">Feeling sad or down</option>
        <option value="Confused thinking">Confused thinking</option>
        <option value="Significant tiredness">Significant tiredness</option>
        <option value="Sleeping problems">Sleeping problems</option>
        <option value="Excessive anger">Excessive anger</option>
        <option value="Extreme mood changes">Extreme mood changes</option>
        <option value="Major changes in eating habits">Major changes in eating habits</option>
        <option value="Suicidal thinking">Suicidal thinking</option>
      </select> -->
    </div>

<br>   </br>
<button type="next" class="btn btn-success">Next</button>

</form>
@endsection