<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up | ThriftOnline</title>
</head>
<body>
    <div class="container">
    <div class="loginCover"></div>
    <form style="padding: 7rem 7rem 0rem 7rem;" action="register.php" method="post">
        <h1 style="font-size:3rem;top: 3.5rem;">Get Started Now</h1>
            <input type="text" name="name" id="name" placeholder="Name">
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="text" name="phone" id="phone" placeholder="Phone">
            <input type="text" name="address" id="address" placeholder="Address">
            <input type="password" name="password" id="password" placeholder="Password">
            <p>Dont have an account? <a href="Login.php">Login</a></p>
            <button class="loginInBtn" type="submit" name="submit">Sing Up</button>
        </form>    
    </div>
</body>
</html>