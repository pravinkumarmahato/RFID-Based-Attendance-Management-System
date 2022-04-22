<?php
    require("includes/common.php");
    if(!isset($_SESSION['email']))
    {
        echo "<script>alert(\"Invalid Student username or password\")</script>";
        header("Location: student-login.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Research Project</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<style>
		    #banner_image {
    		    padding-bottom: 61px;
    		    width: 100%;
    		    text-align: center;
    		    color: #f8f8f8;
    		    background: url(img/IoT-Device-Attacks.jpg) no-repeat center center;
    		    background-size: cover;
		    }
		    #banner_content {
    		    position: relative;
    		    padding-top: 6%;
    		    padding-bottom: 6%;
    		    margin-top: 20%;
    		    margin-bottom: 12%;
    		    background-color: rgba(0, 0, 0, 0.8);
   		        max-width: 660px;
		    }
		</style>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="admin_index.php">KC BSc. IT (TEAM-2)</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
					<li><a href="student-index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="Attendence.php"><span class="glyphicon glyphicon-list-alt"></span> Attendence</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
                </div>
            </div>
        </div>
        <div id="content">
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1><u>RFID Based Attendence System</u></h1>
                            <h2>K.C. S.Y. B.Sc. I.T</h2>
                            <h3>(TEAM-2)</h3>
                            <br/>
                        </div>
                    </center>
                </div>
            </div>
		</div>
        <footer>
            <div class="container" align="center">
                <i>Footer Area</i>
            </div>
        </footer>
    </body>
</html>