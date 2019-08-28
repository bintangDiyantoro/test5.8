@extends('layouts.app')
@section('title', $student->name)
@section('nav3', 'active')
@section('content')
<div class="card col-sm-5">
    <div class="card-body">
        <h6 class="card-subtitle mb-2 text-muted text-center">Student's detail</h6>
        <div class="float-left mr-3">
            <h5 class="card-title">Name</h5>
            <p class="card-text">NIS</p>
            <p class="card-text">Email</p>
            <p class="card-text">Department</p>
        </div>
        <div class="float-center">
            <h5 class="card-title">: {{$student->name}}</h5>
            <p class="card-text">: {{$student->nis}}</p>
            <p class="card-text">: {{$student->email}}</p>
            <p class="card-text">: {{$student->department}}</p>
            <a href="{{url('students')}}" class="btn btn-primary float-right">Go Back</a>
        </div>
    </div>
</div>
@endsection