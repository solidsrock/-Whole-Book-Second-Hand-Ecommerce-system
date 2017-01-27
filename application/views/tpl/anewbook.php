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
            <p class="list-group-item-text">Manager Profile.</p>
        </a>
        <a href="/admin/order.html" class="list-group-item">
            <h4 class="list-group-item-heading">All Order Info</h4>
            <p class="list-group-item-text">Detail</p>
        </a>
        <a href="/admin/newbook.html" class="list-group-item active">
            <h4 class="list-group-item-heading">New Books Info</h4>
            <p class="list-group-item-text">Detail.</p>
        </a>
        <a href="/admin/usedbook.html" class="list-group-item">
            <h4 class="list-group-item-heading">Used Books Info</h4>
            <p class="list-group-item-text">Detail.</p>
        </a>
    </div>
</div>
<div class="col-sm-8" style="border-left: 1px dashed #C7C7C7">
    <div style="min-height: 750px;">
        <h1>newbook list</h1>
        <div style="margin-top: 10px;">
<form method="post" action="http://localhost/admin/newbook.html">
            <label>new book id</label><input type="text" name="searchid" placeholder="please inpu the new book ID">
            <input type="submit" value="search" />
        </form>
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">new book info</div>

                <!-- Table -->
                <table class="table">
                    <thead>
                    <tr>
                        <th>number</th>
                        <th>title</th>
                        <th>price</th>
                        <td>author</td>
                        <th>contributor-id</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    for($cnt=0;$cnt<count($newbooklist);$cnt++) {
                        //echo $newlist[$cnt]['title'];

                        echo "<tr>";
                        echo "<td>".$cnt."</td>";
                        echo "<td>".$newbooklist[$cnt]['title']."</td>";
                        $bookprice = (double)$newbooklist[$cnt]['price']/(double)100;
                        echo "<td>".$bookprice."</td>";
                        echo "<td>".$newbooklist[$cnt]['author']."</td>";
                        echo "<td>".$newbooklist[$cnt]['contributor']."</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
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