@extends('frontend.master')

@section('frontend_content')

<h5 class= "my-5 px-5">You are likely consistent with "<strong>{{$result->disorder_name}}</strong>"</h5>

<!-- <h6>Symptoms suggestive of General Anxiety Disorder</h6> -->

<h7 class ="my-5 px-5">Here are some suggested Doctor's List based on your symtoms</h7>

<div class="my-5 px-5">
    @foreach($doctors as $doctor)
    
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img style="width:130px; height:150px;" src="{{url('/uploads/doctor/').'/'.$doctor->picture}}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p class="card-text">
                        <h6><b>{{$doctor->specialist}}</b></h6>
                    </p>
                    <h3 class="card-title"><b>{{$doctor->first_name}} {{$doctor->last_name}}</b></h3>
                    <p class="card-text">{{$doctor->designation}}</p>
                    <p class="card-text">{{$doctor->email}}</p>
                    <label for="mobileno" class="custom-controll-label">Mobile No: </label>
                    <p class="card-text">{{$doctor->mobileno}}</p>
                    <br></br>
                    <a href="{{route('appointment.booking')}}" class="btn btn-primary btn-sm">Make an appointment</a>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>

</div>
@endforeach

@endsection