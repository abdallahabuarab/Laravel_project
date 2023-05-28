@extends('admin')
@section('content')
    <div class="container">
        <form enctype="multipart/form-data" action="{{ route('roles.store') }}" method="POST" class="ms-auto me-auto" style="width: 500px">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label ">Name</label>
                <input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                    @error('name')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror

            </div>

            <div class="mb-3">
                <div class="row">
                     @foreach ($permissions as $name => $group)
                     <div class="col-4 my-2">
                        <h5 class="text-capitalize">{{$name}}</h5>
                            @foreach ($group as $permission)
                            <label for="input_{{$permission->id}}">
                                <input id="input_{{$permission->id}}" type="checkbox" name="permissions[]" value="{{$permission->name}}">
                                {{$permission->name}}
                            </label>
                            @endforeach
                        </div>
                    @endforeach
                </div>

            </div>


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Submit</label>
                <input type="submit" name="submit" class="form-control "  value="Add Permission"id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
        </form>
    </div>
@endsection
