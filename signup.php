<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <style>
         body {
            font-family:verdana , sans-serif;
            background: #fdcc04;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0; 
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .submit {
            font-size: 19px;
            font-family:verdana;
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .submit:hover {
            background-color: #0056b3;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form action="insert.php" method="post">
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" id="cpassword" name="cpassword" required>
            </div>
            <input class= "submit"  type="submit" onclick="return validate()" value="Submit">
           

        </form>
        
    </div>
</body>
</html>
<script type="text/javascript">
function validate(){
var name=document.getElementById("name").value;
var email=document.getElementById("email").value;
var pass=document.getElementById("password").value;
var cpass=document.getElementById("cpassword").value;
//a. empty check
if(name=="" || email=="" || pass==""|| cpass==""){
alert("Fill all the required fields.");
return false;
}

//b. password
if(pass.length<8 || cpass.length<8){
alert("Password must be at least 8 characters long.");
return false;
}

//c. password
if(pass!=cpass){
alert("Passwords do not match.");
return false;
}

//d. email
if (email.indexOf("@") === -1 || email.indexOf(".") === -1) {
    alert("Not a valid e-mail address.");
    return false;
}

//e. name
if(!isNaN(name)){
alert("Username must not contain numbers.");
return false;
}

//f. name
if(name.length<4 || name.length>16){
alert("Username must be between 4 and 16 characters long.");
return false;
}

//g. password
if(!(pass.match(/[A-Z]/))){
alert("Password must contain at least one uppercase letter.");
return false;
}

//h. password
if(!(pass.match(/[a-z]/))){
alert("Password must contain at least one lowercase letter.");
return false;
}

//i. password
if(!(pass.match(/[0-9]/))){
alert("Password must contain at least one digit.");
return false;
}

//j. password
if(!(pass.match(/[!@#$%^&*(),.?":{}|<>]/))){
alert("Password must contain at least one special character.");
return false;
}

return true;
}

</script>