<?php

include("functions.php");
$pdo = connect_to_db();

if (
    !isset($_POST['name']) || $_POST['name'] == '' ||
    !isset($_POST['event']) || $_POST['event'] == '' ||
    !isset($_POST['writer']) || $_POST['writer'] == '' ||
    !isset($_POST['email']) || $_POST['email'] == '' ||
    !isset($_POST['id']) || $_POST['id'] == ''
) {
    echo json_encode(["error_msg" => "no input"]);
    exit();
}

$name = $_POST["name"];
$event = $_POST["event"];
$writer = $_POST["writer"];
$email = $_POST["email"];
$id = $_POST["id"];

$sql = 'UPDATE event_table SET name=:name, event=:event, writer=:writer, email=:email, updated_at=sysdate() WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':event', $event, PDO::PARAM_STR);
$stmt->bindValue(':writer', $writer, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    header("Location:website_form_read.php");
    exit();
}
