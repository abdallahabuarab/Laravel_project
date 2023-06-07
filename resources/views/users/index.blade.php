@extends('admin')
@section('content')
    <div style="margin-left: auto" >
        <a class="btn btn-secondary my-2" href="{{ route('users.create') }}">Create User</a>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th class="text-center" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td><a href="{{route('users.show',['user' => $user])}}"> {{ $user->name }}</a></td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->roles[0]->name }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">

                                        <div class="row col-7 px-2">

                                            <a class="btn btn-warning col-6"
                                                href="{{ route('users.edit', ['user' => $user]) }}">Edit</a>
                                            <form class="col-6" method="POST"
                                                action="{{ route('users.destroy', ['user' => $user]) }}">
                                                @method('DELETE')
                                                @csrf
                                                <input class="btn btn-danger col-12" type="submit"onclick="return confirm('Are you sure you want to delete this item?')" value="delete">
                                            </form>
                                        </div>
                                    </div>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
