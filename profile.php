<!DOCTYPE html>
<html>
<head>
	<title>Covid-19 Tracker</title>
	<?php include'link/links.php'; ?>
	<?php include'css/style.php'; ?>
<script type="text/javascript" src="./Javascript/covidscript.js"></script>	
</head>
<body data-spy="scroll" data-target="#navbarid" data-offset="80" onload="fatchglobal()">

<!-- NAVIGATION BAR -->

<nav class="navbar navbar-expand-lg sticky-top navbar-dark nav_style p-3" id="navbarid">
  <a class="navbar-brand pl-5 text-light" href="./profile.php">COVID-19 TRACKER</a>
  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="nav navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item">
        <a class="nav-link" href="#homeid" >Home</a>
      </li>	
      <li class="nav-item">
        <a class="nav-link" href="#aboutid" >about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptomsid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventionid">prevention</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="#contactid">Contact Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Statistics
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="world.php" style="color:black;">World</a>
          <a class="dropdown-item" href="india.php" style="color:black;">India</a>
        </div>
      </li>
	  <li class="nav-item">
	  	<div class="btn btn-warning"><a href="./login/logout.php">Logout</a></div>
      </li>
    </ul>
  </div>
</nav>

<section class="home">
<marquee class="marquee_help content" direction="left">
India Central Helpline Number for covid-19 :<span> +91 1123978046</span>
Toll Free :<span> 1075</span>Helpline Email ID :<span>ncov2019@gov.in</span>
</marquee>

<!--AAROGYA SETU-->
<div>
<span class="aarogya pr-5 ml-auto">
	<span class="aarogya_logo"><img src="./images/aarogyasetu.png">Aarogya Setu App :</span>
	<a href="https://play.google.com/store/apps/details?id=nic.goi.aarogyasetu&hl=en_GB" target="_blank">
		<img src="./images/android.png" alt="For Android">
	</a>
	<a href="https://apps.apple.com/in/app/aarogyasetu/id1505825357" target="_blank">
		<img src="./images/apple.png" alt="For Apple">
	</a>
</span>
</div>

<!-- COVID UPDATES -->

<div class="corona_update" >
	<div class="">
		<h3 class="text-uppercase text-center">Covid-19 Live stats</h3>
	</div>
	<div class="container-fluid">
		<h4>World</h4>
		<div class="d-flex justify-content-around align-items-center boxstyle">
			<div>
				<p>Cases</p>
				<span id="totalcases" style="font-size:2.5rem; color: black; text-align: center;"></span>
			</div>
			<div>
				<p>Recovered</p>
				<span id="totalrecovered" style="font-size:2.5rem; color: green; text-align: center;"></span>
			</div>
			<div>
				<p>Deaths</p>
				<span id="totaldeaths" style="font-size:2.5rem; color: red; text-align: center;"></span>
			</div>
			<div>
				<p>Active Cases</p>
				<span id="totalactive" style="font-size:2.5rem; color: blue; text-align: center;"></span>
			</div>			
		</div>
		<h4>India</h4>
		<div class="d-flex justify-content-around align-items-center boxstyle">
			<div>
				<p>Cases</p>
				<span id="indiacases" style="font-size:2.5rem; color: black; text-align: center;"></span>
			</div>
			<div>
				<p>Recovered</p>
				<span id="indiarecovered" style="font-size:2.5rem; color: green; text-align: center;"></span>
			</div>
			<div>
				<p>Deaths</p>
				<span id="indiadeaths" style="font-size:2.5rem; color: red; text-align: center;"></span>
			</div>
			<div>
				<p>Active Cases</p>
				<span id="indiaactive" style="font-size:2.5rem; color: blue; text-align: center;"></span>
			</div>	
		</div>
	</div>
</div>
</section>

<!-- ABOUT SECTION -->

<section class="container-fluid sub_section pb-5" id="aboutid" >
	<div class="section_header text-center mb-5 mt-4">
		<h1>About COVID-19</h1>
	</div>
	<div class="row pt-3 pb-4">
		<div class="container-fluid col-lg-5 col-md-5 col-12">
			<img src="images/abtcovid.jpg" class="img-fluid">
		</div>
		<div class="container-fluid col-lg-6 col-md-6 col-12">
			<p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
			<p>The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).</p>
			<p>At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments.</p>
		</div>
	</div>
</section>



<!-- SYMPTOMS -->

<section class="container-fluid symptoms_section pb-5" id="symptomsid">
	<div class="section_header text-center mb-5 mt-3">
		<h1>COVID-19 Symptoms</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
					<img src="./images/fever.jpg" class="img-fluid" width="128" height="128">
					<figcaption>Fever</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
					<img src="./images/drycough.jpg" class="img-fluid" width="90" height="90">
					<figcaption>Dry Cough</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
					<img src="./images/tiredness.png" class="img-fluid" width="115" height="115">
					<figcaption>Tiredness</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 pt-2" >
				<figure class="text-center">
					<img src="./images/breath.jpg" class="img-fluid" width="135" height="135">
					<figcaption>Difficulty Breathing</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
					<img src="./images/sorethroat.jpg" class="img-fluid" width="134" height="134">
					<figcaption>Sore Throat</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<figure class="text-center">
					<img src="./images/headache.jpg" class="img-fluid" width="120" height="120">
					<figcaption>Headache</figcaption>
				</figure>
			</div>
		</div>
	</div>
</section>


<!--PREVENTION-->

<section class="container-fluid sub_section prevention pb-5" id="preventionid" style="padding-top: 110px;">
	<div class="section_header text-center mb-5 mt-3">
		<h1>Prevention Against COVID-19</h1>
	</div>

	<div class="">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 prevent_section" style="background-color: white; color: black;">
				<p>Clean your hands often. Use soap and water, or an alcohol-based hand rub.</p>
			</div>
			<div class="col-lg-4 col-md-4 col-12 prevent_section" style="background-color: rgb(31,133,222);">
				<p>Maintain a safe distance from anyone who is coughing or sneezing.</p>
			</div>
			<div class="col-lg-4 col-md-4 col-12 prevent_section" style="background-color: white; color: black;">
				<p>Don’t touch your eyes, nose or mouth.</p>
			</div>
			<div class="col-lg-4 col-md-4 col-12 prevent_section" style="background-color: rgb(31,133,222);">
				<p>Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</p>
			</div>
			<div class="col-lg-4 col-md-4 col-12 prevent_section" style="background-color: white; color: black;">
				<p>If you have a fever, cough and difficulty breathing, seek medical attention. Call in advance.</p>
			</div>
			<div class="col-lg-4 col-md-4 col-12 prevent_section" style="background-color: rgb(31,133,222);">
				<p>Stay home if you feel unwell and Follow the directions of your local health authority.</p>
			</div>
		</div>
	</div>
</section>

<!--CONTACT US-->

<section class="container-fluid pb-3" id="contactid" style="padding-top: 100px;">
	<div class="section_header text-center mb-2 mt-3">
		<h1>Contact Us</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-2 col-12">
			<form action="" method="POST">

  			<div class="form-group">
    		<label for="email">Email ID :</label>
    		<input type="email" class="form-control" name="email" placeholder="abc@example.com" required autocomplete="off">
  			</div>

  			<div class="form-group">
    		<label for="mobile">Mobile Number :</label>
    		<input type="number" class="form-control" name="mobile" placeholder="Mobile Number" autocomplete="off" required>
  			</div>	
  			
  			<div class="form-group">
    		<label for="description">Description :</label>
    		<textarea class="form-control" name="description" placeholder="Write Here..." rows="3"></textarea>
  			</div>
  			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>
	</div>
</section>

<!--SCROLL TOP Button-->
<button onclick="topFunction()" id="myBtn" title="Go to top">
	<span class="material-icons md-36">keyboard_arrow_up</span>
</button>

<!--FOOTER-->

<footer>
	<div class="footer_style text-white text-center container-fluid">
		<p>&copy; All rights reserved</p>
	</div>
</footer>

<script>

mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0;
}
</script>

</body>
</html>


<?php
include 'dbconn.php';

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$description = $_POST['description'];

	$insertquery = " INSERT INTO contact(email, mobile, description) VALUES('$email', '$mobile', '$description')";
	$query = mysqli_query($conn, $insertquery);

	if ($query) {
		?>
		<script>
			alert('Data Uploaded Successfully!');
		</script>
		<?php
	}else{
		?>
		<script>
			alert('Unsuccessful, Try Again!');
		</script>
		<?php
	}
}

?>