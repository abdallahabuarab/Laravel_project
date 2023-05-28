@extends('admin')
@section('content')
    <div class="container">
        <form enctype="multipart/form-data"  class="ms-auto me-auto" style="width: 500px">

            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input  disabled type="text"value="{{$permission->name}}"  name="name" class="form-control  " id="exampleInputEmail1"
                    aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Group</label>
                <input  disabled type="text"value="{{$permission->groupe}}"  name="group" class="form-control  " id="exampleInputEmail1"
                    aria-describedby="emailHelp">

            </div>



        </form>
    </div>
@endsection

