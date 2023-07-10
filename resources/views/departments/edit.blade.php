@extends('admin')
@section('content')
    <div class="container">
        <form enctype="multipart/form-data" action="{{ route('departments.update' , ['department'=> $department])/*??*/ }}" method="POST" class="ms-auto me-auto" style="width: 500px">
           @method('put')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text"value="{{$department->name}}" name="name" class="form-control  " id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                    @error('name')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">pass mark</label>
                <input type="text"value="{{$department->pass_mark}}" name="pass_mark" class="form-control  " id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                    @error('name')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> mark</label>
                <input type="text"value="{{$department->mark}}" name="mark" class="form-control  " id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                    @error('name')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>

            <div class="mb-3">

                <input type="submit" name="submit" class="form-control "  value="Update"id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
        </form>
    </div>
@endsection
