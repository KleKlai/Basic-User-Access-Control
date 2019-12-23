@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ ucfirst(implode(', ', $user->roles()->get()->pluck('name')->toArray())) }}</td>
                                <td>
                                    {{-- @can method check if the current user in gate has role of admin  --}}
                                    @can('edit-users')
                                        <a href="{{ route('admin.users.edit', $user->id) }}" type="button" class="btn btn-primary float-left">Edit</a>
                                    @endcan

                                    @can('delete-users')
                                        <form action="{{ route('admin.users.destroy', $user) }}" method="post" class="float-left">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
