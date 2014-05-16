<link rel="Stylesheet" type="text/css" href="<?php echo base_url();?>efolix/assets/css/ipad.css" />

<div class="top_pic">
	<div class="pic_div">
		<div class="left">
    		<img id="focus1" src="<?php echo base_url();?>efolix/assets/image/focus1.png" />
            <img id="focus2" src="<?php echo base_url();?>efolix/assets/image/focus2.png" style="display:none;" />
   		</div>
   		<div class="right">
1. licences de l'iPad pour passer les commandes et les imprimer<br />
2. un logiciel PC (eManager Commande) pour gérer les commandes et <br/ >&nbsp;&nbsp;&nbsp;&nbsp;créer les rapports.<br />
3.deux heures de formation offerte (suffisant pour tout connaître)<br />    
    	</div>
    </div>    
</div>

<div class="order_line"></div>

<div class="cont" style="padding-top:544px;">
	
	<div class="h">
    	<img src="<?php echo base_url();?>efolix/assets/image/fr/ipad_title.png" width="347" height="31">
    </div>
    
    <div class="ipad_div_bg">
    </div>
    <div class="ipad">
    	
        <div class="m1">
    		<img src="<?php echo base_url();?>efolix/assets/image/ipad_img_1.jpg" width="958" height="412" />
            <div class="cont">
            	
            </div>
    	</div>
        
        <div class="p58">
        	<img style="float:left;" src="<?php echo base_url();?>efolix/assets/image/ipad1.png" width="360" height="284"/>
            <div class="text" style="float:right;">
            	<span class="title">Prise commande rapide</span><br />
				<span>eManager Commande  vous permet de prendre la <br />
				commande du client dans le magasin sur iPad.</span>
            </div>
        </div>
        
        <div class="p58">
        	<div class="text" style="float:left;">
            	<span class="title">Stock au bout du doigt</span><br />
				<span>Application iPad vous permet de connaitre le stock de la <br/ >marchandise pendant la prise de la commmande. Après la <br/ >validation de la commande, le stock sera réduit automatiquement.
            </span>
            </div>
        	<img src="<?php echo base_url();?>efolix/assets/image/ipad2.png" width="360" height="284"/>
        </div>
        
        <div class="m1">
    		<img src="<?php echo base_url();?>efolix/assets/image/ipad_img_2.jpg" width="958" height="412" />
            <div class="cont">
            	
            </div>
    	</div>
        
        <div class="p58">
        	<img style="float:left;" src="<?php echo base_url();?>efolix/assets/image/ipad3.png" width="360" height="284"/>
            <div class="text" style="float:right;">
            	<span class="title">Gestion prix du client</span><br />
				<span>eManager Commande vous permet de gérer le prix de<br />
				la marchandise client par client.</span>
            </div>
        </div>
        
        <div class="p58">
        	<div class="text" style="float:left;">
            	<span class="title">Rapport en un click</span><br />
				<span>eManager Commande peut créer des rapports, cela vous aide de <br/ >connaitre mieux votre business, afin de planifier votre prochain plan.
            </span>
            </div>
        	<img src="<?php echo base_url();?>efolix/assets/image/ipad4.png"  width="360" height="284"/>
        </div>
        
    </div>
	
    <div style="cursor:pointer;" class="order_now">VOIR TARIF !</div>
    
    <div class="f">
    	<div class="left">
        	<a href="javascript:;" id="order_small_btn"><span class="cart"></span>
            Voir tarif</a>
        </div>
        <div class="center">
        	<span class="font_semibold">Démonstration au magasin par simple demande</span><br />
            30 jours pour changer d'avis<br />
            Conseiller support clients
        </div>
        <div class="right">
        	<span class="font_semibold">Contact eFolix</span><br />
            Tel: +352 20 333 233<br />
            E-mail: info@efolix.com
        </div>
    </div>
    
</div>
<script>
var top_pic = 'focus1';
$(function () {
	setTimeout(change_top_pic,5000);
});

function change_top_pic(){
	if (top_pic == 'focus1'){
		$('#focus1').fadeOut(700,function(){
			$('#focus2').fadeIn(700);
			});
		
		top_pic = 'focus2';
		}
	else{
		$('#focus2').fadeOut(700,function(){
			$('#focus1').fadeIn(700);
			});
		
		top_pic = 'focus1';
		}
	setTimeout(change_top_pic,5000);	
	}

$('.order_now,#order_small_btn').click(function(){
	window.location.href = "<?php echo base_url();?>index.php/web/order?rand="+Math.random();
});
</script>