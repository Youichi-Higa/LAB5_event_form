<?php
// var_dump($_POST);
// exit();

$name = $_POST["name"];
$event = $_POST["event"];
$writer = $_POST["writer"];
$email = $_POST["email"];


$write_data = "{$name},{$event},{$writer},{$email}\n";

$file = fopen('data/data.csv', "a");
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);

header('Location:website_form_input.php');
