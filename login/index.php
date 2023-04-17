<?php
//ekran logowania w PHP
if (isset($_GET['submit'])) {
    //sprawdzanie, czy nazwa użytkownika/login to admin
    if($_GET['login'] === "admin") {
        //sprawdzanie, czy hasło użytkownika to "test"
        if($_GET['haslo'] === "test") {
            echo "Witamy, ".$_GET['login'];
        }
        else {
            echo "<h1> Błędne hasło! </h1>";
        }
    } else {
        echo"<h1> Błędny login! </h1>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2 - PHP Login</title>
</head>
<body>
    <form method="get" action="">
      <p> Login: </p> <input type="text" value="admin" name="login" id=""> <br>
       <p> Hasło </p> <input type="password" value="test" name="haslo" id=""> <br>
        <input type="submit" name="submit" value="Zaloguj się">
    </form>
</body>
</html>