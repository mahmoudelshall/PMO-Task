<?php
 require_once 'helpers/dbconnect.php';
 require_once 'helpers/functions.php'; 

if(isset($_SESSION['user'])){
    header('location: index.php');
}

    if(isset($_POST['submit'])){

        # Logic 
       

        $name        = Clean($_POST['name']);
        $password    = Clean($_POST['password']);

        $errors = [];

    # Name Validation ... 
    if (!validate($name, 1)) {
        $errors['Name'] = "Field Required";
    } elseif (!validate($name, 6)) {
        $errors['Name'] = "Invalid String";
    }


    # Password Validate 
    if (!validate($password, 1)) {
        $errors['Password'] = "Field Required";
    } elseif (!validate($password, 4)) {
        $errors['Password'] = "Invalid Length , Length Must Be >= 6 ch";
    }


    if (count($errors) > 0) {
        $_SESSION['Message'] = $errors;
    } else {

        $password = md5($password);
        $sql = "select * from users where name = '$name' and password = '$password' ";
        $op = mysqli_query($conn, $sql);

        if (mysqli_num_rows($op) == 1) {
            // login code .... 

            $data = mysqli_fetch_assoc($op);
            $_SESSION['user'] = $data;
            header("Location: index.php");
        } else {
            $_SESSION['Message'] =['Error In Your Data Try Again'];
        }
    }


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start</title>
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">

</head>
<body>

    <!--      start  nav     -->
    <nav>
        <div>
            <img src="img/favicon.png">
            <h1>START</h1>
        </div>
         <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="index.php">About</a></li>
              <li><a href="index.php">Service</a></li>
              <li><a href="index.php">Help</a></li>
              <li><a href="index.php">Contact</a></li>
          </ul>
          <div > 
              <a style="color:aliceblue;" href="registrate.php">Sign in</a>
            </div>
       </nav>     
<!--      end  nav     -->

<!--      start  main     -->
	<main class="main-login">
		<form method="POST" class="login-form">
     
			<p>Log In Info</p>
            <div style="padding: 2%;">
            <?php  printMessage(); ?>
        </div>
			<div>
				<label>User Name:</label>
				<input type="text" name="name">	
			</div>
			<div>
				<label>Password:</label>
            	<input type="Password" name="password">
			</div>
            <div>
                <label></label>
			    <span style="display:inline-block; width: 300px;">
                    <a href="">Forget User Name</a>    
                    | <a href="">Forget Password </a>
                </span>	  
			</div>
            <div class="submit-parent">
                <input name="submit" type="submit" value="Log In" class="submit">
            </div>
                
		</form>
	</main>
<!--      end  main     -->

<!--      start   Footer  section     -->
    <footer>
        <div class="form-data">
            <span>Contact US</span>
             <form>
                <input type="text" placeholder="Enter your name">
                <input type="email" placeholder="Enter your email ">
                <textarea>Enter Your massage</textarea>
                <button>Send</button>
        
          </form>
        </div>
       
    </footer>
    
<!--      end   Footer  section     -->
</body>
</html>