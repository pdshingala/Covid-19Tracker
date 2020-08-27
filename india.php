<?php

include "dbconn.php";
session_start();
$_SESSION['backurl'] = basename($_SERVER['PHP_SELF']);


?>
<!DOCTYPE html>
<html>

<head>
    <title>India Statistics</title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
    <script type="text/javascript" src="./Javascript/covidscript.js"></script>
</head>

<body onload="fatchindia()">



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav_style p-3 sticky-top" id="homeid">
        <a class="navbar-brand pl-5" href="index.php">COVID-19 TRACKER</a>
        <button class="navbar-toggler nav_toggle" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-5 text-capitalize">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">home</a>
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
                <?php

        if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
        ?>
                <!--your login form-->
                <li class="nav-item">
                    <div class="btn btn-warning"><a href="./login/logout.php">Logout</a></div>
                </li>
                <?php
        } else {
        ?>
                <li class="nav-item">
                    <a class="btn btn-outline-light btn-warning btn-sm" href="./login/login.php">LOGIN</a>
                </li>
                <span>&nbsp;</span>
                <li class="nav-item">
                    <a class="btn btn-outline-light btn-warning btn-sm" href="./signup/signup.php">SIGN UP</a>
                </li>
                <?php
        }

        ?>
            </ul>
        </div>
    </nav>

    <section class="">
        <div class="corona_states container">
            <div class="">
                <h3 class="text-uppercase text-center">Covid-19 India Statistics</h3>
            </div>


            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center" id="india_table">
                    <tr>
                        <th>States/UT</th>
                        <th>Total Cases</th>
                        <th>Total Recovered</th>
                        <th>Total Deaths</th>
                        <th>Active Cases</th>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <!--SCROLL TOP-->

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
    </script>


</body>

</html>