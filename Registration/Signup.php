<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up | ThriftOnline</title>
</head>
<body>
    <div class="container" style="padding:5rem 3rem 3rem 3rem;">
        <h1>Sign Up</h1>
        <form action="register.php" method="post">
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