@extends('admin')
@section('content')
<div class="container">
    <div class="search" style="float:right">
        <form action="{{route('users.search')}}" method="get">
            <div class="form-group" style="display:flex">
                <input name="search" type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
</div>
    <div style="margin-left: auto" >
        <a class="btn btn-secondary my-2" href="{{ route('users.create') }}">Create User</a>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="">
                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">Name</th>
                            <th scope="col">Email</th>

                            <th class="text-center" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>

                                <td><a href="{{route('users.show',['user' => $user])}}"> {{ $user->name }}</a></td>
                                <td>{{ $user->email }}</td>
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
