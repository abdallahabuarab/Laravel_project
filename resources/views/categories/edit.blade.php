@extends('admin')
@section('content')
    <div class="container">
        <form enctype="multipart/form-data" action="{{ route('categories.update' , ['category'=> $category])/*??*/ }}" method="POST" class="ms-auto me-auto" style="width: 500px">
           @method('put')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text"value="{{$category->name}}" name="name" class="form-control  " id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                    @error('name')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <img height="100" src="/storage/{{$category->images}}" alt="">
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
