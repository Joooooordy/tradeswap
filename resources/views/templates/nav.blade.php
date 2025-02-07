@include('templates.header')

<body>

<div class="navbar">
    <div class="nav-wrapper">
        <div class="menu">
            <a href="/">Home</a>
            <a href="/csgo/trade">Trade</a>
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
