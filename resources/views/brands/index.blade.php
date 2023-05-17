@extends('admin')
@section('content')
    <div style="margin-left: auto" >
        <a class="btn btn-secondary my-4" href="{{ route('brands.create') }}">Create Brand</a>
<!--
<form action="route('brands.create')" method="get"></form>
<input class="btn btn-secondary" type="submit" value="Create Brand">
-->

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
                        @foreach ($brands as $brand)
                            <tr>
                                <th scope="row">{{ $brand->id }}</th>
                                <td>
                                    <div style='background-image: url({{ asset('/storage/' . $brand->images) }}'
                                        class="bg-image"></div>
                                </td>
                                <td><a href="{{route('brands.show',['brand' => $brand])}}"> {{ $brand->name }}</a></td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('brands.edit', ['brand' => $brand]) }}"
                                            class="btn btn-warning mx-2">Edit</a>
                                        <form class="delete-form" method="POST"
                                        action="{{ route('brands.destroy', ['brand' => $brand]) }}" >
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
