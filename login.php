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
		   </div>
		   <div class="container" style="margin-top:40px" >
		    <div class="row">
			<div class="col-sm-4" >
			</div>
		    <div class="col-sm-4">
			<div class="container bg-light p-4" >
			    <form action="" method="POST">
				<div class="mt-2 pb-2">
					<label for="email" class="font-bold">Email :</label>
					<input type="email" name="users_email" class="form-control" placeholder="Enter your email" >
					
				</div>
				  <div class="mt-1 pb-2">
				       <label for="password" class="font-bold">Password :</label>
				       <input type="password" name="users_password" class="form-control" placeholder="Enter your password">
				      
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