<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Shortly</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="header">
        <div class="final">
            <div>
                <span ><a class="register-link" href="{{route('app.register')}}">Register</a></span>
            </div>
            <span class="login-span"><a class="register-link" href="{{route('app.login')}}">Login</a></span>
        </div>
    </div>
    <div class="logo">
        <h1>Shortly</h1>
        <img src="{{ asset('images/twemoji_shorts.png') }}" alt="imagemShortly">
    </div>
    @yield('content')
</body>
</html>
