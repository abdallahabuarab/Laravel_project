@extends('admin')
@section('content')
    <div style="margin-left: auto" >
        <a class="btn btn-secondary my-2" href="{{ route('permissions.create') }}">Create Permission</a>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Group</th>
                            <th class="text-center" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                            <tr>
                                <th scope="row">{{ $permission->id }}</th>

                                <td><a href="{{route('permissions.show',['permission' => $permission])}}"> {{ $permission->name }}</a></td>
                                <td>  {{ $permission->groupe }}</td>

                                <td>

                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('permissions.edit', ['permission' => $permission]) }}"
                                            class="btn btn-warning mx-2">Edit</a>
                                        <form class="delete-form" method="POST"
                                        action="{{ route('permissions.destroy', ['permission' => $permission]) }}" >
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
