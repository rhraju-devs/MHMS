@extends('frontend.master')

@section('frontend_content')
<div class="row m-5">
    
<h1><b> Screening List</b></h1>

<div class="row">
    <div class="col-md-2 col-lg-4">

    <a href="{{route('screening.test')}}" class="btn btn-success">Take New Screening Test</a>
    </div>
</div>

<br> </br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Serial No</th>
            <th scope="col">Patient Name</th>
            <th scope="col">Date</th>
            <th scope="col">Result</th>
            <th scope="col">Action</th>

        </tr>
    </thead>

    <tbody>

        @foreach($screenings as $key=>$screening)

        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{auth()->user()->first_name}} {{auth()->user()->last_name}}</td>
            <td>{{$screening->date}}</td>
            <td>{{$screening->result}}</td>
            <td>

                <a href="{{route('screening.result', $screening->id)}}"><img src="{{url('backend/icon/eye.svg')}}" alt=""></a>

            </td>
        </tr>
        @endforeach
    </tbody>
    {{$screenings->links()}}
</table>
</div>


@endsection

