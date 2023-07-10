@extends('admin')
@section('content')
    <div class="container">
        <form  class="ms-auto me-auto" style="width: 500px">

            @csrf
            <div class="mb-3">
                <img height="300" width="200" src="/storage/{{$user->images}}" alt="">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input  disabled type="text"value="{{$user->name}}"  name="name" class="form-control  " id="exampleInputEmail1"
                    aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">email</label>
                <input  disabled type="text" value="{{$user->email}}"name="email" class="form-control  " id="exampleInputEmail1"
                    aria-describedby="emailHelp">

            </div>


        </form>
    </div>
@endsection
