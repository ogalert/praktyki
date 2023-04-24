<?php

require('config.php');

if (!empty($_POST['submit'])) {
    $hashpass=hash('sha512', $_POST['password']);

    $select = "SELECT * FROM users WHERE username=? AND password=?";
    $sql = $connect->prepare($select);
    $sql->bind_param('ss', $_POST['username'], $hashpass);
    $sql->execute();
    $sql->store_result();

    if ($sql->num_rows > 0) {
        session_start();
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['logged'] = TRUE;
        header("location: index.php");
        exit();
    } else {
        echo "<h1>Niepoprawne hasło lub login.</h1>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
    <?php if (!isset($_SESSION['username'])) {?>
    <form method="post" action="login.php">
      <p> Login: </p> <input type="text" name="username" id="username"> <br>
       <p> Hasło: </p> <input type="password" name="password" id="password"> <br>
        <input type="submit" name="submit" value="Zaloguj się">
        <?php } else { ?>
        <h1><?php echo $_SESSION['username']; ?></h1>
        <?php } ?>
    </form>
</body>
</html>
