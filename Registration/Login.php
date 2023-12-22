<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login | ThriftOnline</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="loginLogic.php" method="post">
            <input type="text" name="email" id="email" placeholder="Email">
            <input type="password" name="password" id="password" placeholder="Password">
            <p>Forgot your password? <a href="">Change</a></p>
            <button class="loginInBtn" name="submit" type="submit">Login</button>
        </form>    
    </div>
</body>
</html>