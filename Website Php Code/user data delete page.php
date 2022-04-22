<?php
    require("includes/common.php");
    if(!isset($_SESSION['email']))
    {
        echo "<script>alert(\"Invalid Student username or password\")</script>";
        header("Location: admin-login.php");
    }

    require 'database.php';
    $id = 0;
     
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $id = $_POST['id'];
         
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM student  WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
        header("Location: user data.php");
         
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
	<title>Delete : NodeMCU V3 ESP8266 / ESP12E with MYSQL Database</title>
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
    <center>
        <div class="container">
		    <div class="span10 offset1">
			    <div class="row">
				    <h3 align="center">Delete User</h3>
			    </div>

			    <form class="form-horizontal" action="user data delete page.php" method="post">
				    <input type="hidden" name="id" value="<?php echo $id;?>"/>
				    <p class="alert alert-error">Are you sure to delete ?</p>
				    <div class="form-actions">
					    <button type="submit" class="btn btn-danger">Yes</button>
					    <a class="btn btn-success" href="user data.php">No</a>
				    </div>
			    </form>
		    </div>  
        </div>
    </center>
  </body>
</html>