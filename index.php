<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
body{
  background-image: url("bg3.jpg");
  background-size: cover;
  background-repeat: no-repeat;
 
}
}
form {border: 3px solid #f1f1f1;}

input[type=email], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color:grey;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 50%;
  height: 50%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
.cls{
width:30%;
height:70%;

}
span.t
{
  color:white;
  text-align: bold;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
  <center>
<div class="cls">
<form action="#" method="post">
  <div class="imgcontainer">
    <img src="fac.png" alt="not found" class="avatar">
  </div>

  <div class="container">
    
    <input type="email" placeholder="username@rguktsklm.ac.in" name="user" required minlength="15" maxlength="30" pattern="^([a-z]|[A-Z]|[0-9])([a-z]|[A-Z]|[0-9]|.)*@rguktsklm.ac.in">

    
    <input type="password" placeholder="Enter Password" name="pass" required>
        
    <button type="submit" name="login">Login</button>
  </div>
<span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
  <?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);
			
			$query 		= mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:home.php');
					
				}
				else
				{
                    {
                        $message="incorrect password!,please try again";
                        echo"<script>
                        alert('$message');
                        window.location.href='index.php';
                        </script>";
                        exit;
                    }
				}
		}
  ?>

</div>

</body>
</html>