<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $username . "'s new book selling"; ?></title>
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

<?php
//var_dump($newlist);
?>
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
        <a href="/uadmin/index.html" class="list-group-item">
            <h4 class="list-group-item-heading">Home</h4>
            <p class="list-group-item-text">User Profile.</p>
        </a>
        <a href="/uadmin/usedsel.html" class="list-group-item">
            <h4 class="list-group-item-heading">Selled Used Books</h4>
            <p class="list-group-item-text">Used Books Info.</p>
        </a>
        <a href="/uadmin/newsel.html" class="list-group-item active">
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
<div class="col-sm-8" style="border-left: 1px dashed #C7C7C7;min-height:750px;">
    <div style="margin-top: 10px;">

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">selled new books</div>

            <!-- Table -->
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>tytle</th>
                    <th>tyoe</th>
                    <th>price</th>
                    <td>author</td>
                    <th>contributor-id</th>
                </tr>
                </thead>
                <tbody>

                <?php
                    for($cnt=0;$cnt<count($newlist);$cnt++) {
                        //echo $newlist[$cnt]['title'];

                        echo "<tr>";
                        echo "<td>".$cnt."</td>";
                        echo "<td>".$newlist[$cnt]['title']."</td>";
                        echo "<td>";
                        switch($newlist[$cnt]['type']) {
                            case '1': echo 'fiction';break;
                            case '2': echo 'art';break;
                            case '3': echo 'culture';break;
                            case '4': echo 'science';break;
                            case '5': echo 'technology';break;
                            case '6': echo 'comics';break;
                        }
                        echo "</td>";
                        echo "<td>";
                        echo (double)$newlist[$cnt]['price']/100;
                        echo "</td>";
                        echo "<td>".$newlist[$cnt]['author']."</td>";
                        echo "<td>".$newlist[$cnt]['contributor']."</td>";
                        echo "</tr>";
                    }
                ?>


                </tbody>
            </table>
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