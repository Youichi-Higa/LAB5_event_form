<?php

include("functions.php");
$pdo = connect_to_db();

if (
    !isset($_POST['name']) || $_POST['name'] == '' ||
    !isset($_POST['event']) || $_POST['event'] == '' ||
    !isset($_POST['writer']) || $_POST['writer'] == '' ||
    !isset($_POST['email']) || $_POST['email'] == ''
) {
    echo json_encode(["error_msg" => "no input"]);
    exit();
}

$name = $_POST["name"];
$event = $_POST["event"];
$writer = $_POST["writer"];
$email = $_POST["email"];

$sql = 'INSERT INTO event_table(id, name, event, writer, email, is_deleted, created_at, updated_at) VALUES(NULL, :name, :event, :writer, :email, is_deleted, sysdate(), sysdate())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':event', $event, PDO::PARAM_STR);
$stmt->bindValue(':writer', $writer, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    header("Location:website_form_input.php");
    exit();
}
