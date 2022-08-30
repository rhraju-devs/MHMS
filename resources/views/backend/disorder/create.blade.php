@extends('backend.master')

@section('admin_content')

<h1><b> Disorder </b></h1>

<a href="{{route('disorder.list')}}" class="btn btn-primary">Disorder List</a>
<br> </br>


<form action="{{route('disorder.store')}}" method="POST">
    @csrf

        <div class="form-group">
        <div class="form-group col-md-6">
            <label for="inputName"><b>Name</b></label>
            <input type="text" name="name" class="form-control" id="inputName" placeholder='Name'>
        </div>


        <div class="form-group">
        <div class="form-group col-md-6">
            <label for="inputDetails"><b>Details</b></label>
            <textarea name="details" class="form-control" id="inputDetails" placeholder="Details"></textarea>
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
<button type="save" class="btn btn-success">Save</button>

</form>
@endsection