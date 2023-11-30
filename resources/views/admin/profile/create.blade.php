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

                <input class="form-control mb-3" type="text" value="{{ old('name') }}" name="name" placeholder="Name"
                    id="">
                @error('name')
                    <div class="alert alert-danger p-1">{{ $message }}</div>
                @enderror

                <input class="form-control mb-3" type="text" value="{{ old('email') }}" name="email"
                    placeholder="Email" id="">
                @error('email')
                    <div class="alert alert-danger p-1">{{ $message }}</div>
                @enderror


                <input class="form-control mb-3" type="text" value="{{ old('password') }}" name="password"
                    placeholder="Password" id="">
                @error('password')
                    <div class="alert alert-danger p-1">{{ $message }}</div>
                @enderror


                <button class="btn btn-primary" type="submit">Save</button>

            </form>


        </div>



    </div>
@endsection
