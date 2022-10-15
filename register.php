<?php
	session_start();
	$conn = new mysqli('localhost', 'root', '', 'project_login');

	if(isset($_POST['submit'])){
		$users_first_name 		= $_POST['users_first_name'];
		$users_last_name 		= $_POST['users_last_name'];
		$users_email 			= $_POST['users_email'];
		$users_password 		= $_POST['users_password'];
		$passwordagain  = $_POST['passwordagain'];
		$md5password 	= md5($users_password);
		
		$emptymsg1 = $emptymsg2 = $emptymsg3 = $emptymsg4 = $emptymsg5 = $pasmatchmsg = '';
		
		
		if(empty($users_first_name)){
			$emptymsg1 = 'Fill up this field';
		}
		if(empty($users_last_name)){
			$emptymsg2 = 'Fill up this field';
		}
		if(empty($users_email)){
			$emptymsg3 = 'Fill up this field';
		}
		if(empty($users_password)){
			$emptymsg4 = 'Fill up this field';
		}
		if(empty($passwordagain)){
			$emptymsg5 = 'Fill up this field';
		}		
		
		if(!empty($users_first_name) && !empty($users_last_name) && !empty($users_email) && !empty($users_password) && !empty($passwordagain)){
			if($users_password !== $passwordagain){
				$pasmatchmsg = 'Password does not match!';
			}else{
				$pasmatchmsg='';
				$sql = "INSERT INTO users(users_first_name, users_last_name, users_email, users_password) 
						VALUES('$users_first_name', '$users_last_name', '$users_email', '$md5password')";
			
				if($conn->query($sql) == TRUE){
					header('location:login.php');
					$_SESSION['signupmsg']='Account create successfully. Please Log in now.';
				}
				else{
					echo 'data not inserted';
				}
			}
		}else{
			$emptymsg = 'Fill up all fields';
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
			<div class="container" style="margin-top:20px">
				<h3 class="text-center">Create your Account & become a member.</h3>
			</div>
			<div class="container" style="margin-top:15px">
				<div class="row">
					<div class="col-sm-4">
						
					</div>
					<div class="col-sm-4">
						<div class="container bg-light p-4">
							<form action="" method="POST">
							<div class="mt-2 pb-2">
								<label for="firstname" class="font-bold">First Name:</label>
								<input type="name" name="users_first_name" class="form-control" placeholder="Enter your First Name" value="<?php if(isset($_POST['submit'])){echo $users_first_name; } ?>">
								<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emptymsg1; }?></span>
							</div>
							<div class="mt-2 pb-2">
								<label for="users_last_name" class="font-bold">Last Name:</label>
								<input type="name" name="users_last_name" class="form-control" placeholder="Enter your Last Name" value="<?php if(isset($_POST['submit'])){echo $users_last_name; } ?>">
								<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emptymsg2; }?></span>
							</div>
							<div class="mt-2 pb-2">
								<label for="email" class="font-bold">Email:</label>
								<input type="email" name="users_email" class="form-control" placeholder="Enter your email" value="<?php if(isset($_POST['submit'])){echo $pasmatchmsg; } ?>">
								<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emptymsg3; }?></span>
							</div>
							<div class="mt-1 pb-2">
								<label for="password" class="font-bold">Password:</label>
								<input type="password" name="users_password" class="form-control" placeholder="Enter New password" >
								<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emptymsg4; }?></span>
							</div>
							<div class="mt-1 pb-2">
								<label for="password" class="font-bold">Password Again:</label>
								<input type="password" name="passwordagain" class="form-control" placeholder="Enter password Again" >
								<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emptymsg5.''.$pasmatchmsg; }?></span>
							</div>
							<div class="mt-1 pb-2">
								<button name="submit" class="btn btn-success">Sign Up</button>
							</div>
							<div class="mt-1 pb-2">
								Alrady have an account? <a href="login.php" class="text-decoration-none">Login</a>
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