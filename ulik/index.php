<!DOCTYPE html>
<html lang="en">

<head>
<!-- Username: novanrohman -->
<!-- Password: 1120 -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Toko Komputer</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
<form action="login_act.php" method="post">
    <div class="login-container">
        <div class="box">
            <h1>Login</h1>
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>
            <?php
                if (isset($_GET["failed"])) echo "Incorrect Account"?>
            <p>Lupa password <span>Klik di sini</span></p>
        </div>
    </div>
</form>
</body>

</html>