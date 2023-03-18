<?php
session_start();

$connection = mysqli_connect("sql113.epizy.com","epiz_33775708","aKvE7bZITRl","epiz_33775708_dashboard");
if(isset($_POST['signup_btn']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$noi = $_POST['noi'];
	$password = $_POST['password'];
    $encpass = md5($password);

	$query = "INSERT INTO `info_provider`(`name`, `email`, `noi`, `password`) VALUES ('$name','$email','$noi','$encpass')";
	$query_run = mysqli_query($connection, $query);


	if($query_run)
	{
		echo "Saved";
		$_SESSION['success'] = "User Registered Successfully";
		header('Location: ../login.php');
	}
	else
	{
		$_SESSION['status'] = "User Not Registered";
		header('Location: signup.php');

	}
}

if(isset($_POST['login_btn']))
{
	$email_login = $_POST['email'];
	$password_login = $_POST['password'];

	$query = "SELECT * FROM `info_provider` WHERE email='$email_login'";
	$query_run = mysqli_query($connection, $query);

    $result = mysqli_fetch_assoc($query_run);
    $email_login = $result ['email'];
    $encpasss = $result ['password'];


	if(mysqli_num_rows($query_run)>0)
	{
        if (md5($password_login)==$encpasss){
            $_SESSION['email_login'] = $email_login;
		    $email_login = $_POST['email'];
		    header('Location: info_gathering.php');
        }
		// $_SESSION['email_login'] = $email_login;
		// $email_login = $_POST['email'];
		// header('Location: info_gathering.php');

        else{
            echo"Incorrect Password";
        }

	}
	else
	{
		$_SESSION['status'] = 'Email/Password is invalid';
		header('Location: ../login.php');

	}
}


if(isset($_POST['verify_btn']))
{
	$name_info = $_POST['name_info'];
	$vid_info = $_POST['vid_info'];
	$location_info = $_POST['location_info'];
	$date_info = $_POST['date_info'];
	$time_info = $_POST['time_info'];
	$theme_info = $_POST['theme_info'];
	$type_info = $_POST['type_info'];
	$noi_info = $_POST['noi_info'];


	$queryi = "INSERT INTO `events_info`(`name`, `vid`, `location`, `date`,`time`,`theme`, `type`,`noi`) VALUES ('$name_info','$vid_info','$location_info','$date_info','$time_info','$theme_info','$type_info','$noi_info')";
	$queryi_run = mysqli_query($connection, $queryi);


	if($queryi_run)
	{
		echo "Saved";
		$_SESSION['success'] = "User Registered Successfully";
		header('Location: ../events.php');
	}
	else
	{
		$_SESSION['status'] = "User Not Registered";
		header('Location: info_gathering.php');

	}
}


?>
