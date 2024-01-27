<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<style>
    .custom-table {
        width: 100%;
        max-width: 1200px; /* Adjust the max-width as needed */
        margin: auto;
    }
    a{
        color:white;
    }
</style>


<body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index.html">
                    <h1 class="tm-site-title mb-0">Boritchi Nicolae</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>                       
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <form action="/nicolae/pages/particles/logout.php" method="post">
                                <a class="nav-link d-block" href="login.html">
                                <?=$_SESSION["email"]?> <form action="logout.php" method="post">
                                                            <input type="submit" class="btn" value="Logout" style='background-color:transparent;color:white;padding:5px;'>
                                                        </form>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back, <?=$_SESSION["email"]?></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5"><a href="/nicolae/admin/pachet_crud/create.php">Adauga Pachet</a></p>
                </div>
            </div>
            <!-- row -->
<?php
// Include the database connection file
include "conexiune.php";

// Query to retrieve package data
$sql = "SELECT id, img, destination, price, discounted_price, description FROM packages";
$result = $conexiune->query($sql);

?>

<div class="row tm-content-row">
    <div class="col-12 tm-block-col">
        <div class="tm-bg-primary-dark">
            <table class="table custom-table mb-5" style='width:1980px;'>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">IMG</th>
                        <th scope="col">DESTINATION</th>
                        <th scope="col">PRICE</th>
                        <th scope="col">DISCOUNT PRICE</th>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td><img src='{$row['img']}' alt='Package Image' width='50' height='50'></td>
                                    <td>{$row['destination']}</td>
                                    <td>{$row['price']}</td>
                                    <td>{$row['discounted_price']}</td>
                                    <td style='width:400px'>{$row['description']}</td>
                                    <td>
                                        <a href='/nicolae/admin/pachet_crud/update.php?id={$row['id']}'>Update</a> |
                                        <a href='/nicolae/admin/pachet_crud/delete.php?id={$row['id']}'>Delete</a>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>No packages found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
// Close the database connection
$conexiune->close();
?>


        </div>
        <footer class="tm-footer row tm-mt-small fixed-bottom">
            <div class="col-12 font-weight-light">
                <p class="text-center text-white mb-0 px-4 small">
                    Copyright &copy; <b>2018</b> All rights reserved. 
                    
                    Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
</body>

</html>