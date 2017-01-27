<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $username . "'s account"; ?></title>
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
</head>
<body>
<div class="header">
    <div class="container">
        <div class="header-top">
            <div style="float:right;margin-top:10px;margin-right: 10px;">
                <a class="btn btn-default log-bar" href="/" >home</a>
                <a class="btn btn-default log-bar" href="/user/logout.html" >logout</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <!---menu-----bar--->
        <!--header-bottom-->
    </div>
</div>

<div class="col-sm-2">
    <div class="list-group">
        <a href="/uadmin/index.html" class="list-group-item active">
            <h4 class="list-group-item-heading">Home</h4>
            <p class="list-group-item-text">User Profile.</p>
        </a>
        <a href="/uadmin/usedsel.html" class="list-group-item">
            <h4 class="list-group-item-heading">Selled Used Books</h4>
            <p class="list-group-item-text">Used Books Info.</p>
        </a>
        <a href="/uadmin/newsel.html" class="list-group-item">
            <h4 class="list-group-item-heading">Selled New Books</h4>
            <p class="list-group-item-text">New Books Info.</p>
        </a>
        <a href="/uadmin/postusedbook.html" class="list-group-item">
            <h4 class="list-group-item-heading">Post goods</h4>
            <p class="list-group-item-text">Upload books</p>
        </a>
        <a href="/uadmin/checkout.html" class="list-group-item">
            <h4 class="list-group-item-heading">Check Out</h4>
            <p class="list-group-item-text">Pay page</p>
        </a>
    </div>

</div>
<div class="col-sm-8" style="border-left: 1px dashed #C7C7C7">
    <div class="adminprofile" style="min-height: 750px;">
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label for="uname" class="col-sm-2 control-label">User name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="uname" placeholder="User name" value="<?php echo $username; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="upass" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="upass" placeholder="Password" value="<?php echo $password; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="tel" class="col-sm-2 control-label">Tel</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tel" placeholder="Tel" value="<?php echo $tel; ?>">
                </div>
                </div>
                 <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">save</button>
                    <button type="submit" class="btn btn-default">reset</button>
                </div>
            </div>
        </form>
    </div>

</div>


<div class="footer-grid">
    <div class="copy-rt">
        <div class="container">
            <p>Copyright &copy; 2015.Company name All rights reserved.</p><br>
            <a traget='_blank' href="http://www.songtang.org">please view my site</a>
        </div>
    </div>
</div>
</body>
</html>