<?php 
	include("/ketnoi.php");
	$id = $_GET["id"];
	$result = mysql_query("select * from products where id = ".$id, $connect);
	$row = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<!--[if IE 8 ]>    <html lang="en" class="ie8"> </html><![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> </html><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8" />
<title>Shoppie - Modern Online Store</title>
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1" />
<meta name="description" content="Modern Online Store" />
<meta name="keywords" content="Shoppie, Modern Online Store" />
<meta name="author" content="http://adamantium.sk" />
 
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:1391354276,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=02fcfa4f56/"},atok:"8f2966cdc72a130a80c20b188e22686f",petok:"c2ee79648b40c6b549dd5922f67807b8c48f2079-1391466023-1800",zone:"adamantium.sk",rocket:"0",apps:{"abetterbrowser":{"ie":"8"}}}];var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src="../../../ajax.cloudflare.com/cdn-cgi/nexp/dok3v=221574e73d/cloudflare.min.js";b.parentNode.insertBefore(a,b);}}catch(e){};
//]]>
</script>
<link rel="stylesheet" href="../../../fonts.googleapis.com/css_5b108390.css" type="text/css" />
<link rel="stylesheet" href="./css/unsemantic.css" type="text/css" />
<link rel="stylesheet" href="./css/responsive.css" type="text/css" />
<link rel="stylesheet" href="./css/font-awesome/css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="./js/juicy/css/juicy.css" type="text/css" />
<link rel="stylesheet" href="./js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" />
<link rel="stylesheet" href="./js/juicy/css/themes/shoppie-product/style.css" type="text/css" />
<!--[if IE 7]>
        <link rel="stylesheet" href="./css/font-awesome/css/font-awesome-ie7.min.css" />
        <![endif]-->
<link rel="stylesheet" href="./css/colors.css" type="text/css" />
<link rel="stylesheet" href="./css/base.css" type="text/css" />
<link rel="stylesheet" href="./css/layout.css" type="text/css" />
<link rel="stylesheet" href="./css/pages/product-detail.css" type="text/css" />
 
<link rel="shortcut icon" href="images/ico/favicon.ico" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72.png" />
<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png" />
<script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-29358822-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body class="body-background2 content-font dark-color">
<a id="top"></a>
<header>
 
<nav class="top-menu grid-container hide-on-tablet hide-on-mobile">
<div class="grid-100">
<iframe src="../../../www.facebook.com/plugins/like_bc248b48.php.html" style="width:120px; height:21px;"></iframe>
<div class="top-menu-left">
<ul>
<li>
<a href="./blog.html" class="dark-color">Blog</a>
</li>
<li>
<a href="./about-us.html" class="dark-color">About Us</a>
</li>
<li>
<a href="./my-account.html" class="dark-color">My Account</a>
</li>
</ul>
</div>
<div class="top-menu-right">
<ul>
<li>
<a href="log-in.html" class="dark-color" onclick="Global.clickShowToggle('#quick-login'); return false;">
<i class="icon-off"></i>
Log In
</a>
 
<form action="log-in.html" method="POST" />
<ul class="popup-box quick-login cream-bg" id="quick-login">
<li class="arrow-top"><span class="shadow cream-bg"></span></li>
<li class="close-button">
<a href="#" class="circle-button middle-bg active-bg-hover" onclick="Global.clickShowToggle('#quick-login'); return false;"><span class="cancel"></span></a>
</li>
<li>
<input class="text-input dark-color light-bg" type="text" name="email" placeholder="your email" />
</li>
<li>
<input class="text-input dark-color light-bg" type="password" name="password" placeholder="enter password" />
</li>
<li class="clearfix">
<a href="forgotten.html" class="forgotten-link middle-color float-left">Have you forgotten<br /> your password?</a>
<button class="button-small button-with-icon float-right light-color middle-gradient dark-gradient-hover" type="submit">
Log in
<span><i class="icon-angle-right"></i></span>
</button>
</li>
</ul> 
</form>
</li>
<li>
<a href="./register.html" class="dark-color">Register</a>
</li>
<li id="languages-box-holder">
<a href="#" class="dark-color">
EN <i class="icon-caret-down"></i>
</a>
 
<ul class="languages-box popup-box cream-bg">
<li class="arrow-top"><span class="shadow cream-bg"></span></li>
<li class="focusor-top"></li>
<li>
<a href="#" class="dark-color">
<i class="icon-lang-en"></i>
English
</a>
</li>
<li>
<a href="#" class="dark-color">
<i class="icon-lang-de"></i>
German
</a>
</li>
<li>
<a href="#" class="dark-color">
<i class="icon-lang-fr"></i>
French
</a>
</li>
</ul> 
</li>
</ul>
</div>
</div>
</nav> 
 
<div class="header-middle grid-container light-gradient">
<div class="grid-100">
<a href="./homepage.html" class="header-logo grid-20" title="Shoppie">
<img src="./images/img-shoppie.png" alt="Shoppie" />
</a>
<div class="grid-80 remove-whitespaces">
<div class="header-middle-box">
<form class="input-with-submit header-search" action="#" method="POST" />
<input type="text" class="text-input input-round dark-color light-bg" value="" placeholder="Search..." />
<button type="submit" class="input-round-submit middle-color dark-hover"><i class="icon-search"></i></button>
</form>
</div>
<div class="header-middle-box header-compare remove-whitespaces hide-on-mobile">
<a href="./compare.html" class="dark-color">
<i class="icon-signal middle-color">&nbsp;</i>
Compare (<strong>3</strong>)
</a>
<a href="./wishlist.html" class="dark-color">
<i class="icon-heart middle-color">&nbsp;</i>
Wish list (<strong>7</strong>)
</a>
</div>
<div class="header-middle-box last-box hide-on-mobile hide-on-tablet">
<div class="header-cart" id="header-cart">
<a href="./cart.html" class="text-input input-round dark-color light-bg">
<strong class="active-color">
<i class="icon-shopping-cart">&nbsp;</i>
39
</strong>
items
&nbsp;|&nbsp;
<strong class="active-color">
954,00 &euro;
</strong>
</a>
 
<ul class="popup-box header-quick-cart cream-bg">
<li class="arrow-top"><span class="shadow cream-bg"></span></li>
<li class="focusor-top"></li>
<li class="quick-cart-item light-bg-hover transition-all">
<a href="#" class="quick-cart-remove circle-button middle-bg active-bg-hover"><span class="minus"></span></a>
<a href="#" class="quick-cart-add circle-button middle-bg active-bg-hover"><span class="plus"></span></a>
<a href="./cart.html" class="quick-cart-left dark-color">
<span class="quick-cart-image"><img src="./images/photos/quick-cart-item.jpg" alt="Pablo Coelho Men’s Suit Jacket" /></span>
<span class="quick-cart-name">Pablo Coelho Men’s Suit Jacket</span>
</a>
<a href="./cart.html" class="quick-cart-right dark-color">
3 x
<strong class="active-color">125,90 &euro;</strong>
</a>
</li>
<li class="list-divider"></li>
<li class="quick-cart-item light-bg-hover transition-all">
<a href="#" class="quick-cart-remove circle-button middle-bg active-bg-hover"><span class="minus"></span></a>
<a href="#" class="quick-cart-add circle-button middle-bg active-bg-hover"><span class="plus"></span></a>
<a href="./cart.html" class="quick-cart-left dark-color">
<span class="quick-cart-image"><img src="./images/photos/quick-cart-item.jpg" alt="Pablo Coelho Men’s Suit Jacket" /></span>
<span class="quick-cart-name">Pablo Coelho Men’s Suit Jacket</span>
</a>
<a href="./cart.html" class="quick-cart-right dark-color">
3 x
<strong class="active-color">125,90 &euro;</strong>
</a>
</li>
<li class="list-divider"></li>
<li class="quick-cart-item light-bg-hover transition-all">
<a href="#" class="quick-cart-remove circle-button middle-bg active-bg-hover"><span class="minus"></span></a>
<a href="#" class="quick-cart-add circle-button middle-bg active-bg-hover"><span class="plus"></span></a>
<a href="./cart.html" class="quick-cart-left dark-color">
<span class="quick-cart-image"><img src="./images/photos/quick-cart-item.jpg" alt="Pablo Coelho Men’s Suit Jacket" /></span>
<span class="quick-cart-name">Pablo Coelho Men’s Suit Jacket</span>
</a>
<a href="./cart.html" class="quick-cart-right dark-color">
3 x
<strong class="active-color">125,90 &euro;</strong>
</a>
</li>
<li class="list-divider"></li>
<li class="quick-cart-total">
<span class="quick-cart-left dark-color">Total</span>
<span class="quick-cart-right active-color">954,00 &euro;</span>
</li>
<li class="list-divider"></li>
<li class="quick-cart-buttons">
<a href="./cart.html" class="button-small light-color middle-gradient dark-gradient-hover">
Go to Cart
</a>
<a href="./checkout-step-1.html" class="button-small light-color active-gradient dark-gradient-hover">
Check out
</a>
</li>
</ul> 
</div>
</div>
</div>
</div>
</div> 
 
<nav class="main-menu grid-container" id="main-menu">
<div class="mobile-overlay"></div>
 
<ul class="main-menu-mobile">
<li class="middle-color light-hover">
<a href="#menu-mobile" class="main-menu-item click-slide"><i class="icon-reorder"></i></a>
</li>
<li class="middle-color light-hover">
<a href="./homepage.html" class="main-menu-item"><i class="icon-home"></i></a>
</li>
<li class="main-menu-cart active-color light-hover">
<a href="./cart.html" class="main-menu-item">
<i class="icon-shopping-cart">&nbsp;</i>
39
&nbsp;|&nbsp;
954,00 &euro;
</a>
</li>
<li class="middle-color light-hover">
<a href="#sidebar-mobile" class="main-menu-item click-slide"><i class="icon-ellipsis-vertical"></i></a>
</li>
</ul> 
 
<ul class="main-menu-desktop dark-gradient transition-all" id="menu-mobile">
<li class="middle-color light-hover home">
<a href="./homepage.html" class="main-menu-item transition-all"><i class="icon-home"></i></a>
</li>
<li class="middle-color light-hover back">
<a href="#menu-mobile" class="main-menu-item click-slide"><i class="icon-chevron-left"></i></a>
</li>
<li class="light-color active-hover">
<a href="products-grid.php" class="main-menu-item transition-all">Women</a>
 
<ul class="mega-menu cream-bg full-width">
<li class="mega-menu-active cream-gradient"></li>
<li class="mega-menu-box">
<span class="mega-menu-title active-color clearfix">Categories</span>
<ul class="mega-menu-list">
<li>
<a href="products-grid.php" class="dark-color active-hover">
View All <span class="middle-color">(3125)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover selected">
New Arrivals <span class="middle-color">(547)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Tops <span class="middle-color">(320)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Shirts & Blouses <span class="middle-color">(860)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Jumpers <span class="middle-color">(869)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Trousers <span class="middle-color">(118)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Jeans <span class="middle-color">(131)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Shorts <span class="middle-color">(238)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Dresses <span class="middle-color">(624)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Skirts <span class="middle-color">(329)</span>
</a>
</li>
</ul>
<ul class="mega-menu-list">
<li>
<a href="products-grid.php" class="dark-color active-hover">
Jackets & Coats <span class="middle-color">(197)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Blazers & Waistcoats <span class="middle-color">(328)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Sportswear <span class="middle-color">(741)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Lingerie <span class="middle-color">(228)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Nightwear <span class="middle-color">(328)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Socks & Tights <span class="middle-color">(129)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Accessories <span class="middle-color">(427)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Shoes <span class="middle-color">(15)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Cosmetics <span class="middle-color">(27)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Maternity Wear <span class="middle-color">(168)</span>
</a>
</li>
</ul>
</li>
<li class="mega-menu-box">
<span class="mega-menu-title active-color clearfix">This week</span>
<ul class="mega-menu-list">
<li>
<a href="products-grid.php" class="dark-color active-hover">
Premium Quality products
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Conscious – Sustainable Style
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
New this Spring
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
New Arrivals Divided
</a>
</li>
</ul>
</li>
<li class="mega-menu-box">
<span class="mega-menu-title active-color clearfix">Inspiration</span>
<ul class="mega-menu-list">
<li>
<a href="products-grid.php" class="dark-color active-hover">
Denim Guide
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Holiday Fashion
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Holiday Lingerie
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Ladies' Spring Preview
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Gift Of The Week
</a>
</li>
</ul>
</li>
</ul> 
</li>
<li class="light-color active-hover">
<a href="./products-list.html" class="main-menu-item transition-all">Men</a>
 
<ul class="mega-menu cream-bg full-width">
<li class="mega-menu-active cream-gradient"></li>
<li class="mega-menu-box">
<span class="mega-menu-title active-color clearfix">This week</span>
<ul class="mega-menu-list">
<li>
<a href="products-grid.php" class="dark-color active-hover">
Premium products
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Sustainable Style
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
New this Spring
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
New Arrivals Divided
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Holiday Fashion
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Holiday Lingerie
</a>
</li>
</ul>
<ul class="mega-menu-list">
<li>
<a href="products-grid.php" class="dark-color active-hover">
View All <span class="middle-color">(3125)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover selected">
New Arrivals <span class="middle-color">(547)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Tops <span class="middle-color">(320)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Shirts & Blouses <span class="middle-color">(860)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Ladies' Spring Preview
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Gift Of The Week
</a>
</li>
</ul>
</li>
<li class="mega-menu-box hide-on-mobile">
<a href="products-detail.php" title="Young generation collection 2014" class="mega-menu-banner">
<img class="with-shadow" src="./images/photos/img-menu-teaser1.jpg" alt="Young generation collection 2014" />
<span class="header-font banner-text-blue">
Young generation<br />
collection<br />
<strong>2014</strong>
</span>
</a>
</li>
</ul> 
</li>
<li class="light-color active-hover">
<a href="products-grid.php" class="main-menu-item transition-all">Kids</a>
 
<ul class="mega-menu cream-bg">
<li class="mega-menu-active cream-gradient"></li>
<li class="mega-menu-box">
<span class="mega-menu-title active-color clearfix">Inspiration</span>
<ul class="mega-menu-list">
<li>
<a href="products-grid.php" class="dark-color active-hover">
Denim Guide
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Holiday Fashion
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Holiday Lingerie
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Ladies' Spring Preview
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Gift Of The Week
</a>
</li>
</ul>
</li>
</ul> 
</li>
<li class="light-color active-hover">
<a href="./products-list.html" class="main-menu-item transition-all">Shoes</a>
 
<ul class="mega-menu cream-bg">
<li class="mega-menu-active cream-gradient"></li>
<li class="mega-menu-box">
<span class="mega-menu-title active-color clearfix">Categories</span>
<ul class="mega-menu-list">
<li>
<a href="products-grid.php" class="dark-color active-hover">
View All <span class="middle-color">(3125)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover selected">
New Arrivals <span class="middle-color">(547)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Tops <span class="middle-color">(320)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Shirts & Blouses <span class="middle-color">(860)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Jumpers <span class="middle-color">(869)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Trousers <span class="middle-color">(118)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Jeans <span class="middle-color">(131)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Shorts <span class="middle-color">(238)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Dresses <span class="middle-color">(624)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Skirts <span class="middle-color">(329)</span>
</a>
</li>
</ul>
<ul class="mega-menu-list">
<li>
<a href="products-grid.php" class="dark-color active-hover">
Jackets & Coats <span class="middle-color">(197)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Blazers & Waistcoats <span class="middle-color">(328)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Sportswear <span class="middle-color">(741)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Lingerie <span class="middle-color">(228)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Nightwear <span class="middle-color">(328)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Socks & Tights <span class="middle-color">(129)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Accessories <span class="middle-color">(427)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Shoes <span class="middle-color">(15)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Cosmetics <span class="middle-color">(27)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Maternity Wear <span class="middle-color">(168)</span>
</a>
</li>
</ul>
</li>
<li class="mega-menu-box">
<span class="mega-menu-title active-color clearfix">Inspiration</span>
<ul class="mega-menu-list">
<li>
<a href="products-grid.php" class="dark-color active-hover">
Denim Guide
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Holiday Fashion
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Holiday Lingerie
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Ladies' Spring Preview
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Gift Of The Week
</a>
</li>
</ul>
</li>
</ul> 
</li>
<li class="light-color active-hover">
<a href="products-grid.php" class="main-menu-item transition-all">Sport</a>
 
<ul class="mega-menu cream-bg">
<li class="mega-menu-active cream-gradient"></li>
<li class="mega-menu-box">
<span class="mega-menu-title active-color clearfix">Categories</span>
<ul class="mega-menu-list">
<li>
<a href="products-grid.php" class="dark-color active-hover">
View All <span class="middle-color">(3125)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover selected">
New Arrivals <span class="middle-color">(547)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Tops <span class="middle-color">(320)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Shirts & Blouses <span class="middle-color">(860)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Jumpers <span class="middle-color">(869)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Trousers <span class="middle-color">(118)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Jeans <span class="middle-color">(131)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Shorts <span class="middle-color">(238)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Dresses <span class="middle-color">(624)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Skirts <span class="middle-color">(329)</span>
</a>
</li>
</ul>
<ul class="mega-menu-list">
<li>
<a href="products-grid.php" class="dark-color active-hover">
Jackets & Coats <span class="middle-color">(197)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Blazers & Waistcoats <span class="middle-color">(328)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Sportswear <span class="middle-color">(741)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Lingerie <span class="middle-color">(228)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Nightwear <span class="middle-color">(328)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Socks & Tights <span class="middle-color">(129)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Accessories <span class="middle-color">(427)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Shoes <span class="middle-color">(15)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Cosmetics <span class="middle-color">(27)</span>
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Maternity Wear <span class="middle-color">(168)</span>
</a>
</li>
</ul>
</li>
<li class="mega-menu-box">
<span class="mega-menu-title active-color clearfix">This week</span>
<ul class="mega-menu-list">
<li>
<a href="products-grid.php" class="dark-color active-hover">
Premium Quality products
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Conscious – Sustainable Style
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
New this Spring
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
New Arrivals Divided
</a>
</li>
</ul>
</li>
<li class="mega-menu-box">
<span class="mega-menu-title active-color clearfix">Inspiration</span>
<ul class="mega-menu-list">
<li>
<a href="products-grid.php" class="dark-color active-hover">
Denim Guide
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Holiday Fashion
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Holiday Lingerie
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Ladies' Spring Preview
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Gift Of The Week
</a>
</li>
</ul>
</li>
</ul> 
</li>
<li class="light-color active-hover">
<a href="./products-list.html" class="main-menu-item transition-all">Template pages</a>
 
<ul class="mega-menu cream-bg">
<li class="mega-menu-active cream-gradient"></li>
<li class="mega-menu-box">
<span class="mega-menu-title active-color clearfix">E-shop pages</span>
<ul class="mega-menu-list">
<li>
<a href="./homepage.html" class="dark-color active-hover">
Homepage
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Products grid listing
</a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover">
Products table listing
</a>
</li>
<li>
<a href="products-detail.php" class="dark-color active-hover">
Product detail page
</a>
</li>
<li>
<a href="./compare.html" class="dark-color active-hover">
Compare products
</a>
</li>
<li>
<a href="./wishlist.html" class="dark-color active-hover">
Wishlist page
</a>
</li>
<li>
<a href="./my-account.html" class="dark-color active-hover">
My account
</a>
</li>
</ul>
<ul class="mega-menu-list">
<li>
<a href="./cart.html" class="dark-color active-hover">
Shopping cart
</a>
</li>
<li>
<a href="./checkout-step-1.html" class="dark-color active-hover">
Checkout step 1
</a>
</li>
<li>
<a href="./checkout-step-2.html" class="dark-color active-hover">
Checkout step 2
</a>
</li>
<li>
<a href="./checkout-step-3.html" class="dark-color active-hover">
Checkout step 3
</a>
</li>
<li>
<a href="./checkout-step-4.html" class="dark-color active-hover">
Checkout step 4
</a>
</li>
<li>
<a href="./checkout-step-5.html" class="dark-color active-hover">
Checkout step 5
</a>
</li>
<li>
<a href="./register.html" class="dark-color active-hover">
Registration
</a>
</li>
</ul>
</li>
<li class="mega-menu-box">
<span class="mega-menu-title active-color clearfix">Common pages</span>
<ul class="mega-menu-list">
<li>
<a href="./about-us.html" class="dark-color active-hover">
About us
</a>
</li>
<li>
<a href="./blog.html" class="dark-color active-hover">
Blog listing
</a>
</li>
<li>
<a href="./blog-detail.html" class="dark-color active-hover">
Blog detail
</a>
</li>
<li>
<a href="./contact.html" class="dark-color active-hover">
Contact us
</a>
</li>
</ul>
</li>
</ul> 
</li>
<li class="light-color active-hover">
<a href="products-grid.php" class="main-menu-item transition-all">What’s new</a>
</li>
<li class="active-color dark-hover">
<a href="./products-list.html" class="main-menu-item transition-all"><i class="icon-star"></i> Sale</a>
 
<ul class="mega-menu cream-bg full-width">
<li class="mega-menu-active cream-gradient"></li>
<li class="mega-menu-box">
<span class="mega-menu-title active-color clearfix">Best value</span>
<ul class="mega-menu-list">
<li>
<a href="products-grid.php" class="dark-color active-hover">
Premium Quality products
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Conscious – Sustainable Style
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
New this Spring
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
New Arrivals Divided
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Ladies' Spring Preview
</a>
</li>
<li>
<a href="products-grid.php" class="dark-color active-hover">
Gift Of The Week
</a>
</li>
</ul>
</li>
<li class="mega-menu-box">
<span class="mega-menu-title active-color clearfix">This week</span>
<a href="products-detail.php" title="50% Winter sale" class="mega-menu-banner">
<img class="with-shadow" src="./images/photos/img-menu-teaser2.jpg" alt="50% Winter sale" />
<span class="header-font banner-text-white banner-size-1">
<strong>50%</strong><br />
Winter sale
</span>
</a>
</li>
<li class="mega-menu-box">
<span class="mega-menu-title active-color clearfix">Inspiration</span>
<a href="products-detail.php" title="New 2014 collection Zara Lauren" class="mega-menu-banner">
<img class="with-shadow" src="./images/photos/img-menu-teaser3.jpg" alt="New 2014 collection Zara Lauren" />
<span class="header-font banner-text-white banner-size-2">
<strong>
New 2014<br />
collection
</strong><br />
Zara Lauren
</span>
</a>
</li>
</ul> 
</li>
</ul> 
</nav> 
</header>
<section class="page-content">
 
<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="./homepage.html" class="dark-color active-hover">Home</a>
<a href="products-grid.php" class="dark-color active-hover">Women</a>
<a href="./products-list.html" class="dark-color active-hover">Jackets & Coats</a>
<strong class="active-color"><?php echo $row["name"]; ?></strong>
</div>
</div>  
 
<div class="page-block page-block-bottom cream-bg grid-container">
<div class="sidebar-shadow push-25"></div>
 
<div class="sidebar grid-25 cream-gradient transition-all" id="sidebar-mobile">
 
<div class="sidebar-box sidebar-top cream-gradient">
<nav class="submenu">
<ul class="expandable-menu">
<li class="align-right back">
<a href="#sidebar-mobile" class="dark-color active-hover click-slide"><i class="icon-chevron-right"></i></a>
</li>
<li class="expanded">
<a href="./products-list.html" class="dark-color active-hover selected">Women</a>
<ul>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> New Arrivals <small class="middle-color">(547)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Tops <small class="middle-color">(230)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Shirts & Blouses <small class="middle-color">(860)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Jumpers <small class="middle-color">(869)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Trousers <small class="middle-color">(118)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Jeans <small class="middle-color">(131)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Shorts <small class="middle-color">(238)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Dresses <small class="middle-color">(624)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Skirts <small class="middle-color">(329)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover selected"><b class="middle-color">&rsaquo;</b> Jackets & Coats <small class="middle-color">(197)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Blazers & Waistcoats <small class="middle-color">(328)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Sportswear <small class="middle-color">(741)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Lingerie <small class="middle-color">(228)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Nightwear <small class="middle-color">(168)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Socks & Tights <small class="middle-color">(75)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Accessories <small class="middle-color">(427)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Cosmetics <small class="middle-color">(15)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Maternity Wear <small class="middle-color">(27)</small></a>
</li>
</ul>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="./products-list.html" class="dark-color active-hover">Men</a>
<ul>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> New Arrivals <small class="middle-color">(547)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Jumpers <small class="middle-color">(869)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Trousers <small class="middle-color">(118)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Jeans <small class="middle-color">(131)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Shorts <small class="middle-color">(238)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Jackets & Coats <small class="middle-color">(197)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Sportswear <small class="middle-color">(741)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Socks & Tights <small class="middle-color">(75)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Accessories <small class="middle-color">(427)</small></a>
</li>
</ul>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="./products-list.html" class="dark-color active-hover">Kids</a>
<ul>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Sportswear <small class="middle-color">(741)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Lingerie <small class="middle-color">(228)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Nightwear <small class="middle-color">(168)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Socks & Tights <small class="middle-color">(75)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Accessories <small class="middle-color">(427)</small></a>
</li>
</ul>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="./products-list.html" class="dark-color active-hover">Shoes</a>
<ul>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Sportswear <small class="middle-color">(741)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Lingerie <small class="middle-color">(228)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Nightwear <small class="middle-color">(168)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Socks & Tights <small class="middle-color">(75)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Accessories <small class="middle-color">(427)</small></a>
</li>
</ul>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="./products-list.html" class="dark-color active-hover">Sport</a>
<ul>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Sportswear <small class="middle-color">(741)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Lingerie <small class="middle-color">(228)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Nightwear <small class="middle-color">(168)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Socks & Tights <small class="middle-color">(75)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Accessories <small class="middle-color">(427)</small></a>
</li>
</ul>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="./products-list.html" class="dark-color active-hover">Accessories</a>
<ul>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Sportswear <small class="middle-color">(741)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Lingerie <small class="middle-color">(228)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Nightwear <small class="middle-color">(168)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Socks & Tights <small class="middle-color">(75)</small></a>
</li>
<li>
<a href="./products-list.html" class="dark-color active-hover"><b class="middle-color">&rsaquo;</b> Accessories <small class="middle-color">(427)</small></a>
</li>
</ul>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="./products-list.html" class="dark-color active-hover">What’s new</a>
</li>
<li class="sidebar-divider"></li>
<li>
<a href="./products-list.html" class="dark-color active-hover">Sale</a>
</li>
</ul>
</nav>
</div> 
 
<div class="sidebar-box cream-gradient">
<h2 class="header-font active-color">You have visited</h2>
<ul class="sidebar-list">
<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="./products-list.html" class="sidebar-product dark-color active-hover">
<span>
Pablo Coelho jacket
<strong class="active-color">125,90 €</strong>
</span>
<img src="./images/photos/visited-item-1.jpg" alt="Pablo Coelho jacket" />
</a>
<ul class="product-popup popup-right popup-box light-bg">
<li class="arrow"><span class="shadow light-bg"></span></li>
<li class="focusor"></li>
<li class="ribbon-small ribbon-green">
<div class="ribbon-inner">
<span class="ribbon-text">Top rated</span>
<span class="ribbon-aligner"></span>
</div>
</li>
<li class="clearfix">
<div class="product-popup-top">
<a href="products-detail.php">
<img src="./images/photos/img-product1.jpg" alt="Buy Pablo Coelho Jacket" />
</a>
</div>
<div class="product-popup-divider"></div>
<div class="product-popup-bottom">
<ul>
<li class="subheader-font dark-color active-hover">
<a href="products-detail.php"><strong>Pablo Coelho jacket</strong></a>
</li>
<li class="product-popup-subtitle middle-color">Men’s Suit Jacket</li>
<li class="product-popup-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</li>
 
<li class="product-popup-price active-color"><strong>125,00 €</strong></li>
</ul>
</div>
</li>
</ul>
</li>
<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="./products-list.html" class="sidebar-product dark-color active-hover">
<span>
Pablo Coelho jacket
<strong class="active-color">125,90 €</strong>
</span>
<img src="./images/photos/visited-item-2.jpg" alt="Pablo Coelho jacket" />
</a>
<ul class="product-popup popup-right popup-box light-bg">
<li class="arrow"><span class="shadow light-bg"></span></li>
<li class="focusor"></li>
<li class="ribbon-small ribbon-yellow">
<div class="ribbon-inner">
<span class="ribbon-text">Favourite</span>
<span class="ribbon-aligner"></span>
</div>
</li>
<li class="clearfix">
<div class="product-popup-top">
<a href="products-detail.php">
<img src="./images/photos/img-product2.jpg" alt="Buy Pablo Coelho Jacket" />
</a>
</div>
<div class="product-popup-divider"></div>
<div class="product-popup-bottom">
<ul>
<li class="subheader-font dark-color active-hover">
<a href="products-detail.php"><strong>Pablo Coelho jacket</strong></a>
</li>
<li class="product-popup-subtitle middle-color">Men’s Suit Jacket</li>
<li class="product-popup-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</li>
 
<li class="product-popup-price active-color"><strong>125,00 €</strong></li>
</ul>
</div>
</li>
</ul>
</li>
<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="./products-list.html" class="sidebar-product dark-color active-hover">
<span>
Pablo Coelho jacket
<strong class="active-color">125,90 €</strong>
</span>
<img src="./images/photos/visited-item-3.jpg" alt="Pablo Coelho jacket" />
</a>
<ul class="product-popup popup-right popup-box light-bg">
<li class="arrow"><span class="shadow light-bg"></span></li>
<li class="focusor"></li>
<li class="ribbon-small ribbon-blue">
<div class="ribbon-inner">
<span class="ribbon-text">New</span>
<span class="ribbon-aligner"></span>
</div>
</li>
<li class="clearfix">
<div class="product-popup-top">
<a href="products-detail.php">
<img src="./images/photos/img-product3.jpg" alt="Buy Pablo Coelho Jacket" />
</a>
</div>
<div class="product-popup-divider"></div>
<div class="product-popup-bottom">
<ul>
<li class="subheader-font dark-color active-hover">
<a href="products-detail.php"><strong>Pablo Coelho jacket</strong></a>
</li>
<li class="product-popup-subtitle middle-color">Men’s Suit Jacket</li>
<li class="product-popup-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</li>
 
<li class="product-popup-price active-color"><strong>125,00 €</strong></li>
</ul>
</div>
</li>
</ul>
</li>
</ul>
</div> 
 
<div class="sidebar-box cream-gradient">
<h2 class="header-font active-color">The other bought</h2>
<ul class="sidebar-list">
<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="./products-list.html" class="sidebar-product dark-color active-hover">
<span>
10 min. ago
<small class="middle-color">bought by Martina Praha 10</small>
</span>
<img src="./images/photos/visited-item-1.jpg" alt="Pablo Coelho jacket" />
</a>
<ul class="product-popup popup-right popup-box light-bg">
<li class="arrow"><span class="shadow light-bg"></span></li>
<li class="focusor"></li>
<li class="ribbon-small ribbon-blue">
<div class="ribbon-inner">
<span class="ribbon-text">10% Off</span>
<span class="ribbon-aligner"></span>
</div>
</li>
<li class="clearfix">
<div class="product-popup-top">
<a href="products-detail.php">
<img src="./images/photos/img-product1.jpg" alt="Buy Pablo Coelho Jacket" />
</a>
</div>
<div class="product-popup-divider"></div>
<div class="product-popup-bottom">
<ul>
<li class="subheader-font dark-color active-hover">
<a href="products-detail.php"><strong>Pablo Coelho jacket</strong></a>
</li>
<li class="product-popup-subtitle middle-color">Men’s Suit Jacket</li>
<li class="product-popup-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</li>
 
<li class="product-popup-price active-color"><strong>125,00 €</strong></li>
</ul>
</div>
</li>
</ul>
</li>
<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="./products-list.html" class="sidebar-product dark-color active-hover">
<span>
58 min. ago
<small class="middle-color">bought by Jana Bratislava</small>
</span>
<img src="./images/photos/visited-item-2.jpg" alt="Pablo Coelho jacket" />
</a>
<ul class="product-popup popup-right popup-box light-bg">
<li class="arrow"><span class="shadow light-bg"></span></li>
<li class="focusor"></li>
<li class="ribbon-small ribbon-green">
<div class="ribbon-inner">
<span class="ribbon-text">Top</span>
<span class="ribbon-aligner"></span>
</div>
</li>
<li class="clearfix">
<div class="product-popup-top">
<a href="products-detail.php">
<img src="./images/photos/img-product2.jpg" alt="Buy Pablo Coelho Jacket" />
</a>
</div>
<div class="product-popup-divider"></div>
<div class="product-popup-bottom">
<ul>
<li class="subheader-font dark-color active-hover">
<a href="products-detail.php"><strong>Pablo Coelho jacket</strong></a>
</li>
<li class="product-popup-subtitle middle-color">Men’s Suit Jacket</li>
<li class="product-popup-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</li>
 
<li class="product-popup-price active-color"><strong>125,00 €</strong></li>
</ul>
</div>
</li>
</ul>
</li>
<li class="sidebar-divider"></li>
<li class="popup-outside-trigger">
<a href="./products-list.html" class="sidebar-product dark-color active-hover">
<span>
1 hour ago
<small class="middle-color">bought by Jarmila Praha 14</small>
</span>
<img src="./images/photos/visited-item-3.jpg" alt="Pablo Coelho jacket" />
</a>
<ul class="product-popup popup-right popup-box light-bg">
<li class="arrow"><span class="shadow light-bg"></span></li>
<li class="focusor"></li>
<li class="ribbon-small ribbon-red">
<div class="ribbon-inner">
<span class="ribbon-text">Favourite</span>
<span class="ribbon-aligner"></span>
</div>
</li>
<li class="clearfix">
<div class="product-popup-top">
<a href="products-detail.php">
<img src="./images/photos/img-product3.jpg" alt="Buy Pablo Coelho Jacket" />
</a>
</div>
<div class="product-popup-divider"></div>
<div class="product-popup-bottom">
<ul>
<li class="subheader-font dark-color active-hover">
<a href="products-detail.php"><strong>Pablo Coelho jacket</strong></a>
</li>
<li class="product-popup-subtitle middle-color">Men’s Suit Jacket</li>
<li class="product-popup-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</li>
 
<li class="product-popup-price active-color"><strong>125,00 €</strong></li>
</ul>
</div>
</li>
</ul>
</li>
</ul>
</div> 
 
<div class="sidebar-box sidebar-bottom cream-gradient">
<h2 class="header-font active-color">Newsletters signup</h2>
<form method="POST" action="homepage.html" />
<ul class="sidebar-list">
<li class="sidebar-divider"></li>
<li>
Lorem Ipsum is simply dummy text of the printing and typesetting
</li>
<li>
<input type="text" name="email" class="text-input input-no-margin dark-color light-bg" placeholder="Enter your email..." />
</li>
<li class="align-center">
<button type="submit" class="button-small light-color middle-gradient dark-gradient-hover">Subscribe</button>
</li>
</ul>
</form>
</div> 
</div> 
 
<div class="content-with-sidebar grid-75">
<div class="product-detail-shadow">
 
<div class="product-detail cream-gradient grid-container">
<div class="ribbon-small ribbon-green">
<div class="ribbon-inner">
<span class="ribbon-text"><?php echo $row["saleoff"];?>% off</span>
<span class="ribbon-aligner"></span>
</div>
</div>
 
<div class="product-images grid-40 tablet-grid-40 juicy-wrapper">
<ul id="product-gallery" class="juicy-slider middle-border">
<li>
<a href="./images/photos/product-detail-1-big.jpg" class="fancybox" target="_blank">
<img class="juicy-bg" src="<?php echo $row["image"]; ?>" data-thumb="images/photos/product-detail-1-thumb.jpg" alt="" />
</a>
</li>
</ul>
<div class="juicy-slider-nav juicy-thumbs middle-border dark-border-hover active-border-selected" data-type="thumbs"></div>
</div> 
 
<div class="product-info grid-55 tablet-grid-55">
<h1 class="header-font dark-color"><?php echo $row["name"]; ?></h1>
<div class="clearfix">
<div class="product-stars grid-50 tablet-grid-50 voting-stars stars-big">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</div>
<div class="product-social grid-50 tablet-grid-50 hide-on-mobile">
<a href="https://www.facebook.com/adamantium.solutions" class="dark-hover facebook-color transition-color" target="_blank">
<i class="icon-facebook-sign"></i>
</a>
<a href="https://twitter.com/AdamantiumSol" class="dark-hover twitter-color transition-color" target="_blank">
<i class="icon-twitter"></i>
</a>
<a href="http://pinterest.com/" class="dark-hover pinterest-color transition-color" target="_blank">
<i class="icon-pinterest-sign"></i>
</a>
<a href="https://plus.google.com/u/0/113332714808714572645/posts" class="dark-hover google-color transition-color" target="_blank">
<i class="icon-google-plus-sign"></i>
</a>
</div>
</div>
<p class="product-perex">
<?php echo $row["short_description"]; ?></p>
<div class="product-meta-price clearfix">
<div class="product-meta middle-color grid-55">
<table>
<tr>
<td>Category:</td>
<td><?php echo $row["category"]; ?></td>
</tr>
<tr>
<td>Product code:</td>
<td><?php echo $row["id"]; ?></td>
</tr>
<tr>
<td>Avaibility:</td>
<td class="active-color"><?php if ($row["avaibility"] == 1) echo "Còn hàng"; else echo "Hết hàng"; ; ?></td>
</tr>
</table>
</div>
<div class="product-price active-color grid-45">
<del class="middle-color"><?php echo $row["price"]; ?> €</del>
<strong><?php 
$price = $row["price"];
$saleoff = $row["saleoff"];
echo $price - ($price * $saleoff / 100);
 ?> €</strong>
</div>
</div>
 
<form action="cart.html" method="POST" />
<div class="product-options clearfix">
<label for="product-size" class="dark-color hide-on-mobile">Size</label>
<div class="custom-selectbox dark-color light-gradient active-hover">
<select name="product-size" id="product-size">
<option value="XS" />XS
<option value="S" />S
<option value="M" />M
<option value="L" />L
<option value="XL" selected="selected" />XL
<option value="XXL" />XXL
</select>
</div>
<label for="product-color" class="dark-color hide-on-mobile">Color</label>
<div class="product-color custom-selectbox dark-color light-gradient active-hover">
<select name="product-color" id="product-color">
<option value="Brown" />Brown
<option value="Blue" />Blue
<option value="Green" />Green
<option value="Yellow" />Yellow
<option value="Magenta" selected="selected" />Magenta
<option value="Cyan" />Cyan
<option value="Black" />Black
<option value="White" />White
<option value="Red" />Red
</select>
</div>
</div>
<script>
	document.getElementById("product-color").value = '<?php echo $row["color"]; ?>';
	document.getElementById("product-size").value = '<?php echo $row["size"]; ?>';
</script>
<div class="product-options clearfix">
<label for="product-quantity" class="hide-on-mobile">Quantity</label>
<input type="text" id="product-quantity" name="product-quantity" class="product-quantity text-input dark-color light-bg" value="1" onclick="$(this).select()" />
<div class="button-dual light-color transition-all">
<button type="submit" class="button-dual-left middle-gradient dark-gradient-hover">
Add to cart <i class="icon-shopping-cart"></i>
</button>
<a class="button-dual-right middle-gradient dark-gradient-hover">
<i class="icon-angle-down"></i>
</a>
<ul class="button-dual-submenu">
<li>
<a href="./wishlist.html" class="light-color middle-bg dark-bg-hover transition-color">
Add to favorites
<i class="icon-heart"></i>
</a>
</li>
<li>
<a href="./compare.html" class="dual-submenu-last light-color middle-bg dark-bg-hover transition-color">
Add to compare
<i class="icon-signal"></i>
</a>
</li>
</ul>
</div>
</div>
</form> 
</div> 
</div> 
 
<div class="product-detail-tabs grid-100 light-bg">
 
<div class="page-tabs shoppie-tabs">
<h2 class="header-font">
<a class="middle-color active-hover light-bg transition-color" href="#tab-description">
<span class="hide-on-mobile">Description</span>
<i class="icon-align-left hide-on-desktop hide-on-tablet"></i>
</a>
</h2>
<h2 class="header-font">
<a class="middle-color active-hover light-bg transition-color" href="#tab-reviews">
<span class="hide-on-mobile">Reviews</span>
<i class="icon-comments hide-on-desktop hide-on-tablet"></i>
</a>
</h2>
<h2 class="header-font">
<a class="middle-color active-hover light-bg transition-color" href="#tab-related">
<span class="hide-on-mobile">Related products</span>
<i class="icon-link hide-on-desktop hide-on-tablet"></i>
</a>
</h2>
</div>  
<div class="page-tabs-holder">
 
<div class="page-tab grid-100" id="tab-description"><p>
<?php echo $row["description"]; ?></p>
</div> 
 
<div class="page-tab grid-100" id="tab-reviews">
<div class="product-review-details clearfix">
<div class="grid-33 tablet-grid-33 mobile-grid-100 product-review-score">
<strong class="product-review-percent active-color">83%</strong>
<div class="voting-stars stars-huge">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</div>
<span class="middle-color">
Based on <strong class="dark-color">1125</strong> reviews
</span>
</div>
<div class="grid-33 tablet-grid-33 mobile-grid-100 product-review-stats">
<dl>
<dt class="voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i>
</dt>
<dd class="middle-color">
<strong class="active-color">1028</strong>
customers
</dd>
<dt class="voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i>
</dt>
<dd class="middle-color">
<strong class="active-color">28</strong>
customers
</dd>
<dt class="voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</dt>
<dd class="middle-color">
<strong class="active-color">17</strong>
customers
</dd>
<dt class="voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</dt>
<dd class="middle-color">
<strong class="active-color">39</strong>
customers
</dd>
<dt class="voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</dt>
<dd class="middle-color">
<strong class="active-color">12</strong>
customers
</dd>
</dl>
</div>
<div class="grid-33 tablet-grid-33 mobile-grid-100 product-review-count">
<table>
<tr>
<td>
<strong class="active-color">158</strong>
</td>
<td>of customers recommends</td>
</tr>
<tr>
<td>
<strong class="active-color">2756</strong>
</td>
<td>customers already purchased</td>
</tr>
</table>
<a class="button-small light-color middle-gradient dark-gradient-hover" href="#">
Write a review
</a>
</div>
</div>
<hr class="margin-bottom" />
<div class="grid-100 product-review">
<div class="product-review-author middle-color">
<strong class="dark-color">Bryan</strong>
| <small>22.12.2012</small> |
<span class="voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</span>
</div>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<ul class="product-review-list">
<li class="active-color">
<i class="icon-plus-sign"></i>
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
</li>
<li class="active-color">
<i class="icon-plus-sign"></i>
It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged it has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
</li>
<li class="middle-color">
<i class="icon-minus-sign"></i>
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
</li>
<li class="middle-color">
<i class="icon-minus-sign"></i>
It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
</li>
</ul>
<div class="pager align-right light-gradient middle-color middle-border active-hover active-border-hover">
<a class="pager-page" href="#"><i class="icon-double-angle-left"></i></a>
<a class="pager-page" href="#"><i class="icon-angle-left"></i></a>
<a class="pager-page" href="#">1</a>
<a class="pager-page selected" href="#">2</a>
<a class="pager-page" href="#">3</a>
<a class="pager-page hide-on-mobile" href="#">4</a>
....
<a class="pager-page" href="#">29</a>
<a class="pager-page" href="#"><i class="icon-angle-right"></i></a>
<a class="pager-page" href="#"><i class="icon-double-angle-right"></i></a>
</div>
</div>
</div> 
 
<div class="page-tab grid-100 clearfix" id="tab-related">
 
<div class="grid-25 tablet-grid-25">
<div class="product-box light-bg transition-all">
<div class="ribbon-small ribbon-green">
<div class="ribbon-inner">
<span class="ribbon-text">19% Off</span>
<span class="ribbon-aligner"></span>
</div>
</div>
<a class="product-img" href="products-detail.php">
<span><img src="./images/photos/img-product1.jpg" alt="Pablo Coelho jacket" /></span>
</a>
<div class="product-info light-bg middle-border">
<h3 class="product-title subheader-font">
<a href="products-detail.php" class="dark-color active-hover">
<strong>Pablo Coelho jacket</strong>
</a>
</h3>
<a href="products-grid.php" class="product-category middle-color dark-hover">Women’s Suit Jacket</a>
<div class="product-bottom">
<div class="product-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</div>
<div class="product-price active-color">
<del class="light-gradient middle-border dark-color">186,90 €</del>
<strong class="middle-border">125,90 €</strong>
</div>
</div>
</div>
</div>
</div> 
 
<div class="grid-25 tablet-grid-25">
<div class="product-box light-bg transition-all">
<a class="product-img" href="products-detail.php">
<span><img src="./images/photos/img-product2.jpg" alt="Tommy Mancini" /></span>
</a>
<div class="product-info light-bg middle-border">
<h3 class="product-title subheader-font">
<a href="products-detail.php" class="dark-color active-hover">
<strong>Tommy Mancini</strong>
</a>
</h3>
<a href="products-grid.php" class="product-category middle-color dark-hover">Women’s Suit Jacket</a>
<div class="product-bottom">
<div class="product-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i>
</div>
<div class="product-price active-color">
<del class="light-gradient middle-border dark-color">98,50 €</del>
<strong class="middle-border">85,40 €</strong>
</div>
</div>
</div>
</div>
</div> 
 
<div class="grid-25 tablet-grid-25">
<div class="product-box light-bg transition-all">
<a class="product-img" href="products-detail.php">
<span><img src="./images/photos/img-product1.jpg" alt="Pablo Coelho jacket" /></span>
</a>
<div class="product-info light-bg middle-border">
<h3 class="product-title subheader-font">
<a href="products-detail.php" class="dark-color active-hover">
<strong>Pablo Coelho</strong>
</a>
</h3>
<a href="products-grid.php" class="product-category middle-color dark-hover">Women’s Suit Jacket</a>
<div class="product-bottom">
<div class="product-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
</div>
<div class="product-price active-color">
<del class="light-gradient middle-border dark-color">150,80 €</del>
<strong class="middle-border">133,90 €</strong>
</div>
</div>
</div>
</div>
</div> 
 
<div class="grid-25 tablet-grid-25">
<div class="product-box light-bg transition-all">
<a class="product-img" href="products-detail.php">
<span><img src="./images/photos/img-product3.jpg" alt="Zara Lauren shirt" /></span>
</a>
<div class="product-info light-bg middle-border">
<h3 class="product-title subheader-font">
<a href="products-detail.php" class="dark-color active-hover">
<strong>Zara Lauren</strong>
</a>
</h3>
<a href="products-grid.php" class="product-category middle-color dark-hover">Women’s shirt</a>
<div class="product-bottom">
<div class="product-stars voting-stars stars-small">
<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i>
</div>
<div class="product-price active-color">
<del class="light-gradient middle-border dark-color">18,20 €</del>
<strong class="middle-border">5,90 €</strong>
</div>
</div>
</div>
</div>
</div> 
</div> 
</div>
</div> 
</div>
</div> 
</div>  
</section>
<footer>
 
<div class="footer-top grid-container clearfix">
<div class="grid-50 grid-parent">
<div class="grid-33 tablet-grid-33">
<h3 class="light-color subheader-font">
<strong>Our support</strong>
</h3>
<ul class="middle-color">
<li class="light-hover">
<a href="#">Delivery Information</a>
</li>
<li class="light-hover">
<a href="#">Privacy policy</a>
</li>
<li class="light-hover">
<a href="#">Terms & Condition</a>
</li>
<li class="light-hover">
<a href="#">Contact us</a>
</li>
</ul>
</div>
<div class="grid-33 tablet-grid-33">
<h3 class="light-color subheader-font">
<strong>Our service</strong>
</h3>
<ul class="middle-color">
<li class="light-hover">
<a href="./my-account.html">My Account</a>
</li>
<li class="light-hover">
<a href="#">Order History</a>
</li>
<li class="light-hover">
<a href="#">Returns</a>
</li>
<li class="light-hover">
<a href="#">Site map</a>
</li>
</ul>
</div>
<div class="grid-33 tablet-grid-33">
<h3 class="light-color subheader-font">
<strong>Information</strong>
</h3>
<ul class="middle-color">
<li class="light-hover">
<a href="./about-us.html">About us</a>
</li>
<li class="light-hover">
<a href="#">Delivery information</a>
</li>
<li class="light-hover">
<a href="#">Privacy policy</a>
</li>
<li class="light-hover">
<a href="#">Terms & Condition</a>
</li>
</ul>
</div>
</div>
<div class="grid-50 grid-parent">
<div class="grid-50 tablet-grid-50">
<h3 class="light-color subheader-font">
<strong>Payment</strong>
</h3>
<p class="middle-color">
Lorem ipsum dolor sit amet, de consectetur adipiscing elit
</p>
<a href="#"><img src="./images/icons/icon-visa-e.png" alt="Visa Electron" /></a>
<a href="#"><img src="./images/icons/icon-mastercard.png" alt="MasterCard" /></a>
<a href="#"><img src="./images/icons/icon-paypal.png" alt="PayPal" /></a>
<a href="#"><img src="./images/icons/icon-visa.png" alt="Visa" /></a>
</div>
<div class="grid-50 tablet-grid-50">
<h3 class="light-color">
<strong>Newsletter</strong>
</h3>
<p class="middle-color">
Lorem ipsum dolor sit amet, de consectetur adipiscing elit
</p>
<form method="POST" action="homepage.html" />
<div class="input-with-button">
<input type="text" placeholder="Enter your email..." name="email" class="text-input dark-color light-bg" />
<button type="submit" class="middle-color dark-hover"><i class="icon-plus"></i></button>
</div>
</form>
</div>
</div>
</div> 
 
<div class="footer-bottom grid-container clearfix">
<div class="footer-copyright middle-color grid-70">
Copyright 2012 Shoppie. Designed by Viktor Karvai. Code by <a href="http://www.adamantium.sk" class="light-hover">Adamantum Solutions</a>. All Rights Reserved
</div>
<div class="footer-social grid-30">
<a href="https://www.facebook.com/adamantium.solutions" class="middle-color light-hover transition-color" target="_blank">
<i class="icon-facebook-sign"></i>
</a>
<a href="https://twitter.com/AdamantiumSol" class="middle-color light-hover transition-color" target="_blank">
<i class="icon-twitter"></i>
</a>
<a href="http://www.linkedin.com/pub/michal-juras/28/166/375" class="middle-color light-hover transition-color" target="_blank">
<i class="icon-linkedin-sign"></i>
</a>
<a href="http://pinterest.com/" class="middle-color light-hover transition-color" target="_blank">
<i class="icon-pinterest-sign"></i>
</a>
<a href="https://plus.google.com/u/0/113332714808714572645/posts" class="middle-color light-hover transition-color" target="_blank">
<i class="icon-google-plus-sign"></i>
</a>
</div>
</div> 
</footer>
 
<!--[if lt IE 9]>
       <script src="../../../html5shim.googlecode.com/svn/trunk/html5.js"></script>
       <![endif]-->
 
<script type="text/javascript" src="./js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./js/css3-mediaqueries.js"></script>
<script type="text/javascript" src="./js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="./js/juicy/js/jquery.juicy.js"></script>
<script type="text/javascript" src="./js/shoppie.scripts.js"></script>
<script type="text/javascript">
            Global.documentReady(); 
            Product.documentReady(); 
       </script>
</body>
</html>