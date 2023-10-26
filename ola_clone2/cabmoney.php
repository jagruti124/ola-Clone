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
	section{
    padding:2rem 9%;
}

.heading{
    text-align: center;
    font-size: 4rem;
    color:#333;
    padding:1rem;
    margin:2rem 0;
    background:rgba(255, 51, 153,.05);
}

.heading span{
    color:var(--pink);
}

.btn{
    display: inline-block;
    margin-top: 1rem;
    border-radius: 5rem;
    background:#333;
    color:#fff;
    padding:.9rem 3.5rem;
    cursor: pointer;
    font-size: 1.7rem;
}

.btn:hover{
    background:var(--pink);
}

header{
    position: fixed;
    top:0; left:0; right:0;
    background:#fff;
    padding:-1rem 9%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
}

header .logo{
    font-size: 2.7rem;
    color:#333;
    font-weight: bolder;
}

header .logo span{
    color:var(--pink);
}

header .navbar a{
    font-size: 1.5rem;
    padding:0 1.5rem;
    color:#666;
}

header .navbar a:hover{
    color:var(--pink);
}

header .icons a{
    font-size: 2rem;
    color:#333;
    margin-left: 0.5rem;
}

header .icons a:hover{
    color:var(--pink);
}

header #toggler{
    display: none;
}

header .fa-bars{
    font-size: 3rem;
    color:#333;
    border-radius: .5rem;
    padding:.5rem 1.5rem;
    cursor: pointer;
    border:.1rem solid rgba(0,0,0,.3);
    display: none;
}
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