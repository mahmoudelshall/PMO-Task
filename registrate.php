<?php
session_start();
if(isset($_SESSION['user'])){
    header('location: index.php');
}
 require_once 'helpers/dbconnect.php';
 require_once 'helpers/functions.php'; 
    if(isset($_POST['submit'])){

        # Logic 
       

        $name        = Clean($_POST['name']);
        $email       = Clean($_POST['email']);
        $password    = Clean($_POST['password']);
        $phone       = Clean($_POST['phone']);

        $errors = [];

    # Name Validation ... 
    if (!validate($name, 1)) {
        $errors['Name'] = "Field Required";
    } elseif (!validate($name, 6)) {
        $errors['Name'] = "Invalid String";
    }

    # Email Validate 
    if (!validate($email, 1)) {
        $errors['Email'] = "Field Required";
    } elseif (!validate($email, 2)) {
        $errors['Email'] = "Invalid Email Format";
    }

    # Password Validate 
    if (!validate($password, 1)) {
        $errors['Password'] = "Field Required";
    } elseif (!validate($password, 4)) {
        $errors['Password'] = "Invalid Length , Length Must Be >= 6 ch";
    }


    # Phone Validation 
    if (!validate($phone, 1)) {
        $errors['phone'] = "Field Required";
    } elseif (!validate($phone, 7)) {
        $errors['phone'] = "Invalid Phone Number";
    }



    if (count($errors) > 0) {
        $_SESSION['Message'] = $errors;
    } else {

        // DB Code .... 
        $password = md5($password);
        $sql = "INSERT INTO users (`name`,`email`,`password`,`phone`) values ('$name','$email','$password','$phone')";
        $user_op  = mysqli_query($conn, $sql);

        if ($user_op) {
            $message = ['User Inserted']; 
        } else {
            $message = ['Error Try Again'];
        }

        $_SESSION['Message'] = $message;
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
              <li>Home</li>
              <li>About</li>
              <li>Service</li>
              <li>Help</li>
              <li>Contact </li>
          </ul>
          <div >
              <a style="color:aliceblue;" href="login.php">Login</a> | 
            </div>
       </nav>     
<!--      end  nav     -->

                

<!--      start  main     -->
	<main class="main-login">
		<form method="POST" class="login-form">
       
			<p>Registrate In Info</p>
            <div style="padding: 2%;">
                <?php  printMessage(); ?>
            </div>
			<div>
				<label>User Name:</label>
				<input type="text" name="name">	
			</div>
            <div>
				<label>User Email:</label>
				<input type="text" name="email">	
			</div>
			<div>
				<label>Password:</label>
            	<input type="Password" name="password">
			</div>
            <div>
				<label>Phone:</label>
            	<input type="text" name="phone">
			</div>
            
            <div class="submit-parent">
                <input name="submit" type="submit" value="Registrate" class="submit">
            </div>
                
		</form>
	</main>
<!--      end  main     -->


</body>
</html>