@extends('layouts.app')
@section('title', 'Add Student')
@section('nav3', 'active')
@section('content')

<div class="col-md-6">
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
@if(isset($_POST['name']))
<?php vard_dump($_POST) ?>
@endif

@endsection