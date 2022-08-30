@extends('backend.master')

@section('admin_content')


<!-- variable name->database table name -->
<input type="string" readonly class="form-control" value="{{$doctor->name}}">
<input type="string" readonly class="form-control" value="{{$doctor->specialist}}">
<input type="string" readonly class="form-control" value="{{$doctor->email}}">
<input type="string" readonly class="form-control" value="{{$doctor->address}}">
<input type="string" readonly class="form-control" value="{{$doctor->shortbiography}}">


@endsection
