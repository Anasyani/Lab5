<?php
require 'db.php';
require 'Student.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
    exit();
}

$student = new Student($pdo);

$name = htmlspecialchars(trim($_POST['name'] ?? ''));
$age = intval($_POST['age'] ?? 0);
$faculty = htmlspecialchars($_POST['faculty'] ?? '');
$agree = isset($_POST['agree']) ? 1 : 0;
$form = htmlspecialchars($_POST['form'] ?? '');

if ($name === '') {
    header("Location: form.html");
    exit();
}

$student->add($name, $age, $faculty, $agree, $form);

header("Location: index.php");
exit();
