<?php
require_once 'connectionDB.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    die();
}

$connection = new DatabaseConnection('localhost', 'root', '', 'test');
$connection->getConnection();
$user = $connection->getUser($_SESSION['user_login']);

$birthDate = new DateTime($user['birth_day']);
$now = new DateTime();
$age = $now->diff($birthDate)->y;

$connection->closeConnection();

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    die();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Личный кабинет</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        p {
            margin-bottom: 10px;
        }

        .logout-link {
            display: inline-block;
            padding: 8px 16px;
            background-color: burlywood;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        .logout-link:hover {
            transform: scale(1.02);
            transition: 0.2s;        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Личный кабинет</h1>
        <p>Добро пожаловать, <?php echo $user['name']; ?>!</p>
        <p>Дата рождения: <?php echo $user['birth_day']; ?></p>
        <p>Возраст: <?php echo $age; ?></p>
        <a class="logout-link" href="?logout">Выйти</a>
    </div>
</body>
</html>