@extends('layout')
@section('title', 'login')
@section('body')
  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      max-width: 400px;
      margin: 150px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
    }

    .btn-primary {
      width: 100%;
    }
  </style>

<body>
  <div class="container">
    <h2>Login</h2>
    <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto" >
        @csrf
      <div class="form-group">
        <label for="email">Email address</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>


@endsection
