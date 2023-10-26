<?php 
	include("db_connect/connection.php");
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$user = $_POST['user'];
        $email = $_POST['email'];
		$mobile = $_POST['mobile'];
        $comments= $_POST['comments'];

		
		$insert = "Insert into contact(user,email,mobile,comments) Values('$user','$email','$mobile','$comments')";
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
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <style>

.button {
  background-color: #4CAF50;
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


body  {
  background-image: url("ola33.jpg");
  background-color: ;
}



    </style>
    <title>bookCab</title>
</head>
<body>
<div class="topnav" id="myTopnav">


<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>

  <a href="index.php">Drive With Us</a>
  <a href="cabmoney.php">Ola Money</a>
      <a href="cabfoundation.php">Cab Foundation</a>
    <a href="support.php">Support</a>
	
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


    
<div class="header-top">
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
  function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
</script>
</div>

</div>


<div class="header">
  <a href="#default" class="logo"><i>OLACLONE</i></a>
  <div class="header-right">

    <a href="DriveWithUs.php">Cab Drive</a>
    <a href="select.php">Cab Select</a>
    <a href="attachFleet.php">Cab  Fleet</a>
          <a href="cabfeatures.php">Features</a>
      <a class="active" href="bookCab.php">Book Now</a>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
  function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
</script>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<br></br> <br></br><br></br><br></br>
<section>
<div class ="w-50 m-auto">
<form method="post">
<h2>Contact Us</h2>

<div class=" form-group">
<label>username</label>
<input type= "text"name="user"autocomplete="off"class="form-control">
</div>
 
 <div class=" form-group">
<label>email</label>
<input type= "text"name="email"autocomplete="off"class="form-control">
</div>

<div class=" form-group">
<label>mobile</label>
<input type= "text"name="mobile"autocomplete="off"class="form-control">
</div>

<div class=" form-group">
<label>comments</label>
<textarea class=" form-control"name="comments">
</textarea>
</div>
    <button type"submit" class="btn btn-success">submit</button>
	
</form>
</div>

</section>


<section>
    <div class="footer">
        <div style="margin-left:50px;margin-right:50px;">
                             <hr>


<div class="bottomnav" id="mybottomnav">
    <div class="row">

        <p><b>Discover Cab</b></p>
    <div style="margin:50px;"></div>


  <a href="#home">About Cab</a>
    <div style="margin:50px;"></div>

  <a href="#news">Careers</a>
        <div style="margin:50px;"></div>

  <a href="#contact">Offers</a>
        <div style="margin:50px;"></div>

  <a href="#about">Contact Us</a>
        <div style="margin:50px;"></div>

   <a href="#news">Media Center</a>
        <div style="margin:50px;"></div>

        <a href="#contact"><b>Become a Driver</b></a>
        <div style="margin:50px;"></div>

  <a href="#about"><b>Book a ride</b></a>
        <div style="margin:50px;"></div>
</div>
</div><hr>


<div class="bottom2nav" id="mybottom2nav">
    <div class="position:left">
    <div class="row">

        <h1><i>OlaClone.com</i></h1>
    <div style="margin:65px;"></div>


  <a href="notice.html">Notices</a>
    <div style="margin:50px;"></div>

  <a href="notice.html">Terms&Conditions</a>
        <div style="margin:50px;"></div>

  <a href="#notice.html">Privacy Policy</a>
        <div style="margin:50px;"></div>

    </div></div>


    <div class="center">
    <div class="social-footer-left">
    <a href="#"><img class="logo" src="https://placehold.it/150x30"></a>
  </div>
  <div class="social-footer-icons">
   
    <div class="menu simple">
      <li><a href="https://www.facebook.com/profile.php?id=100080511159952"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      <li><a href="https://twitter.com/?lang=en"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>


    </div>
    <br></br>
  </div>
  </div>


</div>
                         </div> </div></section>


</body>
</html>