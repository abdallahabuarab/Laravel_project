@extends('admin')
@section('content')
    <div class="container">
        <form enctype="multipart/form-data"  class="ms-auto me-auto" style="width: 500px">

            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input  disabled type="text"value="{{$role->name}}"  name="name" class="form-control  " id="exampleInputEmail1"
                    aria-describedby="emailHelp">

            </div>

            <div class="mb-3">
                <div class="row">
                     @foreach ($permissions as $name => $group)
                     <div class="col-4 my-2">
                        <h5 class="text-capitalize">{{$name}}</h5>
                            @foreach ($group as $permission)
                            <label for="input_{{$permission->id}}">
                                <input disabled @if(in_array($permission->name , $current_permissions) ) checked @endif id="input_{{$permission->id}}" type="checkbox" name="permissions[]" value="{{$permission->name}}">
                                {{$permission->name}}
                            </label>
                            @endforeach
                        </div>
                    @endforeach
                </div>

            </div>




        </form>
    </div>
@endsection

