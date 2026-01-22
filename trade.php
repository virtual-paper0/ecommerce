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

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $product = $_POST['product'];

    if ($name != "" && $email != "" && $address != "" && $product != "")
     {
        $sql = "INSERT INTO customer (Name, Email, Delivery_Address, Product) 
                VALUES ('$name', '$email', '$address', '$product')";
        
        $data = mysqli_query($conn, $sql);
        
        if ($data) {
?>
            <script>
              window.alert("Submitted successfully! Wait our team will contact you soon.");
                window.location.href = "http://localhost/Virgo/product.html";
            </script>
<?php
        } 
         else {
        echo "All fields are required";
    }}
?>
