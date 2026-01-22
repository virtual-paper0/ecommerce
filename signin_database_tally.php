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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $password = $_POST['password'];

    // Construct SQL query
    $sql = "SELECT * FROM signuper WHERE Name = '$name' AND Password = '$password'";
    
    // Execute query
    $result = mysqli_query($conn, $sql);

    // Check if any rows are returned
    if ($result && mysqli_num_rows($result) > 0) {
        // Redirect to home page if login is successful
        header("Location: product.html");
        exit();
    } else {
      
        // Display error message if credentials are invalid
        
        header("Location: signin.php");
       
    }
}

// Close database connection
mysqli_close($conn);
?>
