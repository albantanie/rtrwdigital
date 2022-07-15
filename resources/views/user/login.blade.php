<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

  <script src="{{ asset('js/app.js') }}"></script>

  <div class="card m-3">
    <div class="card-header text-center">
      <h4>Login</h4>
    </div>
    <div class="card-body">
      <form action="{{ route('user.login') }}" method="post">
        @csrf
        <div class="form-group form-floating mb-3">
          <input type="number" class="form-control" id="nik" name="nik" placeholder="NIK" required>
          <label for="nik">NIK</label>
        </div>
        <div class="form-group form-floating mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
        <a href="{{ route('user.register') }}" type="button" class="btn btn-outline-dark w-100 mt-1">
          Register
        </a>
      </form>
    </div>
    <div class="text-center m-1">
      <a href="/img/rtrwdigital.apk">Download App</a>
    </div>
  </div>

</body>

</html>
