@extends('layouts.app')
@section('title', 'Students Page')
@section('nav3', 'active')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-10">
            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>NIS</th>
                    <th>Email</th>
                    <th>Department</th>
                </tr>
                <?php $i = 1; ?>
                @foreach($excelrow as $row)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$row[0]}}</td>
                    <td>{{$row[1]}}</td>
                    <td>{{$row[2]}}</td>
                    <td>{{$row[3]}}</td>
                </tr>
                @endforeach
            </table>
            <a href="http://localhost:8000/Students.xlsx" class="btn btn-primary mb-3">Download</a>
            <a href="{{url('insert')}}" class="btn btn-info mb-3">Insert to DB</a>
        </div>
    </div>
</div>
@endsection