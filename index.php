<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <form action="login.php" method="post">

    <h1>Login</h1>
    <?php if (isset($_GET['error'])){?>
        <p class='error'><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <label>Imie</label>
    <input type="text" name="imie" placeholder="Nazwa uzytkownika"><br/>

    <label>Haslo</label>
    <input type="password" name="haslo" placeholder="Haslo"><br/>

    <button type="submit">Login</button>

    </form>
</body>
</html>