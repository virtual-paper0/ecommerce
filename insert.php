<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Status</title>
    <style>
        body {
            font-family: Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            
        }
        .message {
            background: linear-gradient(45deg, #f06, #f80);
            font-size: 25px;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
    $servername = "localhost";
    $database = "virgo_family";
    $username = "root";
    $password = "";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check Connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get user inputs
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Basic input validation (you may need to enhance this based on your requirements)
    if ($name && $email && $password && $cpassword) {
        // Check if the email already exists in the database
        $query = "SELECT * FROM signuper WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo '<div class="message">';
            echo "This email is already registered.";
            echo '</div>';
        } else {
            // Insert data into the database
            $sql = "INSERT INTO signuper (Name, Email, Password, Confirm_password) VALUES ('$name', '$email', '$password','$cpassword')";

            if (mysqli_query($conn, $sql)) {
                echo '<div class="message">';
                echo "Account Registered successfully!";
                echo '</div>';
            }
        }
    } else {
        echo '<div class="message">';
        echo "All fields are required";
        echo '</div>';
    }

    mysqli_close($conn);
    ?>

    <br>
    <a href="signin.php">Let's sign in!</a>
</body>
</html>
