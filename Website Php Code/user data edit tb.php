<?php
    require 'database.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
		$id = $_POST['id'];
        $name = $_POST['name'];
		$gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $class = $_POST['class'];
		$dept = $_POST['dept'];
        $card_uid = $_POST['card_uid'];
         
        $pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "UPDATE student  set name = ?, gender =?, email =?, password =?, phone =?, class = ?, dept =?, card_uid =? WHERE id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($name,$gender,$email,$password,$phone,$class,$dept,$card_uid,$id));
		Database::disconnect();
		header("Location: user data.php");
    }
?>