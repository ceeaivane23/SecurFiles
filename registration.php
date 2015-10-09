<html>	
<head>
<meta charset="UTF-8">
<style>
body {
    background: url('nyaw/yehey.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}


.logo {
    width: 213px;
    height: 36px;
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #99CCFF;
    border-radius: 5px;
    border-top: 5px solid #0000CC;
    margin: 0 auto;
	
}

.login-block h1 {
    text-align:left;
    color: #3333CC;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}
.login-block h2 {
    text-align: center;
    color: #669999;
    font-size: 25px;
	font-style: "Hill House";
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('nyaw/dude.jpg') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('nyaw/dude.jpg') 20px bottom no-repeat;
    background-size: 16px 80px;
	
}

.login-block input#password {
    background: #fff url('') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #ff7b81;
}

</style>
</head>



<body>
<form action=registration.php method=post>

	<div class="logo">
	</div>
	<div class="login-block">
	
	
		
			<h1><marquee behavior="alternate">First name:</marquee></h1> <input type=text name=fname required placeholder=Firstname>
			<h1><marquee behavior="alternate">Last name: </marquee> </h1><input type=text name=lname required placeholder=Lastname> 
		
		
		
			<h1><marquee behavior="alternate"> Username: </marquee> </h1> <input type=text name=uname required placeholder=Username> 
			<h1><marquee behavior="alternate"> Password: </marquee></h1> <input type=password name=pass  required placeholder=Password> 
		
		
		
		 <input type=submit name=submit value=Submit>
		 <input type=button value=Cancel onclick=can()> 

</form>

	<?php

		
		if(isset($_POST['pass']))
		{
			include("connection.php");
			
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$username=$_POST['uname'];
			$password=strrev($_POST['pass']);
		
			$reverse = $password;
			
				$reverse = strtolower($reverse);
					$reverse = str_replace(" ","/___/","$reverse");
					$reverse = str_replace("a","/ .- /","$reverse");
					$reverse = str_replace("b","/ -... /","$reverse");					
					$reverse = str_replace("c","/ -.-. /","$reverse");
					$reverse = str_replace("d","/ -.. /","$reverse");
					$reverse = str_replace("e","/ . /","$reverse");
					$reverse = str_replace("f","/ ..-. /","$reverse");
					$reverse = str_replace("g","/ --. /","$reverse");
					$reverse = str_replace("h","/ .... /","$reverse");
					$reverse = str_replace("i","/ .. /","$reverse");
					$reverse = str_replace("j","/ .--- /","$reverse");
					$reverse = str_replace("k","/ -.- /","$reverse");
					$reverse = str_replace("l","/ .-.. /","$reverse");
					$reverse = str_replace("m","/ -- /","$reverse");
					$reverse = str_replace("n","/ -. /","$reverse");
					$reverse = str_replace("o","/ --- /","$reverse");
					$reverse = str_replace("p","/ .--. /","$reverse");
					$reverse = str_replace("q","/ --.- /","$reverse");
					$reverse = str_replace("r","/ .-. /","$reverse");
					$reverse = str_replace("s","/ ... /","$reverse");
					$reverse = str_replace("t","/ - /","$reverse");
					$reverse = str_replace("u","/ ..- /","$reverse");
					$reverse = str_replace("v","/ ...- /","$reverse");
					$reverse = str_replace("w","/ .-- /","$reverse");
					$reverse = str_replace("x","/ -..- /","$reverse");
					$reverse = str_replace("y","/ -.-- /","$reverse");
					$reverse = str_replace("z","/ --.. /","$reverse");
					
				
			
			$searchuser="select * from users where username='$username'";
			$exec=mysql_query($searchuser) or die ('search error'.mysql_error());
			$countusers=mysql_num_rows($exec);
			
				if($countusers==0)
				{
					$adduser="insert into users values('','$fname','$lname','$username','$reverse')";
					$execute=mysql_query($adduser)or die ('ERROR!' .mysql_error());
					
					if($execute==true)
					{
						echo "<script> alert('REGISTRATION SUCCESSFUL!');</script>";
					}
					
					
				}
				
				else
				{
					echo"<p> USER ALREADY EXIST!";
				}
			


		}
	?>
	
	<script language=javascript>
	
	function can()
	{
		window.location="login2.php";
	}
	
	</script>
	</body>
</html>
