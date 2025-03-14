<!DOCTYPE html>
<html lang="en">
<body>

@include('templates.nav')

<div class="register">
    <a href="/" class="avatar">
        <img src="apple-touch-icon.png" alt="avatar"/>
    </a>
    <h2>Register</h2>

    <form class="register-form" id="register-form" action="{{ route('register') }}" method="POST">
        @csrf
        <div class="textbox">
            <label>
                <input type="text" name="username" placeholder="Username" required/>
            </label>
            <span class="material-symbols-outlined"> account_circle </span>
        </div>
        <div class="textbox">
            <label>
                <input type="email" name="email" placeholder="Email" required/>
            </label>
            <span class="material-symbols-outlined"> account_circle </span>
        </div>
        <div class="textbox">
            <label>
                <input type="password" id="password" name="password" placeholder="Password" required />
                <i id="password-i" class="fa-solid fa-eye"></i>
            </label>
            <span class="material-symbols-outlined"> lock </span>
        </div>
        <div class="textbox">
            <label>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required/>
                <i id="passwordconf-i" class="fa-solid fa-eye"></i>
            </label>
            <span class="material-symbols-outlined"> lock </span>
        </div>
        <div class="content-pass">
            <p>Password must contain:</p>
            <ul class="requirement-list">
                <li>
                    <i class="fa-solid fa-circle"></i>
                    <span>At least 8 characters length</span>
                </li>
                <li>
                    <i class="fa-solid fa-circle"></i>
                    <span>At least 1 number (0...9)</span>
                </li>
                <li>
                    <i class="fa-solid fa-circle"></i>
                    <span>At least 1 lowercase letter (a...z)</span>
                </li>
                <li>
                    <i class="fa-solid fa-circle"></i>
                    <span>At least 1 special symbol (!...$)</span>
                </li>
                <li>
                    <i class="fa-solid fa-circle"></i>
                    <span>At least 1 uppercase letter (A...Z)</span>
                </li>
            </ul>
        </div>
        <button class="register-submit" type="submit">Register</button>
        <a href="/login">Already have an account? Login here</a>
    </form>

    <div class="alert-bottom" id="errorAlert" style="display: none">
        <ul id="errorMessages"></ul>
    </div>

</div>

</body>
</html>
