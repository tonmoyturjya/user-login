<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>
		Login System
	</title>
</head>
<body>
	<h1>User Login Page</h1>
	<form action=""method = "post" name = "LOGIN FORM">
		<table align="center">
			<?php if (isset($msg)) {?>
				<tr>
					<td align="center"> 
						<?php echo $msg;?>
					</td>>
				</tr>
			<?php }?>
			<tr>
				<td>
					<h2>
						Login Here
					</h2>
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="User Name" class="Input">
				</td>
			</tr>
			<tr>
				<td>
					<input type="password" name="Password" class= "Input">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="Submit" value= "Login" class="Button1">
				</td>>
			</tr>>	

		</table>
		
	</form>
</body>
</html>
<?php session_start(); /* Starts the session */
/* Check Login form submitted */if(isset($_POST['Submit'])){
/* Define username and associated password array */$logins = array('Alex' => '123456','username1' => 'password1','username2' => 'password2');

/* Check and assign submitted Username and Password to new variable */$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Check Username and Password existence in defined array */if (isset($logins[$Username]) && $logins[$Username] == $Password){
/* Success: Set session variables and redirect to Protected page  */$_SESSION['UserData']['Username']=$logins[$Username];
header("location:index.php");
exit;
} else {
/*Unsuccessful attempt: Set error message */$msg="<span style='color:red'>Invalid Login Details</span>";
}
}
?>