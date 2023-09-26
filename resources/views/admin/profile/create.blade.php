@extends('layouts.app', ['title' => 'Profile'])

@section('content')
    <div class="container mt-3">

        <div class="row mb-3">
            <div class="col">Create Profile</div>
            <div class="col-auto">
                <a href="{{ route('admin.profile.index') }}" class="btn btn-sm btn-primary">Back</a>
            </div>
        </div>

        <div class="row bg-light p-3">

            <form action="{{ route('admin.profile.store') }}" method="post">
                @csrf

                <input class="form-control mb-3" type="text" name="name" placeholder="Name" id="">

                <input class="form-control mb-3" type="text" name="studentIDNumber" placeholder="Student ID Number"
                    id="">
                <input class="form-control mb-3" type="text" name="address" placeholder="Address" id="">

                <button class="btn btn-primary" type="submit">Save</button>

            </form>


        </div>



    </div>
@endsection
