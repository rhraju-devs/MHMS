@extends('backend.master')
@section('css')
<!-- Multiple Select Option Start -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
<!-- Multiple Select Option End -->

@endsection

@section('admin_content')

<div class=" mx-5">
    <h1><b>Add New Question</b></h1>
    <div class="col-md-12 col-lg-12 px-4">
        <form class="mx-4" action="{{route('question.store')}}" method="POST">
            @csrf


            <div class="form-group">
                <br>
                <div class="form-group col-md-10">
                    <label for="question"><b>Question :</b></label>
                    <input type="text" name="question" class="form-control" id="question">
                </div>

                <div class="form-group">
                    <br>
                    <div class="form-group col-md-8">

                        <label>Select Disorder</label>
                        <select id="framework" name="disorder[]" multiple class="form-control">
                            @foreach($disorders as $disorder)
                            <option value="{{$disorder->id}}">{{$disorder->disorder_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <br>
                        <div class="form-group col-md-5">
                            <label for="status">Select Status</label>
                            <select id="status" name="status" class="form-control">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <br>
                            <div class="form-group col-md-8">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>


        </form>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#framework').multiselect({
            nonSelectedText: 'Select Disorder',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '400px'
        });
    });

</script>


@endsection


<!-- <h1><b>Add New Question</b></h1>
<div class="row">
    <div class="col-md-12 col-lg-12 px-4">
        <form class="mx-4" action="{{route('question.store')}}" method="POST">
            @csrf


            <div class="form-group">
                <label for="question"><b>Question :</b></label>
                <input type="text" name="question" class="form-control" id="question">
            </div>

            <div class="form-group">
                <label>Select Disorder</label>
                <select id="framework" name="disorder[]" multiple class="form-control">
                    @foreach($disorders as $disorder)
                    <option value="{{$disorder->id}}">{{$disorder->disorder_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-5">
                <label for="status">Select Status</label>
                <select id="status" name="status" class="form-control">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>


        </form>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#framework').multiselect({
            nonSelectedText: 'Select Disorder',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '400px'
        });
    });

</script> -->
