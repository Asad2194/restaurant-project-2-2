<?php
	session_start();
	
	$conn = new mysqli('localhost','root','','sms_db');
	
	$unsuccessfulmsg = '';

	if(isset($_POST['submit'])){
		$user_email 			= $_POST['user_email'];
		$user_password 		= $_POST['user_password'];
		$passwordmd5 	= md5($user_password);
		
		if(empty($user_email)){
			$emailmsg = 'Enter an email.';
		}else{
			$emailmsg = '';
		}
		
		if(empty($user_password)){
			$passmsg = 'Enter your password.';
		}else{
			$passmsg = '';
		}
		
		if(!empty($user_email) && !empty($user_password)){
			$sql = "SELECT * FROM users WHERE user_email='$user_email' AND user_password = '$passwordmd5'";
			$query = $conn->query($sql);
			
			if($query->num_rows > 0){
				$row = $query->fetch_assoc();
				$user_first_name = $row['user_first_name'];
				$user_last_name = $row['user_last_name'];
				
				$_SESSION['user_last_name'] = $user_last_name;
				$_SESSION['user_first_name'] = $user_first_name;
				header('location:dashboard.php');
			}else{
				$unsuccessfulmsg = 'Wrong email or Password!';
			}
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>IJI Restaurant</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
		<link rel="icon" href="images/icon.png">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
		

		<style>
			.navigation-bar{
                padding:1% 4%;
                text-align: center;
                background-color: white;
                box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
                display: inline-block;
                width:100%;
				height: 80px;
				
                /* position: sticky;
                top:0px;
                z-index: 10; */
            }
			.navigation-logo a{
                text-decoration: none;
				float:left;
            }

            .navigation-logo a h1{
				font-family: 'Roboto', sans-serif;
                color:black;
                font-size: 2.5rem;
				font-weight: bolder;
				text-align: left;
            }
			
			.navigation-home{
				text-align: right;
			}
			.navigation-home a{
				text-decoration: none;
				color:black;
				float:right;
				font-size: 1.1rem;
				padding:10px;
				font-weight: 500;
				transition: all 0.3s ease 0s;
			}
			.navigation-home a:hover{
				color:orangered;
			}	

			.font-bold{
				font-weight:bold;
			}
		</style>
	</head>
	
	<body>
	<!-- Navigation -->
	<div class="navigation-bar" >
        <div class="navigation-logo ">
             <a href="index.php"><h1>IJI Restaurant</h1></a>
        </div>
		<div class="navigation-home">
			<a href="index.php">Home</a>
		</div>
    </div>
 <!-- /Navigation -->
	    <div class="container">
		   <div class="container" style="margin-top:50px;">
		        <h3 class="text-center">Welcome to IJI ! Please login.</h3>
		        <p class="text-center text-success">
				<?php if(!empty($_SESSION['signupmsg'])){ echo $_SESSION['signupmsg']; } ?></p>
		   </div>
		   <div class="container" style="margin-top:40px" >
		    <div class="row">
			<div class="col-sm-4" >
			</div>
		    <div class="col-sm-4">
			<div class="container bg-light p-4" >
			<p class="text-danger"><?php echo $unsuccessfulmsg ?> </p>
			    <form action="" method="POST">
				<div class="mt-2 pb-2">
					<label for="email" class="font-bold">Email :</label>
					<input type="email" name="user_email" class="form-control" placeholder="Enter your email" >
					<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emailmsg; }?></span>
				</div>
				  <div class="mt-1 pb-2">
				       <label for="password" class="font-bold">Password :</label>
				       <input type="password" name="user_password" class="form-control" placeholder="Enter your password">
				       <span class="text-danger"><?php if(isset($_POST['submit'])){ echo $passmsg; }?></span>
				</div>
				         <div class="mt-1 pb-2">
					 <button name="submit" class="btn btn-success">Login</button>
						</div>
						<div class="mt-1 pb-2">
					New member? <a href="register.php" class="text-decoration-none">Sign Up </a> here.
					</div>
				     </div>
				</div>
			<div class="col-sm-4">
						
			</div>
		        </div>
		     </div>
		</div>
	</body>
</html>