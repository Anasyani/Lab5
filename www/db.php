<?php
$host = 'db';
$db   = 'lab5_db';
$user = 'lab5_user';
$pass = 'lab5_pass';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Страховка: создаём таблицу, если её ещё нет
    $pdo->exec("CREATE TABLE IF NOT EXISTS students (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        age INT,
        faculty VARCHAR(100),
        agree_rules TINYINT(1),
        study_form VARCHAR(50)
    ) CHARACTER SET utf8mb4");
} catch (\PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
    exit();
}
