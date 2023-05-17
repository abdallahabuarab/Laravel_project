@extends('admin')
@section('content')
    <div style="margin-left: auto" >
        <a class="btn btn-secondary my-2" href="{{ route('categories.create') }}">Create Category</a>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">image</th>
                            <th scope="col">Name</th>
                            <th class="text-center" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $category->id }}</th>
                                <td>
                                    <div style='background-image: url({{ asset('/storage/' . $category->images) }}'
                                        class="bg-image"></div>
                                </td>
                                <td><a href="{{route('categories.show',['category' => $category])}}"> {{ $category->name }}</a></td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('categories.edit', ['category' => $category]) }}"
                                            class="btn btn-warning mx-2">Edit</a>
                                        <form class="delete-form" method="POST"
                                        action="{{ route('categories.destroy', ['category' => $category]) }}" >
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
