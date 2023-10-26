



<!DOCTYPE html>
<!--suppress XmlInvalidId -->

<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1">


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</style>
</head>
<body>


<div class="topnav" id="myTopnav">
     <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  <a href="index.php">Home</a>
<a href="DriveWithUs.php">Drive With Us</a>
  <a href="cabmoney.php">Cab Money</a>
  <a href="cabfoundation.php">Cab Foundation</a>
   <a href="share.php">Share</a>
  <a href="cabOffer.php">Offers</a>
    <a href="support.php">Support</a>
    <left>        <a class="active" href="registration.php">Signup/Login</a></left>


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
  <a href="#default" class="logo"><i>OLACLONE</i></a>
  <div class="header-right">

    <a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjMnc3KoJP3AhVQkmYCHWs6CEsYABACGgJzbQ&ae=2&ohost=www.google.com&cid=CAESbOD2xItFHKteZe0CB3saNt3bQwFJzsHdTWxt7Xh5aOVE_gMdY2yQXdjbjVW93L6byLEWM4qGvVei6nqtj-E-agLugv1IscinS7QwJWJisK4lioYXUol2YrH3eu-oNudwmDgNEIlSAO-tFiGZaQ&sig=AOD64_3g3cbEZVWa_1-5_DeiEmp37VH-0g&q&adurl&ved=2ahUKEwje1cPKoJP3AhWy7HMBHUKpBeAQ0Qx6BAgHEAE">Buy/Sell Car</a>
    <a href="cabdriver.php">Cab Drive</a>
    <a href="select.php">Cab Select</a>
    <a href="attachFleet.php">Cab Fleet</a>
    <a href="cabFeatures.php">Features</a>
        <a class="active" href="bookCab.php">BOOK NOW</a>

  </div>
</div>


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

<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
  function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
</script>

<br></br>
<div class="margin-top:50px;"></div>


<section>
<div class ="w-50 m-auto">
<form action ="contactus_db.php"method="post">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#contact-form").on("submit",function(e){
e.preventDefault();
if($("#contact-form [name='your_name']").val() === '')
{
$("#contact-form [name='your_name']").css("border","1px solid red");
}
else if ($("#contact-form [name='your_email']").val() === '')
{
$("#contact-form [name='your_email']").css("border","1px solid red");
}
else
{
$("#loading-img").css("display","block");
var sendData = $( this ).serialize();
$.ajax({
type: "POST",
url: "get_response.php",
data: sendData,
success: function(data){
$("#loading-img").css("display","none");
$(".response_msg").text(data);
$(".response_msg").slideDown().fadeOut(3000);
$("#contact-form").find("input[type=text], input[type=email], textarea").val("");
}
});
}
});
$("#contact-form input").blur(function(){
var checkValue = $(this).val();
if(checkValue != '')
{
$(this).css("border","1px solid #eeeeee");
}
});
});
</script>




<br></br><br></br>
<div class="footer">
                         <div style="margin-left:50px;margin-right:50px;  font-size: 150%;
">
                             <hr>


<div class="bottomnav" id="mybottomnav">
    <div class="row">

        <p><b>Discover Cab</b></p>
    <div style="margin:50px;"></div>


  <a href="about.php">About Cab</a>
    <div style="margin:50px;"></div>

  <a href="careers.php">Careers</a>
        <div style="margin:50px;"></div>

  <a href="offer.php">Offers</a>
        <div style="margin:50px;"></div>

  <a href="support.php">Contact Us</a>
        <div style="margin:50px;"></div>

   
        <a href="DriveWithUs.php"><b>Become a Driver</b></a>
        <div style="margin:50px;"></div>

  <a href="bookCab.php"><b>Book a ride</b></a>
        <div style="margin:50px;"></div>
</div>
</div><hr>


<div class="bottom2nav" id="mybottom2nav">
    <div class="position:left">
    <div class="row">

        <h1><i>OlaClone.com</i></h1>
    <div style="margin:65px;"></div>


  <a href="notice.php">Notices</a>
    <div style="margin:50px;"></div>

  <a href="notice.php">Terms&Conditions</a>
        <div style="margin:50px;"></div>

  <a href="#notice.php">Privacy Policy</a>
        <div style="margin:50px;"></div>

    </div>
  
  
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
</div>
                         </div> </div></section>

</body>
</html>
