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
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav ml-auto pr-5 text-capitalize">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactid">Asses</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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


    <!-- CONTACT US -->

    <section class="container-fluid pb-3" id="contactid" style="padding-top: 100px;">
        <div class="section_header text-center mb-2 mt-3">
            <h1>Asses Yourself</h1>
        </div>
        <div class="container">
		<div id="success" class="alert alert-success" style="display:none">
            <center>Risk level = 0%</center>
        </div>

        <div id="alert" class="alert alert-info" style="display:none">
            <center>Risk level = 25%</center>
        </div>

        <div id="warning" class="alert alert-warning" style="display:none">
            <center>Risk level = 75%</center>
        </div>

        <div id="danger" class="alert alert-danger" style="display:none">
            <center>Risk level = 100%</center>
        </div>
            <div class="row">
                <div class="col-lg-8 offset-4 col-12">
                    <form onsubmit="return healthcheck();">
                        <div class="form-group">
                            <label for="fever">Do you have fever</label><br>
                            <!-- <input type="email" class="form-control" name="email" placeholder="abc@example.com" required
								autocomplete="off"> -->
                            <label class="radio-inline"><input type="radio" name="fever" id="q1"
                                    checked>No</label>&nbsp;&nbsp;&nbsp;
                            <label class="radio-inline"><input type="radio" name="fever" id="q1n">Yes</label>
                        </div>

                        <div class="form-group">
                            <label for="cough">Do you have cold & cough</label><br>
                            <!-- <input type="number" class="form-control" name="mobile" placeholder="Mobile Number"
								autocomplete="off" required> -->
                            <label class="radio-inline"><input type="radio" name="cough" id="q2"
                                    checked>No</label>&nbsp;&nbsp;&nbsp;
                            <label class="radio-inline"><input type="radio" name="cough" id="q2n">Yes</label>
                        </div>

                        <div class="form-group">
                            <label for="breathing">Dificulty in breathing</label><br>
                            <!-- <textarea class="form-control" name="description" placeholder="Write Here..."
								rows="3"></textarea> -->
                            <label class="radio-inline"><input type="radio" name="breathing" id="q3"
                                    checked>No</label>&nbsp;&nbsp;&nbsp;
                            <label class="radio-inline"><input type="radio" name="breathing" id="q3n">Yes</label>
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
    window.onscroll = function() {
        scrollFunction()
    };

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
	
	function healthcheck() {
        var cnt = 0;
        if (document.getElementById('q1n').checked) cnt++;
        if (document.getElementById('q2n').checked) cnt++;
        if (document.getElementById('q3n').checked) cnt++;
        if (cnt == 0) {
            document.getElementById('success').style.display = "";
        }
        else if (cnt == 1) {
            document.getElementById('alert').style.display = "";
        }
        else if (cnt == 2) {
            document.getElementById('warning').style.display = "";
        }
        else if (cnt == 3) {
            document.getElementById('danger').style.display = "";
        }
        return false;

    }
    </script>

</body>

</html>




<!-- action="" method="POST" -->