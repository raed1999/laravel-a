@extends('layouts.app', ['title' => 'Profile'])

@section('content')
    <div class="container mt-3">

        <div class="row mb-3">
            <div class="col">Profiles</div>
            <div class="col-auto">
                <a href="{{ route('admin.profile.create') }}" class="btn btn-sm btn-primary">Create</a>
            </div>
        </div>

        <div class="row bg-light p-3">

            <table class="table table-bordered">
                <thead class="text-center">
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td class="text-center">
                            {{-- Route to view --}}
                            <a href="" class="btn btn-sm btn-primary">View</a>
                            {{-- 12 is temporary only --}}
                            <a href="{{ route('admin.profile.edit',12) }}" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
