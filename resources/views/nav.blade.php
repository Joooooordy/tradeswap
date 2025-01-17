<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TradeSwap</title>

    <link rel="stylesheet" href="{{ asset('/resources/css/app.css') }}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>
    <script src="{{ asset('/resources/js/app.js') }}"></script>
    <script src="{{ asset('/resources/js/ajax.js') }}"></script>
</head>
<body>

<div class="navbar">
    <div class="menu">
        <a href="/">Home</a>
    </div>
    @auth
        <div class="logout-menu">
            <span class="material-symbols-outlined" id="account">person</span>

            <div id="dropdownMenu" class="dropdown-content">
                <p>Hallo {{ucfirst(Auth::user()->name)}}</p>
                <a href="{{ route('profile', ['id' => Auth::user()->id]) }}">Account</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </div>
        </div>
    @else
        <div class="login-page">
            <a href="/login">Login</a>
        </div>
    @endauth
</div>


</body>
</html>
