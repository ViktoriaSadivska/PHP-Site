<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Main page</title>
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/template/css/bootstrap.css" rel="stylesheet">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/price-range.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet">
        <link href="/template/css/main.css" rel="stylesheet">
        <link href="/template/css/responsive.css" rel="stylesheet">
        <link href="/template/css/my.css" rel="stylesheet">     
        <link rel="shortcut icon" href="/template/images/home/logo.jpg">
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-phone"></i> +38 012345678 </a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> example@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav nav-pills">
                                    <li><a href="#"><i class="fa fa-facebook gb"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus gb"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle " ><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="/"><img id="logo" src="/template/images/home/logo.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <nav class="navbar navbar-expand-lg navbar-dark gb">
                                    <div class="container-fluid gb">
                                        <a class="navbar-brand gb" href="/cart"><i class="fa fa-shopping-cart gb"></i> Cart <span><?= Cart::countItems() ?></span></a>
                                        <?php if(User::isGuest()): ?>                                     
                                        <a class="navbar-brand gb" href="/user/login"><i class="fa fa-lock gb"></i> Log in </a>
                                        <a class="navbar-brand gb" href="/user/register"><i class="fa fa-lock gb"></i> Register </a>
                                        <?php else: ?>
                                        <a class="navbar-brand gb" href="/cabinet"><i class="fa fa-user gb"></i> Account </a>
                                        <a class="navbar-brand gb" href="/user/logout" ><i class="fa fa-lock gb"></i> Log out </a>
                                        <?php endif ?>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom "><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav">
                                    <li><a href="/">Main page</a></li>
                                    <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="/catalog">Catalog</a></li>
                                            <li><a href="/cart">Cart</a></li> 
                                        </ul>
                                    </li> 
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/contacts">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
            
        </header><!--/header-->