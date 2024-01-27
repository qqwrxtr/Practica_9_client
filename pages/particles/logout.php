<?php
session_start();

session_destroy();

header("Location: /nicolae/index.php");
exit();
?>
