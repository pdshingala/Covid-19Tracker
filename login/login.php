<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php include'../link/links.php'; ?>
	<?php include'../css/style.php'; ?>
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top navbar-dark nav_style bg-dark p-3" id="navbarid">
  <a class="navbar-brand pl-5 text-light" href="index.php">COVID-19 TRACKER</a>
  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="nav navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item">
        <a class="nav-link" href="../index.php" >Home</a>
      </li>	

      <li class="nav-item">
        <a class="nav-link" href="../signup/signup.php" >Sign Up</a>
      </li>	

      <li class="nav-item active">
        <a class="nav-link" href="#">Login</a>
      </li>
    </ul>
  </div>
</nav>


<div class="container mt-5 pt-1 pb-2 mb-5">

	<form method="post" id="loginForm" action="authentication.php">
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto shadow p-4">
				<div class="form-group">
					<center style="color: navy; font-size: 1.8rem; letter-spacing: 1px;">Login</center>
				</div>

				<div class="form-group">
					<label for="email"> Email <small class="text-danger">*</small></label>
						<input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
				</div>

				<div class="form-group">
					<label for="password"> Password <small class="text-danger">*</small></label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
				</div>


				<div class="form-group">
					<button type="submit" id="loginbtn" class="btn btn-primary btn-md" name="login"> Login </button>
				</div>

				<div id="error"></div>
				
			</div>
		</div>
	</form>
</div>

<footer>
	<div class="footer_style text-white text-center container-fluid">
		<p>&copy; All rights reserved</p>
	</div>
</footer>




<!-- custom script js -->

<script type="text/javascript" src="./script.js"></script>

</body>
</html>