<?php
include('conexiune.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT email, password, admin FROM accounts WHERE email = '$email'";
    $result = $conexiune->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();


        if (password_verify($password, $row["password"])) {
            $_SESSION["email"] = $row["email"];
            $_SESSION["admin"] = $row["admin"];


            header("Location: /nicolae/pages/index.php");
            exit();
        } else {

            echo "Incorrect password";
        }
    } else {

        echo "User not found";
    }
}

$conexiune->close();
?>
