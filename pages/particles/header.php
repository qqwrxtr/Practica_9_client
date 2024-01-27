<?php
            session_start();
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header class="header">
        
        <a href="#" class="logo"> <i class="fas fa-paper-plane"></i> DreamEscape </a>
        
        <form action="" class="search-form">
            <input type="search" name="" placeholder="caută aici..." id="searchBox">
            <label for="searchBox" class="fas fa-search"></label>
        </form>
        
        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-moon" id="theme-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <nav class="navbar">
            <a href="#home">Acasă</a>
            <a href="#packages">Pachete</a>
            <a href="#services">Servicii</a>
            <a href="#pricing">Prețuri</a>
            <a href="#review">Revizuire</a>
            <a href="#contact">Contacte</a>
            <a href="#blogs">Bloguri</a>

            <?php
                if (isset($_SESSION["admin"]) && $_SESSION["admin"] == 1) {
                    echo '<a href="/nicolae/admin/index.php">Admin</a>';
                }
            ?>
        </nav>

        

            <form action="/nicolae/pages/particles/logout.php" class="login-form">
                <?php
                if (isset($_SESSION["email"])) {
                    echo '<p style="font-size: 16px;">Welcome, ' . $_SESSION["email"] . '</p>';


                    echo '<form action="logout.php" method="post">
                            <input type="submit" class="btn" value="Logout">
                        </form>';
                } else {

                    header("Location: /nicolae/login.php");
                    exit();
                }
                ?>
            </form>


    </header>
</body>
</html>