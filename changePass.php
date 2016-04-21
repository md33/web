<?php
	require 'connect.php';
	$name = $_POST['name'];
	$password = $_POST['password'];
        $password1 = $_POST['password1'];
	$questionNumber = $_POST['number'];
        $answer = $_POST['answer'];
        
        if($password == $password1){	
	$passwordSecure=md5($password);
	$sql="UPDATE INTO `User`(`Username`, `Password`, `QuestionNumber`, `Answer`) VALUES('$name','$passwordSecure',$questionNumber,'$answer')";
	if(mysqli_query($con,$sql)){
		echo "Data inserted";
	}else{
		echo "Data not inserted , Try Again";
	}
        }
	mysqli_close($con);
?>