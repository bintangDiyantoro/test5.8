@extends('layouts.app')
@section('title', 'Scholar Page')
@section('nav2', 'active')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-10">
            <h1>Scholars List</h1>
            <table class="table table-hover mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Email</th>
                        <th scope="col">Department</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($scholars as $scholar)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{ $scholar->name}}</td>
                        <td>{{ $scholar->nis}}</td>
                        <td>{{ $scholar->email}}</td>
                        <td>{{ $scholar->department}}</td>
                        <td class="d-flex justify-content-center">
                            <a href="#" class="badge badge-pill badge-info">Detail</a>
                            <a href="#" class="badge badge-pill badge-warning">Edit</a>
                            <a href="#" class="badge badge-pill badge-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection