@extends('admin')
@section('content')
    <div class="container">
        <form action="{{ route('users.store') }}" enctype="multipart/form-data" method="POST" class="ms-auto me-auto" style="width: 500px">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">image</label>
                <input type="file" name="images" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control  @if($errors->has('name')) is-invalid @endif" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                    @error('name')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">email</label>
                <input type="text" name="email" class="form-control @if($errors->has('email')) is-invalid @endif " id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                    @error('email')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <select name="department_id">
                    @foreach ($departments as $department)
                        <option value="{{$department->id}}">{{ $department->name }}</option>
                    @endforeach
                </select>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control @if($errors->has('password')) is-invalid @endif" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                    @error('password')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Submit</label>
                <input type="submit" name="submit" class="form-control "  value="Add User"id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
        </form>
    </div>
@endsection
