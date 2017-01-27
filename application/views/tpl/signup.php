<!DOCTYPE html>
<html lang="en">
    <head>
    <title>sign up</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="N-Air Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta charset utf="8">
		<!--fonts-->
		<link href='https://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
		
		<!--fonts-->
		<!--bootstrap-->
			 <link href="/asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!--coustom css-->
			<link href="/asset/css/style.css" rel="stylesheet" type="text/css"/>
        <!--shop-kart-js-->
        <script src="/asset/js/simpleCart.min.js"></script>
		<!--default-js-->
			<script src="/asset/js/jquery-2.1.4.min.js"></script>
		<!--bootstrap-js-->
			<script src="/asset/js/bootstrap.min.js"></script>
        <script src="/asset/js/md5.js"></script>
		<!--script-->
         <!-- FlexSlider -->
            <script src="/asset/js/imagezoom.js"></script>
              <script defer src="/asset/js/jquery.flexslider.js"></script>
            <link rel="stylesheet" href="/asset/css/flexslider.css" type="text/css" media="screen" />

            <script>
            // Can also be used with $(document).ready()
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
              });
            });
            </script>
            <style>
            input {
            width:350px;
            height:40px;
            }
            </style>
        <!-- //FlexSlider-->
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="header-top">
                    <div style="float:right;margin-top:10px;margin-right: 10px;">

                        <a class="btn btn-default log-bar" href="/user/register.html" >Sign up</a>
                        <a class="btn btn-default log-bar" href="/user/login.html" role="button">Login</a>
                        <div class="cart box_1">
                            <a href="checkout.html">
                                <h3>
                                    <div class="total">
                                        <span class="simpleCart_total"></span>(<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div></h3>
                            </a>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
        <div class="clearfix"></div>
                </div>
                <!---menu-----bar--->
                <div class="header-botom">

                    <!--/.content--->
                </div>
                    <!--header-bottom-->
            </div>
        </div>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li><a href="/user/login.html">LOGIN</a></li>
                    <li class="active">REGISTER</li>
                </ol>
            </div>
        </div>
        <!-- reg-form -->
	<div class="reg-form">
		<div class="container">
			<div class="reg">
				<h3>Register Now</h3>
				<p>Welcome, please enter the following details to continue.</p>
				<p>If you have previously registered with us, <a href="/user/login.html">click here</a></p>
				 <form>
                    
					<ul>
						<li class="text-info">User Name: </li>
						<li><input type="text" id="uname" value=""></li>
					</ul>
                     <ul>
                         <li class="text-info">Password: </li>
                         <li><input type="password" id="upass" value=""></li>
                     </ul>

                    <ul>
                         <li class="text-info">Cardnum: </li>
                         <li><input type="number" id="ucardnum" value=""></li>
                     </ul>
                     <ul>
                         <li class="text-info">Expire: </li>
                         <li><input type="date" id="uexpire" value=""></li>
                     </ul>


					<ul>
						<li class="text-info">Backcode: </li>
						<li><input  type="number" id="ubackcode" value="" ></li>
					</ul>
                     <ul>
                         <li class="text-info">Tel Number:</li>
                         <li><input type="number" id="utel" value=""></li>
                     </ul>
					<ul>
						<li class="text-info">Post State:</li>
						<input type="text" id="upostaddr" value="">
					</ul>
                    <li class="text-info">Post City:</li>
                        <li><input type="text" id="upostaddr" value=""></li>
                    </ul>
                    <li class="text-info">Post Street:</li>
                        <li><input type="text" id="upostaddr" value=""></li>
                    </ul>
                    <li class="text-info">Post Zipcode:</li>
                        <li><input type="number" id="upostaddr" value=""></li>
                    </ul>
                    <ul>
                        <li class="text-info">User Email: </li>
                        <li><input type="email" id="uemail" value=""></li>
                    </ul>

					<input type="button" id="mysubmit" value="Register Now">
					<p class="click">By clicking this button, you are agree to my  <a href="#">Policy Terms and Conditions.</a></p> 
				</form>
			</div>
		</div>
	</div>
        <div class="footer-grid">
            <div class="container">
        <div class="clearfix"></div>
            </div>
            <div class="copy-rt">
                <div class="container">
            <p>Copyright &copy; 2015.Company name All rights reserved.</p>
                </div>
            </div>
        </div>
    </body>
<script>
    $("#mysubmit").click(function(){
        uname=$("#uname").val();
        upass=md5($("#upass").val());
        uemail=$("#uemail").val();
        utel=$("#utel").val();
        ucardnum=$("#ucardnum").val();
        uexpire=$("#uexpire").val();
        ubackcode=$("#ubackcode").val();



        upostaddr=$("#upostaddr").val();
        $.post("/api/adduser",{
            'uname':uname,
            'upass':upass,
            'uemail':uemail,
            'utel':utel,
            'upostaddr':upostaddr,
            'ucardnum':ucardnum,
            'uexpire':uexpire,
            'ubackcode':ubackcode

        },function(result){
            if(result=='0') {
                alert('Sign up Successfully');
                window.location.href="http://localhost/user/login.html";
            } else {
                alert('User name is exsting or others reasons');
            }
        });
    });
</script>
</html>