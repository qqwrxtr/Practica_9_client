<?php
session_start();

include "conexiune.php";

$destination = $price = $discounted_price = $description = $img = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destination = sanitize_input($_POST["destination"]);
    $price = sanitize_input($_POST["price"]);
    $discounted_price = sanitize_input($_POST["discounted_price"]);
    $description = sanitize_input($_POST["description"]);
    $img = "/nicolae/pages/img/" . sanitize_input($_POST["img"]);

    $sql = "INSERT INTO packages (destination, price, discounted_price, description, img) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conexiune->prepare($sql);
    $stmt->bind_param("sssss", $destination, $price, $discounted_price, $description, $img);

    if ($stmt->execute()) {
        $stmt->close();
        $conexiune->close();
        header("Location: /nicolae/admin/index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conexiune->error;
    }
}

function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Package</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <style>
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #292b2c;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            color: white;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #4caf50;
        }

        input[type="text"],
        textarea {
            width: 550px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #1a1a1a;
            color: white;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .btn-secondary {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #1a1a1a;
            color: white;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }

        .btn-secondary:hover {
            background-color: #4caf50;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h2>Create New Package</h2>
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" class="form-control" id="destination" name="destination" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="discounted_price">Discounted Price</label>
                <input type="text" class="form-control" id="discounted_price" name="discounted_price" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="img">Image URL</label>
                <input type="text" class="form-control" id="img" name="img" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Package</button>
            <a href="/nicolae/admin/index.php" class="btn btn-secondary">Go Back</a>
        </form>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
