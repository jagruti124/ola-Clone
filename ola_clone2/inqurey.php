<?php 
	include("db_connect/connection.php");
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
				$email = $_POST['email'];
        $username = $_POST['username'];
		        $number = $_POST['number'];
        $vehicle= $_POST['vehicle'];
        $city= $_POST['city'];
        $inquiry = $_POST['inquiry'];

		
		$insert = "Insert into inquery(email,username,number,vehicle,city,inquiry) Values('$email','$username','$number','$vehicle','$city','$inquiry')";
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
	
?>

<!DOCTYPE html>
<!--suppress XmlInvalidId -->
<html xmlns="http://www.w3.org/1999/html">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing:border box;
}

input[type=text], select, textarea {
  width: 50%;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;


}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */




</style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
  function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
</script>


<div class="margin-top:50px;"></div>
<div clss="center">

<div class="container">
  <center><h1>Submit your enquiry</h1></center>
  <h3>Submit this form and we will call you back</h3>

  <form method="post">
      <center>
    <label for="idemail">Email Id</label>
    <input type="text" id="emali" name="email" placeholder="Your Email.."required><br></br>

    <label for="idname">Your Name</label>
    <input type="text" id="lname" name="username" placeholder="Your  name.."required><br></br>
         <label for="idnumber">Your Number</label>
    <input type="text" id="number" name="number" placeholder="Your  number.."required><br></br>

 <label for="vehicle">Vehicle Type</label>
    <select id="vehicle" name="vehicle">
      <option value="auto">Auto</option>
      <option value="bike">Bike</option>
      <option value="e-rickshaw">E-rickshaw</option></select><br></br>

<label for="city">Select City</label>
    <select id="city" name="city">
      <option value="Puna">Puna</option>
      <option value="mumbai">mumbai</option>
      <option value="haidrabad">haidrabad</option></select><br></br>

<label for="inquiry">Your Inquiry</label>
    <textarea id="subject" name="inquiry" placeholder="Write Inquiry......." style="height:200px"></textarea>


    <div class="row">
		<input type="submit",value="submit", name="submit">
    </div>

        </center>

  </form></div>
</div>

</body>
</html>
