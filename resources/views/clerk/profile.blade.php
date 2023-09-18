@extends('layouts.app', ['title' => 'Profile'])

@section('content')
    This is profile



    <div class="mt-3">
        {{ $id }}
        {{ $dob }}
    </div>

    <div class="bg-primary">
        Hello!
    </div>

@endsection

