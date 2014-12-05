<?php
@$idu=$_COOKIE['idu'];
@$acceso=$_COOKIE['acceso'];
if ($idu=="" or $acceso=="")
{
    $msg="";
    Print"<meta http-equiv='refresh' content='0;
url=index.php?msg=$msg'>";
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>
<?php
if ($idu == 2)
{
    require ("menu2.php");
}
else
{
    require ("menu.php");
}
include_once("BaseDatos/config.php");
include_once("BaseDatos/mysql.php");
$base = new DB_mysql();
?>
<div class="container marketing">
    <div class="row">
        <div class="col-lg-12">