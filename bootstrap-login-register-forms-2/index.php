<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DIAMANKA</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="css/stylesss.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	<div class="container">
                	
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1>Formulaire d'enregistrement</h1>
                        <div class="description">
                        	<p>
	                         	Bienvenue dans mon site 
                        	</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 show-forms">
                    	<span class="show-register-form active" style="color:white;">Enregistrement</span> 
                    	<span class="show-forms-divider">/</span> 
                    	<span class="show-login-form" style="color:white;">connexion</span>
                    </div>
                </div>
                
                <div class="row register-form">
                    <div class="col-sm-4 col-sm-offset-1">
						<form role="form" action="index.php" method="post" class="r-form">
	                    	  <div class="form-group">
                              <label class="sr-only" for="r-form-last-name">Username</label>
                       <input type="text" name="username" placeholder="Username..." class="r-form-last-name form-control" id="r-form-last-name" >
                                    </div>
	                        
	                        <div class="form-group">
	                        	<label class="sr-only" for="r-form-email">Email</label>
	                        	<input type="text" name="email" placeholder="Email..." class="r-form-email form-control" id="r-form-email">
	                        </div>
                                <div class="form-group">
                               <label class="sr-only" for="r-form-last-name">Password</label>
                              <input type="password" name="password_1" placeholder="Password..." class="r-form-email form-control" id="r-form-email">
                                </div>
                                <div class="form-group">
                                <label class="sr-only" for="r-form-last-name">Confirm password</label>
                                <input type="password" name="password_2" placeholder="Password..." class="r-form-email form-control" id="r-form-email">
                                   </div>
	                        
				            <button type="submit" class="btn" name="reg_user">Sign me up!</button>
                            
						</form>
                    </div>
                    
							

                   <div class="row login-form">
                    <div class="col-sm-4 col-sm-offset-1">
                        <form role="form" action="index.php" method="post" class="l-form">
                            <div class="form-group">
                                <label class="sr-only" for="l-form-username" name="username">Username</label>
                                <input type="text" name="username" placeholder="Username..." class="l-form-username form-control" id="l-form-username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="l-form-password" name="password">Password</label>
                                <input type="password" name="password" placeholder="Password..." class="l-form-password form-control" id="l-form-password">
                            </div>
                            <button type="submit" class="btn" name="login_user">Sign in!</button>
                           
                        </form>
                        
                    </div>
                   
                        
                    </div>






























							</div>
						</div>
						
						
                    </div>
                </div>
                
                
                </div>
                    
        	</div>
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p style="color: white;">site crée par<a href="http://cago.e-monsite.com" target="_blank">&copy; DIAMANKA</a></p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>