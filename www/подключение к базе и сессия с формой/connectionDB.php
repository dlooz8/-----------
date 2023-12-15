<?php 

class DatabaseConnection {
    private $conn;

    public function __construct($host, $username, $password, $database) {
        $this->conn = new mysqli($host, $username, $password, $database);
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        $this->conn->close();
    }

    public function executeQuery($query, $params) {
        $stmt = $this->conn->prepare($query);
        if ($params) {
            $types = str_repeat('s', count($params));
            $stmt->bind_param($types, ...$params);
        }
        $stmt->execute();
        return $stmt->get_result();
    }

    public function getUser($login, $password = null) {
        if($password == null) {
            $query = "SELECT * FROM users WHERE login = ?";
            $params = [$login];
        } else {
            $query = "SELECT * FROM users WHERE login = ? AND password = ?";
            $params = [$login, $password];
        }
        $result = $this->executeQuery($query, $params);
        return $result->fetch_assoc();
    }

    public function setUser($name, $login, $password, $birthDay) {
        $query = "INSERT INTO users (name, login, password, birth_day) VALUES (?, ?, ?, ?)";
        $params = [$name, $login, $password, $birthDay];
        $this->executeQuery($query, $params);
    }
}

