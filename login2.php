
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
    text-align: center;
    color: #000;
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
<form action=login2.php method=post>
<div class="logo"></div>
<div class="login-block">
    <h2>Verification</h2>
    <input type="text" value="" required placeholder="Username" name="username" />
    <input type="password" value="" required placeholder="Password" name="password" />
	<h1><input type =submit name=submit value =Verify></button><h1>
	<h1><input type=button value=Register onclick=reg()></button><h1>
	</div>
</form>


	<?php
	
		if(isset($_POST['password']))
		{
			include("connection.php");
			$username=$_POST['username'];
			$password=strrev($_POST['password']);
			
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
					
			
			$search="select * from users where username='$username' and password = '$reverse'";

			$exec=mysql_query($search) or die ('search error'.mysql_error());
			$count=mysql_num_rows($exec);
			
				if($count=1)
				{
					echo "<script> alert('LOGIN SUCCESS!'); </script>";
				}
				
				else
				{
					echo "<script> alert('INVALID USERNAME or PASSWORD!'); </script>";
				}
		}
	?>
	
	<script language=javascript>
	
	function reg()
	{
		window.location="registration.php";
	}
	
	</script>




</body>



</html>