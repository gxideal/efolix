<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>eFolix</title>
<script type="text/javascript" src="<?php echo base_url();?>efolix/assets/js/jquery-1.7.1.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-12349288-15', 'efolix.com');
  ga('send', 'pageview');

</script>
<link rel="Stylesheet" type="text/css" href="<?php echo base_url();?>efolix/assets/css/m.css" />
<style>
.til{display:none; top:102px; width:960px; height:108px; padding-top:30px; position:absolute; font-family:'Open Sans Light'; font-size:12px; z-index:9999; margin:auto; background:#2c3033;}
.til .nav1{ margin:auto; width:645px; height:108px;}
.til .nav1 ul{ margin:auto;}
.til .nav1 li{ display:inline-block; margin-left:40px; color:#fff;}
.til .nav1 .a{ border-bottom:4px solid #ff352b;}
.til .nav1 li a{ color:#fff; text-decoration:none; cursor:pointer;}
/*.til .nav1 li:hover{ border-bottom:4px solid #ff352b;}*/
.detail{ width:80px; height:80px; text-align: center;}
.detail .pic{width:80px; height:55px; margin:auto;}
.detail:hover{ border-bottom:4px solid #ff352b;}
.nohover{width:80px; height:80px; text-align: center;}
.nohover .pic{width:80px; height:55px;  display:inline-block; margin:auto; }
.til .pic #a1{width:35px; height:55px; margin-left:20px; background:url(<?php echo base_url();?>efolix/assets/image/m.png);background-position:-2px -586px;}
.til .pic #b1{width:80px; height:55px; background:url(<?php echo base_url();?>efolix/assets/image/m.png);background-position:-49px -587px;}
.til .pic #c1{width:80px; height:55px; background:url(<?php echo base_url();?>efolix/assets/image/m.png);background-position:-285px -582px;}
.til .pic #d1{width:80px; height:55px; background:url(<?php echo base_url();?>efolix/assets/image/m.png);background-position:-117px -583px;}
.til .pic #e1{width:80px; height:55px; background:url(<?php echo base_url();?>efolix/assets/image/m.png);background-position:-199px -581px;}
.til .pic #a2{width:35px; height:55px; margin-left:20px; background:url(<?php echo base_url();?>efolix/assets/image/m.png);background-position:-2px -652px;}
.til .pic #b2{width:80px; height:55px; background:url(<?php echo base_url();?>efolix/assets/image/m.png);background-position:-49px -653px;}
.til .pic #c2{width:80px; height:55px; background:url(<?php echo base_url();?>efolix/assets/image/m.png);background-position:-285px -649px;}
.til .pic #d2{width:80px; height:55px; background:url(<?php echo base_url();?>efolix/assets/image/m.png);background-position:-117px -648px;}
.til .pic #e2{width:80px; height:55px; background:url(<?php echo base_url();?>efolix/assets/image/m.png);background-position:-199px -649px;}
.til .text{color:#ff352b; font-size: 12px;}
.showpro{ display:inline-block; font-size:12px; color:#fff;}
</style>
</head>

<body>

<div class="header">
    <img class="logo" src="<?php echo base_url();?>efolix/assets/image/fr/logo.gif" width="208" height="102">
    <div class="nav">
        <ul>
            <li><div class="word <?php echo isset($page)&&$page=='index'?'a':'';?>"><a href="<?php echo base_url();?>index.php/web/?r=<?php echo rand();?>">ACCUEIL</a></div></li>
            <li><div class="word <?php echo isset($page)&&$page=='aboutus'?'a':'';?>"><a href="<?php echo base_url();?>index.php/web/aboutus?r=<?php echo rand();?>">SOCIÉTÉ</a></div></li>
            <li id="product" class="showpro"><div class="word <?php echo isset($page)&&($page=='product'||$page=='mobilecommande')?'a':'';?>"><a href="<?php echo base_url();?>index.php/web/mobilecommande_fr">PRODUITS</a></div></li>
            <li><div class="word <?php echo isset($page)&&$page=='contact'?'a':'';?>"><a href="<?php echo base_url();?>index.php/web/contact?r=<?php echo rand();?>">CONTACTEZ-NOUS</a></div></li>
        </ul>
    </div> 
    <div id="nav_2" class="til">
        <ul class="nav1">
            <li>
                <div class="detail" >
                    <a href="<?php echo base_url();?>index.php/web/mobilecommande_fr">
                    <div class="pic">
                        <div id="<?php echo isset($page)&&$page=='mobilecommande'?'d2':'d1';?>">
                        </div>
                    </div>
                    <div class="<?php echo isset($page)&&$page=='mobilecommande'?'text':'';?>">MC</div>
                    </a>
                </div>
            </li>
            <li>
                <div class="detail">
                    <a target="_blank" href="http://www.modestand.com/?from=efolix">
                        <div class="pic">
                            <div id="a1">
                            </div>
                        </div>
                        ModeStand</a>
                </div>
            </li>
            <li>
                <div class="detail">
                    <a href="<?php echo base_url();?>index.php/web/product">
                        <div class="pic">
                            <div id="<?php echo isset($page)&&$page=='product'?'b2':'b1';?>">
                            </div>
                        </div>
                        <div class="<?php echo isset($page)&&$page=='product'?'text':'';?>">Commande</div></a>
                </div>
            </li>
             <li>
                <div class="detail">
                    <a target="_blank" href="http://www.luxbuy.com/?from=efolix">
                        <div class="pic">
                            <div id="c1">
                            </div>
                        </div>
                        LUXBUY</a>
                </div>
            </li>
            
            <li>
                <div class="nohover" style="filter:alpha(opacity=10); -moz-opacity:0.1; -khtml-opacity: 0.1; opacity: 0.1;">
                    <div class="pic">
                        <div id="e1">
                        </div>
                    </div>
                    SME
                </div>
            </li>
           
        </ul>
    </div>
</div>

<script>
var ishide = true;
$('#product').hover(
    function(){
        ishide = false;
        $('.til').fadeIn(500);
    },
    function(){
        ishide = true;
        clearTimeout(nav_2);
        nav_2 = setTimeout(tilHide,1000);
    }
);

$('#nav_2').hover(
    function(){
        ishide = false;
        $('.til').fadeIn(500);
    },
    function(){
        ishide = true;
        clearTimeout(nav_2);
        nav_2 = setTimeout(tilHide,1000);
    }
);

function tilHide(){
    if (ishide){
        $('.til').fadeOut(500);
    }
}

</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-12349288-16', 'eFolix.com');
  ga('send', 'pageview');
</script>