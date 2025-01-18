<!DOCTYPE html>
<html lang="en">
<body>

@include('nav')

<div class="login">
    <a href="/" class="avatar">
        <img src="apple-touch-icon.png" alt="avatar">
    </a>

    <h2>Login</h2>

    <form id="login-form" class="login-form" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="textbox">
            <label>
                <input type="text" name="login" placeholder="Email or username" required/>
            </label>
            <span class="material-symbols-outlined" id="login"> account_circle </span>
        </div>
        <div class="textbox">
            <label>
                <input type="password" name="password" placeholder="Password" required/>
            </label>
            <span class="material-symbols-outlined" id="login"> lock </span>
        </div>
        <button type="submit">Login</button>
        <a href="#">Forgot your credentials?</a>
        <a href="/register">Register?</a>
    </form>

    <div class="alert-bottom" id="errorAlert">
        <ul id="errorMessages" style="list-style: none; margin: 0; padding: 0;"></ul>
    </div>

</div>
</body>
</html>
