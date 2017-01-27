<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="N-Air R
        esponsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="header-top">
                <div class="logo">
                    <a href="index.html">Whole Books</a>
                </div>
                    <div style="float:right;margin-top:10px;margin-right: 10px;">
                        <?php


                        if(empty($username)&&empty($name)) { ?>
                                <a class="btn btn-default log-bar" href="/user/register.html">Sign up</a>
                                <a class="btn btn-default log-bar" href="/user/login.html" role="button">Login</a>
                            <?php } else { ?>
                        <a class="btn btn-default log-bar" href="/uadmin/index.html">
                            <?php
                                if(!empty($username)) {
                                    echo $username;
                                } else {
                                    echo $name;
                                }
                            ?>
                        </a><a class="btn btn-default log-bar" href="/user/logout.html" >logout</a>
                        <?php } ?>

                        <div class="cart box_1">
                            <a href="/uadmin/checkout.html">
                            <h3>
                                <div class="total">
<span>$<?php if(!empty($username)) {echo (double)$balance/100;} ?></span><span>  cart:
(<?php 
    if(!empty($listcart['booklist'])) {
    $arr = (explode(" ",$listcart['booklist']));
    //var_dump($arr);
    echo count($arr);
} else {
    echo "0";
}

?>)</span></div></h3>
                            </a>
                            <div class="clearfix"> </div>
                        </div>	
                    </div>
        <div class="clearfix"></div>
                </div>
                <!---menu-----bar--->
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

                            <div class="collapse navbar-collapse collapse-pdng" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav nav-font">
                                    <li><a href="/">home</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">NewBooks<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/catory/1/1">Fiction</a></li>
                                            <li><a href="/catory/1/2">Art</a></li>
                                            <li><a href="/catory/1/3">culture</a></li>
                                            <li><a href="/catory/1/4">science</a></li>
                                            <li><a href="/catory/1/5">technology</a></li>
                                            <li><a href="/catory/1/6">comics</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">UsedBooks<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/catory/0/1">Fiction</a></li>
                                            <li><a href="/catory/0/2">Art</a></li>
                                            <li><a href="/catory/0/3">culture</a></li>
                                            <li><a href="/catory/0/4">science</a></li>
                                            <li><a href="/catory/0/5">technology</a></li>
                                            <li><a href="/catory/0/6">comics</a></li>

                                        </ul>
                                    </li>

                                    <div class="clearfix"></div>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
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
        <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
        

        <div class="shop-grid">
            <div class="container">


<div class="panel panel-default">
  <div class="panel-heading"><?php echo $bookinfo[0]['title']; ?></div>
  <div class="panel-body">
        <img style="width:231px;height: 346px;" src="<?php echo $bookinfo[0]['imgpath'];?>"/>
        <div>price: <?php echo $bookinfo[0]['price']/100; ?></div>
        <div>title: <?php echo $bookinfo[0]['title']; ?></div>
        <div>author: <?php echo $bookinfo[0]['author']; ?></div> 
        <div>isnew: 
        <?php 
        if($bookinfo[0]['isnew']=='1'){
         echo 'newbook';
        }else {
            echo 'old book';
        }?>
            
        </div>
  </div>

</div>





                
                
            <div class="clearfix"></div>
            </div>
        </div>
        <div class="footer-grid">
            <div class="container">
        <div class="clearfix"></div>
            </div>
            <div class="copy-rt">
                <div class="container">
            <p>Copyright &copy; 2015.Company name All rights reserved.</p><br>
            <a traget='_blank' href="http://www.songtang.org">please view my site</a>
                </div>
            </div>
        </div>
    </body>


</html>