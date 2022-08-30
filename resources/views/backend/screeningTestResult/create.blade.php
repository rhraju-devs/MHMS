@extends('backend.master')

@section('admin_content')

<h1><b> Screening </b></h1>
<a href="{{route('screening.list')}}" class="btn btn-primary">Screening List</a>
<br> </br>


<form action="{{route('screening.store')}}" method="POST">
    @csrf

        <div class="form-group">
        <div class="form-group col-md-6">
            <label for="inputPatientId"><b>Patient ID</b></label>
            <input type="text" name="pat_id" class="form-control" id="inputPatientId">
        </div>


        <div class="form-group">
        <div class="form-group col-md-6">
            <label for="inputDoctorId"><b>Doctor ID</b></label>
            <input type="text" name="doc_id" class="form-control" id="inputDoctorId">
        </div>

        <div class="form-group">
        <div class="form-group col-md-6">
            <label for="inputDate"><b>Date</b></label>
            <input type="date" name="date" class="form-control" id="inputDate">
        </div>


        <div class="form-group">
        <div class="form-group col-md-6">
            <label for="inputRemark"><b>Remark</b></label>
            <textarea name="remark" class="form-control" id="inputRemark" placeholder="Remark"></textarea>
        </div>

        <div class="form-group">
            <label for="inputStatus"><b>Status</b></label>
        </div>

        <div name="status" class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary">
                <input type="radio" name="status" id="status1" value="active"> Active
            </label>
            <label class="btn btn-secondary">
                <input type="radio" name="status" id="status2" value="inactive"> Inactive
            </label>
        </div>
</div>

<br>   </br>
<button type="submit" class="btn btn-success">Submit</button>

</form>
@endsection