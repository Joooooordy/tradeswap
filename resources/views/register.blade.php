<!DOCTYPE html>
<html lang="en">
<body>

@include('nav')

<div class="register">
    <div class="avatar">
        <img src="/images/avatar.png"  alt="avatar"/>
    </div>
    <h2>Register</h2>

    <form class="register-form" id="register-form" action="{{ route('register') }}" method="POST">
        @csrf
        <div class="textbox">
            <label>
                <input type="text" name="username" placeholder="Username" required />
            </label>
            <span class="material-symbols-outlined"> account_circle </span>
        </div>
        <div class="textbox">
            <label>
                <input type="email" name="email" placeholder="Email" required />
            </label>
            <span class="material-symbols-outlined"> account_circle </span>
        </div>
        <div class="textbox">
            <label>
                <input type="password" name="password" placeholder="Password" required />
            </label>
            <span class="material-symbols-outlined"> lock </span>
        </div>
        <button type="submit">REGISTER</button>
        <a href="/login">Login?</a>
    </form>

    <div class="alert-bottom" id="errorAlert">
        <ul id="errorMessages" style="list-style: none; margin: 0; padding: 0;"></ul>
    </div>

</div>

</body>
</html>
