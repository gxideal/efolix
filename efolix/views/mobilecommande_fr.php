<link rel="Stylesheet" type="text/css" href="<?php echo base_url();?>efolix/assets/css/mobilecommande.css" />
<style type="text/css">
    .top_pic .right{ background:url(../../efolix/assets/image/mc_fr/commande2.png) left top no-repeat; }
    .top_pic .right .sumbit{background: url(../../efolix/assets/image/mc_fr/yuding2.jpg); }
.top_pic .right .ok{background: url(../../efolix/assets/image/mc_fr/gongxi2.jpg); }
</style>

<div class="top_pic" style="<?php echo base_url();?>efolix/assets/image/mc/c_bg.jpg">
	<div class="pic_div">
		<div class="left">
    		<img id="focus1" src="<?php echo base_url();?>efolix/assets/image/mc_fr/focus_5.png" />
            <img id="focus2" src="<?php echo base_url();?>efolix/assets/image/mc_fr/focus_6.png" style="display:none;" />
   		</div>
   		<div class="right">
            <input id="email" type="text" class="email" placeholder="example@mail.com">
            <div id="sumbit" class="sumbit" onclick="send_email()"></div>
            <div id="ok" class="ok"></div>
    	</div>
    </div>    
</div>



<div class="cont" style="padding-top:646px;">
	
    
    <div class="ipad">
    	
        <div class="m1">
    		<img src="<?php echo base_url();?>efolix/assets/image/mc_fr/fr_01.jpg" width="940" height="384" />
    	</div>
        
        <div class="m1">
    		<img src="<?php echo base_url();?>efolix/assets/image/mc_fr/fr_02.jpg" width="940" height="314" />
    	</div>

        <div class="m1">
            <img src="<?php echo base_url();?>efolix/assets/image/mc_fr/fr_03.jpg" width="940" height="299" />
        </div>

        <div class="m1">
            <img src="<?php echo base_url();?>efolix/assets/image/mc_fr/fr_04.jpg" width="940" height="397" />
        </div>

        <div class="m1">
            <img src="<?php echo base_url();?>efolix/assets/image/mc_fr/fr_05.jpg" width="940" height="326" />
        </div>

        <div class="m1">
            <img src="<?php echo base_url();?>efolix/assets/image/mc_fr/fr_06.jpg" width="940" height="274" />
        </div>

    </div>
    
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
var ajax_doing = 0;

$(function () {
	setTimeout(change_top_pic,5000);
});

function Judge_Email(el)//用正则表达式判断是否是email格式
{
var regu = "^(([0-9a-zA-Z]+)|([0-9a-zA-Z]+[_.0-9a-zA-Z-]*[0-9a-zA-Z-]+))@([a-zA-Z0-9-]+[.])";
var re = new RegExp(regu);
if(el.search(re) == -1){
    return false; //非法
    }
    return true;//正确
}

function send_email(){
    var v = $('#email').val();
    if (v == ''){
        alert('请留下您的email，方便我们给您试用');
        return false;
    }
    else if ( !Judge_Email(v) ){
        alert('您的email格式有误，请重新输入');
        return false;
    }

    if (ajax_doing == 0){
        ajax_doing = 1;

        var data = Object();
        data.email = v;

        $.ajax({
            url: 'http://api.mc.efolix.com/index.php/user/store_email',
            type: "get",
            dataType : "jsonp",
            jsonp : "mc",
            data: data,
            success: function(d){
                //console.log(d);
                is_ajax = 0;

                if (d.err == 0){
                    $('#sumbit').hide();
                    $('#email').hide();
                    $('#ok').show();
                }
                else{
                    alert("抱歉网络异常，请重试。\r或于我们联系：\rTel: +352 20 333 233\rE-mail: info@efolix.com");
                }
                
            }
        });
    }
    else{
        return false;
    }
}

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
	window.location.href = "mailto:info@efolix.com";
});



</script>