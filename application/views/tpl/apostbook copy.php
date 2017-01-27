<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $username; ?> Selling Page</title>
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
    <script src="/asset/js/ajaxfileupload.js" type="text/javascript"></script>
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
        <a href="/admin/index.html" class="list-group-item">
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
        <a href="/uadmin/postusedbook.html" class="list-group-item active">
            <h4 class="list-group-item-heading">Post goods</h4>
            <p class="list-group-item-text">Upload books</p>
        </a>
        <a href="/uadmin/checkout.html" class="list-group-item">
            <h4 class="list-group-item-heading">Check Out</h4>
            <p class="list-group-item-text">Pay page</p>
        </a>
    </div>
</div>
<div class="col-sm-8" style="border-left: 1px dashed #C7C7C7;min-height:750px;">
    <div class="adminprofile" style="min-height: 750px;margin-top: 20px;">
        <form class="form-horizontal" role="form" action="http://localhost/api/upfile" method="post" enctype="multipart/form-data" >
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="booktitle" placeholder="Book title">
                </div>
            </div>
            <div class="form-group">
                <label for="type" class="col-sm-2 control-label">type</label>
                <div class="col-sm-10">
                    <select id="booktype" name="booktype">
                        <option value="1" selected="selected">fiction</option>
                        <option value="2" selected="selected">art</option>
                        <option value="3" selected="selected">culture</option>
                        <option value="4" selected="selected">science</option>
                        <option value="5" selected="selected">technology</option>
                        <option value="comics" selected="selected">comics</option>
                    </select>

                </div>
            </div>
            <div class="form-group">
                <label for="author" class="col-sm-2 control-label">author</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="bookauthor" id="author" placeholder="author">
                </div>
            </div>
            <div class="form-group">
                <label for="price" class="col-sm-2 control-label">price</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="bookprice" id="price" placeholder="book price">
                </div>
            </div>
            <!--
            <div class="form-group">
                <label for="contributor" class="col-sm-2 control-label">contributor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="bookstock" id="contributor" placeholder="stock">
                </div>
            </div>-->
            <div class="form-group">
                <label for="newold" class="col-sm-2 control-label">newold</label>
                <div class="col-sm-10">
                    <input type="radio" name="newold" value="new" checked >  new
                    <input type="radio" name="newold" value="used" >  old
                </div>
            </div>
            <div class="form-group">
                <label for="newold" class="col-sm-2 control-label">image</label>
                <div class="col-sm-10">
                    <input id="uploadedfile" type="file" name="userfile" class="file" />
                    <input type="submit" value="commit"/>
                </div>
            </div>

        </form>





    </div>

</div>


<div class="footer-grid">
    <div class="copy-rt">
        <div class="container">
            <p>Copyright &copy; 2016.Company name All rights reserved.</p><br>

        </div>
    </div>
</div>
</body>
</html>