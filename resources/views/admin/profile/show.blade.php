@extends('layouts.app', ['title' => 'Profile'])

@section('content')
    <div class="container mt-3">

        <div class="row mb-3">
            <div class="col">Profile Information</div>
            <div class="col-auto">
            {{--     <a href="#" class="btn btn-sm btn-primary">Create</a> --}}
            </div>
        </div>

        <div class="row bg-light p-3">

            <p>Name</p>
            <p>Student ID Number</p>
            <p>Address</p>


        </div>



    </div>
@endsection
