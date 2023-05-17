@extends('admin')
@section('content')
    <div class="container">
        <form enctype="multipart/form-data" action="{{ route('products.update' , ['product'=> $product])/*??*/ }}" method="POST" class="ms-auto me-auto" style="width: 500px">
           @method('put')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text"value="{{$product->name}}" name="name" class="form-control  " id="exampleInputEmail1"
                    aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="text"value="{{$product->description}}" name="description" class="form-control  " id="exampleInputEmail1"
                    aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <img height="100" src="/storage/{{$product->images}}" alt="">
            </div>
            <div class="mb-3">

                <input type="file" name="image" class="form-control " id="exampleInputEmail1"
                    aria-describedby="emailHelp">

            </div>

            <div class="mb-3">

                <input type="submit" name="submit" class="form-control "  value="Update"id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
        </form>
    </div>
@endsection
