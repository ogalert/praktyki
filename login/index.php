<?php
$connect = new mysqli("localhost", "root", "", "users");

if ($connect->connect_error) {
    echo "Błąd połączenia z bazą danych: " . $connect->connect_error;
    exit();
}

if (isset($_POST['submit'])) {

    $select = "SELECT * FROM users WHERE username = '" . $_POST['username'] . "' and password = '" . $_POST['password'] . "'";

    if (mysqli_num_rows(mysqli_query($connect, $select)) > 0) {
        echo "Witamy, ".$_POST['username'];
    }
    else {
        echo "<h3>Niepoprawne hasło lub login.</h3>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2 i 3 - PHP Login</title>
</head>
<body>
    <form method="post" action="">
      <p> Login: </p> <input type="text" name="username" id=""> <br>
       <p> Hasło: </p> <input type="password" name="password" id=""> <br>
        <input type="submit" name="submit" value="Zaloguj się">
    </form>
</body>
</html>
