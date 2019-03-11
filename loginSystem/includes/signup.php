<?php 

if (isset($_POST['submit'])) {
	
	include_once 'db.php';

	$first = mysqli_real_escape_string($conn, $_POST['firstname']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Error Handlers
	//Check for Empty Fields
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd) {
		header("Location: ../signup.php?signup=empty");
	exit();
	} else {
        //check if input character are valid
        if (!preg_match("/^[a-zA-Z]*$, $first") || !preg_match("/^[a-zA-Z]*$, $last" )) {
        header("Location: ../signup.php?signup=invalid");
	    exit();
        } else {
        	// check if email is valid
        }
	}

}else{
	header("Location: ../signup.php");
	exit();
}