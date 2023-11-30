@extends('layouts.app', ['title' => 'Profile'])

@section('content')
    <div class="container mt-3">

        <div class="row mb-3">
            <div class="col">Edit Profile</div>
            <div class="col-auto">
                <a href="{{ route('admin.profile.index') }}" class="btn btn-sm btn-primary">Back</a>
            </div>
        </div>

        <div class="row bg-light p-3">

            <form action="{{ route('admin.profile.update', $user->id) }}" method="post">
                @csrf
                @method('PATCH')
                <input class="form-control mb-3" type="text" value="{{ $user->name }}" name="name" placeholder="Name" id="">
                <input class="form-control mb-3" type="text" value="{{ $user->email }}" name="email" placeholder="Email" id="">
                <button class="btn btn-primary" type="submit">Save</button>
            </form>


        </div>



    </div>
@endsection
