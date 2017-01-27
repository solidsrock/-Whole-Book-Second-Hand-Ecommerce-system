<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Home</title>
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
        <style>
        .img {
            width:231px;
            height: 346px;
        }
        </style>
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
        <div class="header-end">
            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="/asset/images/book3.jpg" alt="...">
                        <div class="carousel-caption car-re-posn">
                            <h3>Whole Books</h3>
                            <h4>Whole Food For Mind</h4>
                            <span class="color-bar"></span>
                        </div>
                    </div>
                    <div class="item">
                      <img src="/asset/images/book1.jpg" alt="...">
                        <div class="carousel-caption car-re-posn">
                            <h3>Whole Books</h3>
                            <h4>Sharing Your Books</h4>
                            <span class="color-bar"></span>
                        </div>
                    </div>
                    <div class="item">
                      <img src="/asset/images/book2.jpg" alt="...">
                        <div class="carousel-caption car-re-posn">
                            <h3>Whole Books</h3>
                            <h4>Creating Your Space</h4>
                            <span class="color-bar"></span>
                        </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left car-icn" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right car-icn" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="feel-fall">
            <div class="container">
                <div class="pull-left fal-box">
                    <div class=" fall-left">
                        <h3>Whole</h3>
                      
                        <p>Inspiration and innovation<br> for every readers in the world</p>
                        <span class="fel-fal-bar"></span>
                    </div>
                </div>
                <div class="pull-right fel-box">
                    <div class="feel-right">
                        <h3>Books</h3>
                        
                        <p>Creation and Convenience<br> for every readers in the world</p>
                        <span class="fel-fal-bar2"></span>
                    </div>
                </div>
            <div class="clearfix"></div>
            </div>
        </div>
        <div class="shop-grid">
            <div class="container">



                <?php 
                    for($cnt=0;$cnt<count($lastbooks);$cnt++) {
                ?>


                <div class="col-md-4 grid-stn simpleCart_shelfItem">
                     <!-- normal -->
                        <div class="ih-item square effect3 bottom_to_top">
                            <div class="bottom-2-top">
                    <div class="img"><img src="<?php echo $lastbooks[$cnt]['imgpath']; ?>" alt="/" class="img-responsive gri-wid"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3><?php echo $lastbooks[$cnt]['title']; ?></h3>
                                </div>
                                <div class="pull-right styl-price">
                                    <p><a  href="#" class="item_add" onclick="addbookcart(<?php echo $lastbooks[$cnt]['id']; ?>);"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$<?php echo (double)$lastbooks[$cnt]['price']/100; ?></span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div></div>
                        </div>
                    <!-- end normal -->
                    <div class="quick-view">
                        <a href="/api/view/<?php echo $lastbooks[$cnt]['id']; ?>">View Details</a>
                    </div>
                </div>
                <?php } ?>





                
                
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

    <script type="text/javascript">
        function addbookcart(id) {
            alert('add '+id+'to book cart ok');
            //用户名
            username = '<?php echo $username;?>';
            uid = '<?php echo $id;?>';
            //添加到的内容
            //
            $.ajax({
              type: 'POST',
              url: 'http://localhost/api/addtocart',
              datatype: "text",
              data: {id:uid,username:username,bookid:id},
              success: function() {
              },
            });

        }
    </script>
</html>