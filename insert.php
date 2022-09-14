<?php
include("connections.php");

$name = $_POST["name"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$message = $_POST["message"];

$query = $mysqli->prepare("INSERT INTO contacts(name, email, tel, message) VALUE (?, ?, ?, ?)");
$query->bind_param("ssis", $name, $email, $tel, $message);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>