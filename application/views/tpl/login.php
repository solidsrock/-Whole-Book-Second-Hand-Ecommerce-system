<!DOCTYPE html>
<html lang="en">
    <head>
    <title>log in</title>
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
		<!--script-->
         <!-- FlexSlider -->
            <script src="/asset/js/imagezoom.js"></script>
              <script defer src="/asset/js/jquery.flexslider.js"></script>
        <script defer src="/asset/js/md5.js"></script>
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
        .myform {
            border: none;
            color: #fff;
            padding: 8px 35px;
            font-size: 14px;
            cursor: pointer;
            font-weight: 500;
            margin: 0 0 32px 0;
            background: #100b0b;
            border-top: none;
            border-left: none;
            border-right: none;
            outline: none;
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
                                <h3></h3>
                            </a>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
        <div class="clearfix"></div>
                </div>
                <!---menu-----bar--->
                <div class="header-botom">
                    <div class="content white">
                    <nav class="navbar navbar-default nav-menu" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!--/.navbar-header-->


                        <!--/.navbar-collapse-->
                        <div class="clearfix"></div>
                    </nav>
                    <!--/.navbar-->   
                        <div class="clearfix"></div>
                    </div>
                    <!--/.content--->
                </div>
                    <!--header-bottom-->
            </div>
        </div>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">HOME</a></li>
                    <li class="active">LOGIN</li>
                </ol>
            </div>
        </div>
        <!--signup-->
        <!-- login-page -->
        <div class="login">
            <div class="container">
                <div class="login-grids">
                    <div class="col-md-6 log">
                             <h3>Login</h3>
                             <div class="strip"></div>
                             <p>Welcome, please enter the following to continue.</p>
                             <p>If you have previously Login with us, <a href="#">Click Here</a></p>
                             <form>
                                 <h5>User Name:</h5>	
                                 <input type="text" value="" id="name" placeholder="input your name">
                                 <h5>Password:</h5>
                                 <input type="password" value="" id="pass" placeholder="input password"><br>
                                 <input class="myform" style="width:100px;" value="Login" onclick="checkpass();">
                             </form>
                            <a href="#">Forgot Password ?</a>
                    </div>
                    <div class="col-md-6 login-right">
                            <h3>New Registration</h3>
                            <div class="strip"></div>
                            <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                            <a href="/user/register.html" class="button">Create An Account</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
<!-- //login-page -->
        <!--signup-->
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
    function checkpass() {
        $.post("/user/checklogin", {name: $('#name').val(),pass: md5($('#pass').val())}, function (result) {
            if (result == '0') {
                alert('manager log in successfully' + result);
                window.location.href="http://localhost/admin/index.html";
            }  else if (result == '1') {
                alert('Customer log in successfully');
                window.location.href="http://localhost/uadmin/index.html";
            } else {
                alert('Fail to log in');
                //window.location.href="http://localhost/user/login.html";
            }


        });
    }
</script>

</html>