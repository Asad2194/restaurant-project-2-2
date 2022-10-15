
<!DOCTYPE html>
<html>
	<head>
	<title>IJI Restaurant</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
	    <link rel="icon" href="images/icon.png">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

            .navigation-side{
				text-align: right;
				margin:0 5px;
				

			}
			.navigation-side a{
				text-decoration: none;
				color:black;
				float:right;
				font-size: 1.1rem;
				padding:10px;
				font-weight: 500;
				transition: all 0.3s ease 0s;
			}
			.navigation-side a:hover{
				color:orangered;
			}
			.padding{
				padding:0 10px;
			}
			ul li{
				list-style: none;

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
		<div class="navigation-side">
			<ul>
			    <li><a href="index.php"><i class="fa fa-sign-out padding" aria-hidden="true">Log Out </i></a> </li>
				
				<li>
					<a href="#">
					   <i class="fa fa-user padding" aria-hidden="true">
						    <?php 
								session_start();
								echo $_SESSION['users_first_name'].' '.$_SESSION['users_last_name'];
							?>
						</i>
				   </a>
				</li>
				<li><a href="# "><i class="fa fa-shopping-cart padding" aria-hidden="true"></i></a></li>
			
		    
			</ul>
		</div>
    </div>
     <!-- /Navigation -->
     <div class="container">
    
     </div>
     
        </body>
        </html>