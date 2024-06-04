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

$email = $_GET['email'];

$sql = "DELETE from signuper where email = '$email'";

$data = mysqli_query($conn,$sql);

if($data)
{
	echo "record deleted successfully";
	
?>
<script>
				alert("Account Deleted successfully!");
				window.location.href = "http://localhost/Virgo/index.html";
			</script>

<?php
}
else
{
	echo "sorry , deleted process failed";
?>   <style> alert("Cannot Deleted !");</style> <?php
}
