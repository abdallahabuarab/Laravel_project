@extends('admin')
@section('content')
    <div style="margin-left: auto" >
        <a class="btn btn-secondary my-2" href="{{ route('products.create') }}">Create Product</a>
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
                            <th scope="col">Description</th>
                            <th scope="col">Brand name</th>
                            <th class="text-center" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td>
                                    <div style='background-image: url({{ asset('/storage/' . $product->images) }}'
                                        class="bg-image"></div>
                                </td>
                                <td><a href="{{route('products.show',['product' => $product])}}"> {{ $product->name }}</a></td>
                                <td> {{ $product->description }}</td>
                                <td> {{ $product->brand->name }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('products.edit', ['product' => $product]) }}"
                                            class="btn btn-warning mx-2">Edit</a>
                                        <form class="delete-form" method="POST"
                                        action="{{ route('products.destroy', ['product' => $product]) }}" >
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
