<link rel="stylesheet" href="{{ asset('css/customLogin.css') }}">


<section class="login-section">
    
    <div class="login-box">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="user-box">
            <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" >
            <label>Email</label>
        </div>
        <div class="user-box">
            <input id="password" type="password" name="password" required autocomplete="current-password">
            <label>Password</label>
        </div>
        <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <button type="submit" class="submit-btn">Login</button>     
        </a>
            <p class="toSignUp">Not a member? <a href="#">Sign up now</a></p>
        </form>
    </div>
</section>