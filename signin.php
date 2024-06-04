<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <title>Sign In</title>
    <style>
        body {
            font-family: Verdana, sans-serif;
            background: #fdcc04;
            display: flex;
            height: 10vh;
            margin: 0; 
        }
        .signin-form {
    background-color: ;
    padding: 20px;
    border-radius: 50px;
    width: 300px;
    margin: 200px auto 0 auto; /* This will add 100px of top margin */
    display: flex;
    flex-direction: column;
    align-items: center; /* This will center the form vertically */
}

        .signin-form input[type="text"],
        .signin-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        .signin-form button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }
        .signin-form button:hover {
            background-color: black;
        }

    </style>
</head>
<link rel="stylesheet" href="style.css" />
  
<body> 
<div class="logo">HomeMade</div>

    <div class="signin-form">
        <h2 style="color:  black">Sign In</h2>
        <form action="signin_database_tally.php" method="post" >
            <input type="text" id="username" name="username" placeholder="Username " required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit" onsubmit="return validateForm()">Sign In</button>
            
        </form>
        
    </div>
    <nav>
        <div class="nav-items">
            <a href="index.html">Home</a>
            <a href="signin.php">Signin</a>
            <a href="about.html">About</a> 
            <a href="contact.html">Contact</a>
        </div>
    </nav>
    
<script>
    function validateForm() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        // Validate username (basic check for non-empty and maximum length)
        if (username.trim() === "") {
            alert("Please enter your username.");
            return false;
        }
        if (username.length > 20) {
            alert("Username must be less than 20 characters.");
            return false;
        }

        // Validate password (basic check for non-empty, minimum and maximum length)
        if (password.trim() === "") {
            alert("Please enter your password.");
            return false;
        }
        if (password.length < 6 || password.length > 20) {
            alert("Password must be between 6 and 20 characters.");
            return false;
        }

        return true; // If all validations pass
    }
</script>
</body>
</html>

