<html>
<body>
	<p>
		Welcome to my homepage
	</p>
<?php
if (!isset($_POST['submit']))
{
		//fill in get or post for method
	echo '<form action="" method ="post">';
	
	//you can't move forward is the whole pont
	
	echo '<p>FirstName:';
	if (isset($_GET['firstname']) &&  ($_GET['firstname']!='')){//previously submitted if theres data. if theres no data it's error checked on the bottom
		echo '<input type="text" name="firstName" value="'.$_GET['firstname'].'"/>';
		//echo '<p>The first name you entered was '.$_GET['firstname'].'</p>';
	}
	else{
		if (isset($_GET['fnameErr'])){
			echo '<input type="text" name="firstName" />';
			echo '<p><span style="color:F00">Error: First name cannot be blank!</span></p>';
		}
		else
			echo '<input type="text" name="firstName" />';
	}
	echo '</p>';											
	echo '<p>Last Name: ';
	if (isset($_GET['lastname']) && ($_GET['lastname']!='')){
		echo '<input type="text" name="lastName"/>';
		//echo '<p>The last name you entered was '.$_GET['lastname'].'</p>';
	}
	else{
		if (isset($_GET['lnameErr'])){
			echo '<input type="text" name="lastName" />';
			echo '<p><span style="color:F00">Error: Last name cannot be blank!</span></p>';
		}
		else
			echo '<input type="text" name="lastName" />';
	}
	


	echo '</p>';
	echo '<p>Email Address: ';
	if(isset($_GET['Email']) && ($_GET['Email']!='')){
		echo '<input type="email" name="email"/>';
		//echo '<p>The email you entered was '.$_GET['Email'].'</p>';
	}
	else{
		if (isset($_GET['emailErr'])){
			echo '<input type="text" name="email" />';
			echo '<p><span style="color:F00">Error: Email name cannot be blank!</span></p>';
		}
		else
			echo '<input type="text" name="email" />';
			
	}
	
	
	echo '</p>';
	echo '<button type="submit" name="submit" value="submit">Submit</button>';
	echo '</form>';
	
}

		
	
	
		
	
	

?>
<?php
	if (isset($_POST['submit'])){
		//no space taken up
		$errString='';
		if (($fname=$_REQUEST['firstName']) ==""){
			$errString.="fnameErr=err&";
		}
		if (($lname=$_REQUEST['lastName']) ==""){
			$errString.="lnameErr=err&";
		}
		if (($email=$_REQUEST['email']) ==""){
			$errString.="emailErr=err";
		}
		if ($errString!=''){
			header("Location: https://ec2-18-220-52-116.us-east-2.compute.amazonaws.com/hw11/index.php?$errString&firstname=$fname&lastname=$lname&Email=$email");
		}
		echo '<h3>Data received from Index.php</h3>';
		echo '<p>FirstName '.$fname.'</p>';
		echo '<p>Last Name: '.$lname.'</p>';
		echo '<p>Email Address: '.$email.'</p>';
	}
?>
</body>
</html>
