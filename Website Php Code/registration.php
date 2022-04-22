<?php
    require("includes/common.php");
    if(!isset($_SESSION['email']))
    {
        echo "<script>alert(\"Invalid Student username or password\")</script>";
        header("Location: admin-login.php");
    }

	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				 $("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");
				}, 500);
			});
		</script>
		<title>Registration</title>
	</head>
	
	<body  style="background: url(img/DN.jpg) no-repeat center center; background-size: cover;">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="admin_index.php">KC BSc. IT (TEAM-2)</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
					<li><a href="admin-index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="user data.php"><span class="glyphicon glyphicon-list-alt"></span> Students Data</a></li>
					<li><a href="registration.php"><span class="glyphicon glyphicon-save-file"></span> Registration</a></li>
					<li><a href="read tag.php"><span class="glyphicon glyphicon-credit-card"></span> Read Card</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
                </div>
            </div>
        </div><br><br><br>

		<div id="content">
            <div class="container-fluid decor_bg " id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" style="opacity: 0.9;">
                            <div class="panel-heading" style="background-color:#;">
                                <center>
                                    <h4>Registration Form</h4>
                                </center>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="insertDB.php" method="POST">
                                    <div class="form-group">
									    <label class="control-label">Card UID</label>
                                        <textarea class="form-control" name="card_uid" id="getUID" placeholder="Please Scan your Card to display ID" rows="1" cols="1" required></textarea>
                                    </div>
									<div class="form-group">
									    <label class="control-label">Name</label>
                                        <input type="text" id="div_refresh" class="form-control"  placeholder="" name="name" required>
                                    </div>
									<div class="form-group">
									    <label class="control-label">Gender</label>
										<select name="gender" class="form-control" placeholder="" required>
								            <option value="Male">Male</option>
								            <option value="Female">Female</option>
							            </select>
                                    </div>
									<div class="form-group">
									    <label class="control-label">Email Address</label>
                                        <input type="text" class="form-control"  placeholder="" name="email" required>
                                    </div>
                                    <div class="form-group">
									    <label class="control-label">Password</label>
                                        <input type="text" class="form-control"  placeholder="" name="password" required>
                                    </div>
									<div class="form-group">
									    <label class="control-label">Phone Number</label>
                                        <input class="form-control" name="phone" type="text"  placeholder="" required>
                                    </div>
                                    <div class="form-group">
									    <label class="control-label">Class</label>
                                        <input class="form-control" name="class" type="text"  placeholder="" required>
                                    </div>
									<div class="form-group">
									    <label class="control-label">Department</label>
                                        <input class="form-control" name="dept" type="text"  placeholder="" required>
                                    </div>
                                    <center>
                                        <div class="col-md-8 col-md-offset-2">
                                            <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">Register</button><br>
                                        </div>
                                    </center>
                                </form>
                            </div>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>