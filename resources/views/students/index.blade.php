@extends('layouts.app')
@section('title', 'Students Page')
@section('nav3', 'active')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-10">

            @if(session('status'))
            <input type="hidden" id="status" value="{{session('status')}}"></input>
            @endif

            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal">
    Add Student
</button> -->

            <a href="{{url('students/create')}}" class="btn btn-primary">Add Student</a>

            <div class="mb-3">
                <h1 class="mt-3">Students List</h1>
                <ul class="list-group col-md-6 mb-1">
                    @foreach($students as $student)
                    <!-- <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"> -->
                    <li class="list-group-item list-group-item-action" value="{{$student->id}}">
                        <!-- <input type="hidden" name="id" value="{{$student->id}}"> -->
                        @if(isset($_GET['page']))
                        <b>{{ $students->perPage()*$_GET['page']-$students->perPage()+$loop->iteration . '. '}} </b>
                        @else
                        <b>{{$loop->iteration . '. '}}</b>
                        @endif
                        {{$student->name}}
                        <div class="float-right">
                            <a href="{{url('students/'.$student->id)}}" class="badge badge-info badge-pill">detail</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="justify-content-center">{{$students->links()}}</div>
            <a href="restore" class="btn btn-outline-dark">Restore</a>
            <form action="{{url('saveexcel')}}" method="post" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-primary">Save excel</button>
            </form>
            <form action="{{url('retrieveexcel')}}" method="post" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-info">Retrieve excel</button>
            </form>
            <form action="{{url('upload')}}" method="post" enctype="multipart/form-data" class="d-inline">
                <div class="input-group my-3 col-sm-5">
                    <div class="custom-file">
                        @csrf
                        <input type="file" class="custom-file-input @if(preg_grep('[file]', $errors->all())) is-invalid @endif" name="file" id="file">
                        <label class="custom-file-label" for="file" aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-outline-primary mx-3" id="inputGroupFileAddon02">Upload</button>
                    </div>
                </div>
                @if(preg_grep('[file]', $errors->all()))
                <small class="text-sm text-danger ml-3">{{ array_values(preg_grep('[file]', $errors->all()))[0] }}</small>
                @endif
            </form>
            <!-- {{$students->perPage()}} -->


            <!-- Modal -->
            <div class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="addStudentModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addStudentModalLabel">Add Student</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('students')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @if(preg_grep('[name]', $errors->all())) is-invalid @endif" id="name" name="name" value="{{old('name')}}" placeholder="Enter your name">
                                        @if(preg_grep('[name]', $errors->all()))
                                        <small class="text-sm text-danger ml-3">{{ array_values(preg_grep('[name]', $errors->all()))[0] }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="NIS" class="col-sm-3 col-form-label">NIS</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @if(preg_grep('[nis]', $errors->all())) is-invalid @endif" id="nis" name="nis" value="{{old('nis')}}" placeholder="12345678">
                                        @if(preg_grep('[nis]', $errors->all()))
                                        <small class="text-sm text-danger ml-3">{{ $errors->first('nis') }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @if(preg_grep('[email]', $errors->all())) is-invalid @endif" id="email" name="email" value="{{old('email')}}" placeholder="youremail@example.com">
                                        @if(preg_grep('[email]', $errors->all()))
                                        <small class="text-sm text-danger ml-3">{{ array_values(preg_grep('[email]', $errors->all()))[0] }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="department" class="col-sm-3 col-form-label">Department</label>
                                    <div class="col-sm-9">
                                        <select class="custom-select" name="department">
                                            <option class="text-black-50" value="">Choose department</option>
                                            <option @if(old('department')=='Technique Informatique' ) selected @endif value="Technique Informatique">Technique Informatique</option>
                                            <option @if(old('department')=='Technique of Civil' ) selected @endif value="Technique of Civil">Technique of Civil</option>
                                            <option @if(old('department')=='Administration' ) selected @endif value="Administration">Administration</option>
                                            <option @if(old('department')=='Wrestling' ) selected @endif value="Wrestling">Wrestling</option>
                                            <option @if(old('department')=='Mating' ) selected @endif value="Mating">Mating</option>
                                        </select>
                                        @if($errors->first('department'))
                                        <small class="text-sm text-danger ml-3">{{ $errors->first('department') }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" class="btn btn-primary">Add Student</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection