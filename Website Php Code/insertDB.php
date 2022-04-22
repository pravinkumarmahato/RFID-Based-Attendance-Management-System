<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track post values
        $card_uid = $_POST['card_uid'];
        $name = $_POST['name'];
		$gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $class = $_POST['class'];
		$dept = $_POST['dept'];
        
		// insert data
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO student set name = ?, gender =?, email =?, password =?, phone =?, class = ?, dept =?, card_uid =?";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$gender,$email,$password,$phone,$class,$dept,$card_uid));
		Database::disconnect();
		header("Location: user data.php");
    }
?>