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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="{{ asset('/resources/js/app.js') }}"></script>
    <script src="{{ asset('/resources/js/ajax.js') }}"></script>
</head>
<body>

<div class="navbar">
    <div class="nav-wrapper">
        <div class="menu">
            <a href="/">Home</a>
        </div>

        <div class="search-bar">
            <form id="search-form" action="{{ route('search') }}" method="GET">
                @csrf
                <input type="text" id="search-input" name="query" placeholder="Search for items or users..."
                       autocomplete="off">
                <button type="submit" class="search-button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <div id="suggestions" class="suggestions-list"></div>
            </form>
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
                </div>
            </div>
        @else
            <div class="login-page">
                <a href="/login">Login</a>
            </div>
        @endauth
    </div>
</div>
</body>
</html>
