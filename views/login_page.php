<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="../database/login_function.php">
        <p>email</p>
        <input type="text" name="email">
        <p>password</p>
        <input type="password" name="password"><br>
        <button type="submit">login</button>
        <?= $_GET['error'] ?? '' ?>
    </form>
</body>

</html>