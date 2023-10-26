<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form </title>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	
	<style>
	
	</style>
</head>

<body>
   
   
   <a href="upi://pay?pa=6266221396@ybl&pn=**1396&mc=0000&mode=02&purpose=00">sub</a>
   
   
    <div class="wrapper">
        <h2>Payment Form</h2>
        <form action="checkout.php" method="post">
            <!--Account Information Start-->
            <h4>Account</h4>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Full Name" required class="name" name="name">
                    <i class="fa fa-user icon"></i>
                </div>
                <!-- <div class="input_box">
                    <input type="text" placeholder="Name on Card" required class="name">
                    <i class="fa fa-user icon"></i>
                </div> -->
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="email" placeholder="Email Address" required class="name" name="email">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <input type="hidden" value="<?php echo 'OID'.rand(100,1000);?>" name="orderid">
            <input type="hidden" value="<?php echo 1;?>" name="amount">
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Address" required class="name" name="address">
                    <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Mobile number" required class="name" name="mobile"> 
                    <i class="fa-solid fa-mobile-screen"  aria-hidden="true" ></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <button type="submit" value="Pay Now">PAY NOW</button>
                </div>
            </div>

        </form>
    </div>

</body>

</html>