@extends('layouts.app')
@section('title', 'Edit Student')
@section('nav3', 'active')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-10">
            <div class="col-md-6">
                <form action="{{ url('students/'.$student->id)}}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @if(preg_grep('[name]', $errors->all())) is-invalid @endif" id="name" name="name" value="{{$student->name}}" placeholder="Enter your name">
                            @if(preg_grep('[name]', $errors->all()))
                            <small class="text-sm text-danger ml-3">{{ array_values(preg_grep('[name]', $errors->all()))[0] }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="NIS" class="col-sm-3 col-form-label">NIS</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @if(preg_grep('[nis]', $errors->all())) is-invalid @endif" id="nis" name="nis" value="{{$student->nis}}" placeholder="12345678">
                            @if(preg_grep('[nis]', $errors->all()))
                            <small class="text-sm text-danger ml-3">{{ $errors->first('nis') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @if(preg_grep('[email]', $errors->all())) is-invalid @endif" id="email" name="email" value="{{$student->email}}" placeholder="youremail@example.com">
                            @if(preg_grep('[email]', $errors->all()))
                            <small class="text-sm text-danger ml-3">{{ array_values(preg_grep('[email]', $errors->all()))[0] }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="department" class="col-sm-3 col-form-label">Department</label>
                        <div class="col-sm-9">
                            <select class="custom-select @if(preg_grep('[department]', $errors->all())) is-invalid @endif" name="department">
                                <option class="text-black-50" value="">Choose department</option>
                                <option @if($student->department=='Technique Informatique' ) selected @endif value="Technique Informatique">Technique Informatique</option>
                                <option @if($student->department=='Technique of Civil' ) selected @endif value="Technique of Civil">Technique of Civil</option>
                                <option @if($student->department=='Administration' ) selected @endif value="Administration">Administration</option>
                                <option @if($student->department=='Wrestling' ) selected @endif value="Wrestling">Wrestling</option>
                                <option @if($student->department=='Mating' ) selected @endif value="Mating">Mating</option>
                            </select>
                            @if($errors->first('department'))
                            <small class="text-sm text-danger ml-3">{{ $errors->first('department') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{url('students')}}" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                        <button type="submit" name="submit" class="btn btn-primary">Edit Student</button>
                    </div>
                </form>
            </div>
            @if(isset($_POST['name']))
            <?php vard_dump($_POST) ?>
            @endif
        </div>
    </div>
</div>
@endsection