<?php
	$servername = "localhost";
	$database = "virgo_family";
	$username = "root";
	$password = "";

	//Create Connection
	$conn = mysqli_connect($servername, $username, $password, $database);

	//Check Connection
	if(!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}


	$name = $_GET['name'];
	$email = $_GET['email'];
	$message = $_GET['message'];

	if($name != ""  && $email != "" &&  $message != "")
	{
		
		$sql = "INSERT INTO contact (Name, Email, Message) 
				VALUES ('$name','$email','$message')";
		// echo $sql; exit();

		$data=mysqli_query($conn,$sql);
		// echo $data;exit;
		
		if ($data)
		{
		?>
			<script>
				alert("Problem submitted successfully!");
				window.location.href = "http://localhost/Virgo/index.html";
			</script>
		<?php
		}else{
			echo "All fields are required";	
		}
	}

?>