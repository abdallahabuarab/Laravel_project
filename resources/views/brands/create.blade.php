@extends('admin')
@section('content')
    <div class="container">
        <form enctype="multipart/form-data" action="{{ route('brands.store') }}" method="POST" class="ms-auto me-auto" style="width: 500px">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control " id="exampleInputEmail1"
                    aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">image</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Submit</label>
                <input type="submit" name="submit" class="form-control "  value="Add Brand"id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
        </form>
    </div>
@endsection
