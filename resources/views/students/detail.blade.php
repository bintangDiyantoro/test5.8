@extends('layouts.app')
@section('title', $student->name)
@section('nav3', 'active')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-10">
            <div class="card col-sm-6">
                <div class="card-body">
                    <h3 class="card-subtitle mb-2 text-muted text-center">Student's detail</h3>
                    <div class="float-left mr-3">
                        <h5 class="card-title">Name</h5>
                        <p class="card-text">NIS</p>
                        <p class="card-text">Email</p>
                        <p class="card-text">Department</p>
                    </div>
                    <div class="float-center">
                        <h5 class="card-title" id="name">: {{$student->name}}</h5>
                        <p class="card-text">: {{$student->nis}}</p>
                        <p class="card-text">: {{$student->email}}</p>
                        <p class="card-text">: {{$student->department}}</p>
                        <a href="{{url('students/'.$student->id.'/edit')}}" class="btn btn-warning">Edit</a>
                        <form action="{{url('students/'.$student->id)}}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <input type="hidden" id="id" value="{{$student->id}}">
                            <!-- <button type="submit" class="btn btn-danger btn-del" onclick="return confirm('Are sure want to delete {{$student->name}}?')">Delete</button> -->
                            <button type="submit" class="btn btn-danger btn-del">Delete</button>
                        </form>
                        <a href="{{url('students')}}" class="btn btn-primary float-right">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection