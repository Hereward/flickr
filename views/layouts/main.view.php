<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flickr Photo Gallery</title>

    <link href="/assets/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Flickr Search</a>
        </div>
        <div class="navbar-collapse collapse">
            <form action="search" method="get" class="navbar-form navbar-right" role="form">
                <input type="hidden" name='page' id='page' value='1'>
                <div class="form-group">
                    <input type="text" name="keyword" id="keyword" placeholder="Search Term"
                           value="<? if (isset($_GET['keyword'])) { echo $_GET['keyword']; } ?>"
                           class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Search</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</div>



<?php

 $path = __DIR__."/../$this->view.view.php";

//die("VIEW PATH = $path");
 include $path;
?>


<div class="container">



     <hr>
     <footer>&copy; Eye of the Tiger Pty Ltd 2014</footer>
</div>








<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>
