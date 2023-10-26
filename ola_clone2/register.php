<?php 
	include("db_connect/connection.php");
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$pass_1 = $_POST['pass_1'];
		$pass_2 = $_POST['pass_2'];
		
		$exist = "SELECT * FROM `register` WHERE email = '$email'";
		$result = mysqli_query($conn, $exist);
		
		$numExistRow = mysqli_num_rows($result);
		
		if($numExistRow > 0){
			echo "User id found";
		}
		if($pass_1 != $pass_2){
			echo "password not match";
		}
		else{
			$insert = "Insert into register(username,email,pass_1,pass_2) Values('$username','$email','$pass_1','$pass_2')";
			$data_result = mysqli_query($conn, $insert);
			
			if($data_result){
				echo "Success";
			}
			else{
				echo "something went wrong";
			}
			{
				                            header("location: ..\ola_clone2\index.php");

			}
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
<style>
   
* {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #F8F8FF;
}

.header {
  width: 40%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 40%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;

  </style>
  
  
<script type="text/javascript">  
        /* Function to Generat Captcha */  
        function GenerateCaptcha() {  
            var chr1 = Math.ceil(Math.random() * 10) + '';  
            var chr2 = Math.ceil(Math.random() * 10) + '';  
            var chr3 = Math.ceil(Math.random() * 10) + '';  
  
            var str = new Array(4).join().replace(/(.|$)/g, function () { return ((Math.random() * 36) | 0).toString(36)[Math.random() < .5 ? "toString" : "toUpperCase"](); });  
            var captchaCode = str + chr1 + ' ' + chr2 + ' ' + chr3;  
            document.getElementById("txtCaptcha").value = captchaCode  
        }  
  
        /* Validating Captcha Function */  
        function ValidCaptcha() {  
            var str1 = removeSpaces(document.getElementById('txtCaptcha').value);  
            var str2 = removeSpaces(document.getElementById('txtCompare').value);  
  
            if (str1 == str2) return true;  
            return false;  
        }  
  
        /* Remove spaces from Captcha Code */  
        function removeSpaces(string) {  
            return string.split(' ').join('');  
        }  
    </script>  

</head>
<body>


<div class="header-top">
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
  function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
</script>
</div>

   <div class="left">
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    
</script></div>

  </div>



  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="pass_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="pass_2">
  	</div>

<div>


<div>

 
<body onload="GenerateCaptcha();">  
    <div style="border: 2px solid gray; width: 700px;">  
  
        Enter the Captcha Text:  
        <input type="text" id="txtCompare" />  
        <input type="text" id="txtCaptcha" style="text-align: center; border: none; font-weight: bold; font-size: 20px; font-family: Modern" />  
        <input type="button" id="btnrefresh" value="Refresh" onclick="GenerateCaptcha();" />  
        <input id="btnValid" type="button" value="Check" onclick="alert(ValidCaptcha());" />  
  
        <br />  
        <br />  
    </div>
</div>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	

  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>