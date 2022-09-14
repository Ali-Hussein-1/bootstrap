<?php
include("connections.php");

$name = $_GET["name"];
$email = $_GET["email"];
$tel = $_GET["tel"];
$message = $_GET["message"];

$query = "INSERT INTO articles(name, email, tel, message) VALUE (" . $name .", ?)";

$query = $mysqli->prepare("INSERT INTO articles(name, email, tel, message) VALUE (?, ?, ?, ?)");
$query->bind_param("ssss", $name, $email, $tel, $message);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>