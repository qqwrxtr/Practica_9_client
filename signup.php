<?php
include('conexiune.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO accounts (email, password) VALUES ('$email', '$hashedPassword')";

    if ($conexiune->query($sql) === TRUE) {
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conexiune->error;
    }
}

$conexiune->close();
?>
