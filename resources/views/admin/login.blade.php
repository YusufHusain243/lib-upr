<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan UPR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('/assets/css/style-login.css')}}">
    <link rel="icon" type="image/png" href="{{ asset('/assets/img/logo upr.png') }}" />
</head>

<body>
    <div class="login-clean">
        <form method="post" action="/login">
            @csrf
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration">
                <img src="{{ asset('/assets/img/logo upr.png') }}" width="200">
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" style="background-color: #043507" type="submit">Log
                    In</button>
            </div>

            @if ($errors->any())
                <h4>{{ $errors->first() }}</h4>
            @endif
            @if (session()->has('Error'))
                <strong class="text-danger">Gagal!</strong> {{ session('Error') }}
            @endif
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
