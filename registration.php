<html lang = "en">
	<head>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href = "css/bootstrap.min.css">
	<link rel="styleshhet" href = "./css/css.css">
	</head>
	<body>
		<section class="container-fluid">
			<header class="row">
				<div class="col-md-12"></div>
			</header>
			<section class="row">
				<aside class="col-sm-3"></aside>
				<main class="col-sm-6">
					<div class="form-horizontal" id="login">
						<form method="post" id="eventForm">
							 <fieldset>
							 	<legend class="login_legend">Registration</legend>
								<div class="row">
								</div>
								 
								 <div class="form-group">
									<label class="col-sm-3 control-label login_form" for="password">Name:</label>
									<div class="col-sm-9">
									<input type="text" class="form-control" id="name" placeholder="name" name="name"/>
								</div>
								</div>
								 <div class="form-group">
									<label class="col-sm-3 control-label login_form" for="password">Surname:</label>
									<div class="col-sm-9">
									<input type="text" class="form-control" id="surname" placeholder="surname" name="surname"/>
								</div>
								</div>
								 <div class="form-group">
				                			<label class="col-sm-3 control-label login_form" for="Username">Username:</label>
				             				<div class="col-sm-9">
				               				<input type="text" name="Username" class="form-control" id="Username" placeholder="Login"/>
				              			</div>
		            					</div>
								<div class="form-group">
									<label class="col-sm-3 control-label login_form" for="password">Password:</label>
									<div class="col-sm-9">
									<input type="password" class="form-control" id="password" placeholder="Password" name="password"/>
									</div>
								</div>
								<div class="form-group">
	                						<label class="col-sm-3 control-label login_form" for="passwordAgain">Rety your password:</label>
	             							<div class="col-sm-9">
	               							<input type="password" name="passwordAgain" class="form-control" id="passwordAgain">
	              							</div>
	            							</div>
								<div class="form-group">
								  	<label class="col-sm-3 control-label login_form" for="email">Email:</label>
								  	<div class="col-sm-9">
								    	<input type="text" name="email" class="form-control" id="email" placeholder="E-mail">
								  	</div>
									</div>

							</fieldset>
							<div class="button">
								<button type="button" class="btn btn-success" id="send">Register</button>
							</div>
						</form>
					</div>
				</main>
				<aside class="col-sm-3"></aside>
			</section>
			<footer class="row">
				<div class="col-md-12"></div>
			</footer>
		</section>
	</body>
</html>