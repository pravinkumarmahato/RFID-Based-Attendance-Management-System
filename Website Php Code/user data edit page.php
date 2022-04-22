<?php
    require("includes/common.php");
    if(!isset($_SESSION['email']))
    {
        echo "<script>alert(\"Invalid Student username or password\")</script>";
        header("Location: admin-login.php");
    }
	
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    $pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM student where id = ?";
	$q = $pdo->prepare($sql);
	$q->execute(array($id));
	$data = $q->fetch(PDO::FETCH_ASSOC);
	Database::disconnect();
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
		}
		
		textarea {
			resize: none;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #4CAF50;
			width: 70%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #3e8e41;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		</style>
		
		<title>Edit : NodeMCU V3 ESP8266 / ESP12E with MYSQL Database</title>
		
	</head>
	
    <body>
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
                                    <h4>Edit Student Details</h4>
                                </center>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="user data edit tb.php?id=<?php echo $id?>" method="POST">
                                    <div class="form-group">
									    <label class="control-label">ID</label>
                                        <input type="text" class="form-control"  placeholder="" name="id" value="<?php echo $data['id'];?>" readonly>
                                    </div>
									<div class="form-group">
									    <label class="control-label">Card UID</label>
                                        <input class="form-control" name="card_uid" type="text"  placeholder="" value="<?php echo $data['card_uid'];?>" readonly>
                                    </div>
									<div class="form-group">
									    <label class="control-label">Name</label>
                                        <input type="text" class="form-control"  placeholder="" name="name" value="<?php echo $data['name'];?>"  required>
                                    </div>
									<div class="form-group">
									    <label class="control-label">Gender</label>
										<select name="gender" class="form-control" placeholder=""  id="mySelect" required>
								            <option value="Male">Male</option>
								            <option value="Female">Female</option>
							            </select>
                                    </div>
									<div class="form-group">
									    <label class="control-label">Email Address</label>
                                        <input type="text" class="form-control"  placeholder="" name="email" value="<?php echo $data['email'];?>"  required>
                                    </div>
									<div class="form-group">
									    <label class="control-label">Password</label>
                                        <input type="text" class="form-control"  placeholder="" name="password" value="<?php echo $data['password'];?>"  required>
                                    </div>
									<div class="form-group">
									    <label class="control-label">Phone Number</label>
                                        <input class="form-control" name="phone" type="text"  placeholder="" value="<?php echo $data['phone'];?>"  required>
                                    </div>
                                    <div class="form-group">
									    <label class="control-label">Class</label>
                                        <input class="form-control" name="class" type="text"  placeholder="" value="<?php echo $data['class'];?>"  required>
                                    </div>
									<div class="form-group">
									    <label class="control-label">Department</label>
                                        <input class="form-control" name="dept" type="text"  placeholder="" value="<?php echo $data['dept'];?>"  required>
                                    </div>
                                    <center>
                                        <div class="col-md-8 col-md-offset-2">
                                            <button type="submit" name="submit" class="btn btn-success">Update</button>
											<a>     </a>
						                    <a class="btn btn-primary" href="user data.php">Back</a>
										</div>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<script>
			var g = document.getElementById("defaultGender").innerHTML;
			if(g=="Male") {
				document.getElementById("mySelect").selectedIndex = "0";
			} else {
				document.getElementById("mySelect").selectedIndex = "1";
			}
		</script>
	</body>
</html>