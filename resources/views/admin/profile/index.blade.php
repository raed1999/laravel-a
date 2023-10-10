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
                    <th>Student ID</th>
                    <th>Address</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>John</td>
                        <td>2019-123213</td>
                        <td>Diyan lang</td>
                        <td class="text-center">
                            {{-- Route to view --}}
                            <a href="" class="btn btn-sm btn-primary">View</a>
                            {{-- 12 is temporary only --}}
                            <a href="{{ route('admin.profile.edit',12) }}" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
