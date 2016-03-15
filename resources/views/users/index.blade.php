@extends('layouts/user');
@section('main')
    <h1>Daftar User</h1>
    <td>{{ link_to_route('users.create', 'Tambah User Baru', array(), array('class' => 'btn btn-success')) }}</td>
    @if ($users->count())
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Name</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')) }}</td>
                    <td>{{ link_to_route('users.show', 'View', array($user->id), array('class' => 'btn btn-primary')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach

            </tbody>

        </table>
    @else
       Tidak ada user
    @endif
@stop