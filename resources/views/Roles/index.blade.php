@extends('admin')
@section('content')
    <div style="margin-left: auto" >
        <a class="btn btn-secondary my-2" href="{{ route('roles.create') }}">Create Role</a>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>

                            <th class="text-center" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <th scope="row">{{ $role->id }}</th>

                                <td><a href="{{route('roles.show',['role' => $role])}}"> {{ $role->name }}</a></td>


                                <td>

                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('roles.edit', ['role' => $role]) }}"
                                            class="btn btn-warning mx-2">Edit</a>
                                        <form class="delete-form" method="POST"
                                        action="{{ route('roles.destroy', ['role' => $role]) }}" >
                                            @method('DELETE')
                                            @csrf
                                            <input class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this item?')" value="Delete">
                                        </form>
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
