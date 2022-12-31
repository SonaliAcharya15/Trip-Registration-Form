<?php
require_once('config.php');
?>


<?php

if(isset($_POST['create'])){
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$email=$_POST['email'];
			$phonenumber=$_POST['phonenumber'];
			$semester=$_POST['semester'];

			$sql = "INSERT INTO users (firstname, lastname ,email, phonenumber, semester) VALUES(?,?,?,?,?)";
			$stminsert=$db->prepare($sql);
			$result =$stminsert->execute([$firstname,$lastname,$email,$phonenumber,$semester]);
			if ($result) {
				echo 'successfully saved';
			}else{
				echo 'error';
			}
		}


	