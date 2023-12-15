<?php
require_once 'connectionDB.php';

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: cabinet.php");
    die();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $connection = new DatabaseConnection('localhost', 'root', '', 'test');
    $connection->getConnection();

    $user = $connection->getUser($_POST['login'], $_POST['password']);

    if ($user != null) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_login'] = $user['login'];
        $connection->closeConnection();
        header("Location: cabinet.php");
        die();
    } else {
        $error = "Неправильный логин или пароль";
        echo "<script>alert('$error');</script>";
        $connection->closeConnection();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Авторизация</title>
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
    <h1>Авторизация</h1>
    <form method="POST" action="">
        <label for="login">Логин:</label>
        <input type="text" name="login" id="login" required><br>

        <label for="password">Пароль:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" value="Войти">
    </form>

    <form method="GET" action="registration.php">
        <input type="submit" value="Зарегистрироваться">
    </form>
</body>
</html>