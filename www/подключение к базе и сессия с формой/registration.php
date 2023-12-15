<?php
require_once 'connectionDB.php';

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: cabinet.php");
    die();
}

$connection = new DatabaseConnection('localhost', 'root', '', 'test');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $name = $_POST['name'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $birthDay = $_POST['birth_day'];

    $connection->getConnection();
    $user = $connection->getUser($_POST['login']);

    if ($user != null) {
        echo "<script>alert('Вводимый вами логин уже существует. Пожалуйста, используйте другой');</script>";
        echo "<script>document.getElementById('login').value = '';</script>";
    } else {
        $connection->setUser($name, $login, $password, $birthDay);
        
        $_SESSION['user_id'] = $name;
        $_SESSION['user_login'] = $login;

        header("Location: cabinet.php");
        die();
    }
}

$connection->closeConnection();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Регистрация</title>
    <style>
            body {
                font-family: Arial, sans-serif;
            }

            h1 {
                text-align: center;
            }

            form {
                width: 300px;
                margin: 0 auto;
            }

            label {
                display: block;
                margin-bottom: 10px;
            }

            input[type="text"],
            input[type="password"],
            input[type="date"],
            input[type="submit"] {
                width: 100%;
                padding: 8px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            input[type="submit"] {
                background-color: burlywood;
                color: white;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                transform: scale(1.02);
                transition: 0.2s;
            }

            .error-message {
                color: red;
                margin-bottom: 10px;
            }
        </style>
</head>
<body>
    <h1>Регистрация</h1>
    <form method="POST" action="">
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="login">Логин:</label>
        <input type="text" name="login" id="login" required><br>

        <label for="password">Пароль:</label>
        <input type="password" name="password" id="password" required><br>

        <label for="birth_day">Дата рождения:</label>
        <input type="date" name="birth_day" id="birth_day" required><br>

        <input type="submit" name="register" value="Зарегистрироваться">
    </form>

    <form method="GET" action="index.php">
        <input type="submit" value="Авторизоваться">
    </form>
</body>
</html>