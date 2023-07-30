@extends('admin')
@section('content')
<div class="x-20px">
    <h1>
        Departments
    </h1>
</div>
<div style="margin-left: auto" >
    <a class="btn btn-secondary my-2" href="{{ route('departments.create') }}">Create Department</a>
</div>
    <div class="card">
        <div class="card-body">
            <div class="">
                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">Name Of department</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                            <tr>
                             <td> {{ $department->name }}</a></td>

                             <td>
                                <div class="d-flex justify-content-center">

                                    <div class="row col-7 px-2">

                                        <a class="btn btn-warning col-6"
                                            href="{{ route('departments.edit', ['department' => $department]) }}">Edit</a>
                                        <form class="col-6" method="POST"
                                            action="{{ route('departments.destroy', ['department' => $department]) }}">
                                            @method('DELETE')
                                            @csrf
                                            <input class="btn btn-danger col-12" type="submit"onclick="return confirm('Are you sure you want to delete this item?')" value="delete">
                                        </form>
                                    </div>
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
