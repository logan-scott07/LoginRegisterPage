<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/account_code/account_style.css">
    <meta charset="UTF-8">
    <title>Account</title>
</head>

<body>
    <div class="container">
        <div class="form-box active" id="login-form">
            <form action="">
                <h2>Login</h2>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
                <p>Don't have an account? <a href="#" onclick="showBlock('register-form')">Register</a></p>
            </form>
        </div>

        <div class="form-box" id="register-form">
            <form action="">
                <h2>Register</h2>
                <input type="text" name="firstName" placeholder="First Name" required>
                <input type="text" name="lastName" placeholder="Last Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="register">Register</button>
                <p>Already have an account? <a href="#" onclick="showBlock('login-form')">Login</a></p>
            </form>
        </div>
    </div>

    <script src="/account_code/account_script.js"></script>
</body>
</html>