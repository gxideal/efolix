<link rel="Stylesheet" type="text/css" href="<?php echo base_url();?>efolix/assets/css/mobilecommande.css" />
<style type="text/css">
    .top_pic .right{background:url(../../efolix/assets/image/mc_fr/commande2.png) left top no-repeat; }
    .top_pic .right .sumbit{background: url(../../efolix/assets/image/mc_fr/yuding2.jpg); }
    .top_pic .right .sumbit_new{background: url(../../efolix/assets/image/mc_fr/order.png); width: 231px; height:60px; cursor: pointer;}
	.top_pic .right .ok{background: url(../../efolix/assets/image/mc_fr/gongxi2.jpg); }


    /*订单漂浮页面*/
    .float_order_box{
	    background:url(../../efolix/assets/image/bg.png);
	    width: 1000px;
	    position: absolute;
	    top: 150px;
	    left: 50%;
	    margin-left: -500px;
	    z-index: 9999;
	    border: 2px solid #6F777C;
        display: none;
    }
    .float_order_box .title{
	    text-align: center;
	    width: 100%;
	    color: #FFF;
	    font-size: 32px;
	    line-height: 60px;
	    font-family: 'Open Sans Semibold';
	    margin-top: 20px;
	    margin-bottom: 15px;
    }
    .float_order_box .title .btn_close{background:url(../../efolix/assets/image/close.png) left top no-repeat; width: 21px; height:21px; float: right;margin: 20px;margin-left: 0; margin-right:40px;}
    .float_order_box .container{width:962px; margin:auto;overflow: hidden;}
    .float_order_box .container>div{display: inline-block; overflow: hidden; border-top: 1px solid #9A9A9A;float: left;font-family: 'Open Sans Light'; color:#9a9a9a; font-size:14px; line-height:20px;}
    .float_order_box .container>div.left{width:375px; text-align: right;}
    .float_order_box .container>div.left li{margin-bottom: 4px;}
    .float_order_box .container>div.left .label{display: inline-block;}
    .float_order_box .container>div.left input{display: inline-block;margin-left:10px;width:205px;height:34px;background:#44464a; resize: none; border:1px solid #000000; color: white; font-family: 'Open Sans Light'; font-size:16px; line-height: 22px;padding-left: 10px;}
    .float_order_box .container>div.left input.required{border:1px solid #ff352b;}
    .float_order_box .container>div.middle{width:24px; border:none; height:200px;}
    .float_order_box .container>div.right{width:563px;}
    .float_order_box .container>div.right textarea{background:#44464a; resize: none; border:1px solid #000000; color: white; font-family: 'Open Sans Light'; font-size:16px; line-height: 22px; width: 521px; height:283px; padding:15px 20px;}
    .float_order_box .container>div.right textarea.required{border:1px solid #ff352b;}
    .float_order_box .container>div.right .red_btn{background:#ff352b; margin:15px 0; height:45px; line-height:45px; text-align:center; color:#fff; font-size:14px; letter-spacing:0px; border:none; width: 250px;cursor: pointer;}
</style>

<div class="top_pic" style="<?php echo base_url();?>efolix/assets/image/mc/c_bg.jpg">
	<div class="pic_div">
		<div class="left">
    		<img id="focus1" src="<?php echo base_url();?>efolix/assets/image/mc_fr/focus_5.png" />
            <img id="focus2" src="<?php echo base_url();?>efolix/assets/image/mc_fr/focus_6.png" style="display:none;" />
   		</div>
   		<div class="right">
<!--            <input id="email" type="text" class="email" placeholder="example@mail.com">-->
<!--            <div id="sumbit" class="sumbit" onclick="send_email()"></div>-->
            <div id="ok" class="ok"></div>
		    <div id="sumbit" class="sumbit_new" onclick="$('.float_order_box').fadeIn();"></div>
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
<div class="float_order_box">
	<div class="title">
		<div class="btn_close" onclick="$('.float_order_box').fadeOut();"></div>
		Demande Contact
	</div>
	<div class="container">
		<div class="left">
			<ul>
				<li style="height: 35px;line-height: 35px;margin:0;">
					&nbsp;
				</li>
				<li>
					<div class="label">Nom de la société *</div>
					<input id="company_name" required="required" type="text" name=""/>
				</li>
				<li>
					<div class="label">Nom du contact *</div>
					<input id="company_contact" required="required" type="text" name=""/>
				</li>
				<li>
					<div class="label">Email *</div>
					<input id="company_email" required="required" type="text" name=""/>
				</li>
				<li>
					<div class="label">Téléphone *</div>
					<input id="company_phone" required="required" type="text" name=""/>
				</li>
				<li>
					<div class="label">Adresse *</div>
					<input id="company_address" required="required" type="text" name=""/>
				</li>
				<li>
					<div class="label">CP *</div>
					<input id="company_zip" required="required" type="text" name=""/>
				</li>
				<li>
					<div class="label">Ville *</div>
					<input id="company_city" required="required" type="text" name=""/>
				</li>
				<li>
					<div class="label">Pays *</div>
					<input id="company_country" required="required" type="text" name=""/>
				</li>
			</ul>
		</div>
		<div class="middle"></div>
		<div class="right">
			<ul>
				<li style="height: 35px;line-height: 35px;">
					Message*
				</li>
				<li>
					<textarea name="" id="summary_info" required="required" cols="30" rows="10" class="small_area">Bonjour,
Je voudrais créer gratuitement un compte MobileCommande pour évaluation, veuillez me contacter pour l'étape suivante</textarea>
				</li>
				<li>
					<button class="red_btn">Send</button>
				</li>
			</ul>
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

$('.float_order_box .red_btn').click(function(){
	var data = {};
	var check_status = 1;
	$('.float_order_box input').each(function(){
		var the_value = $.trim($(this).val());
		if(!the_value && $(this).attr('required')){
			//参数必需
			var title = $(this).prevAll('.label:first');
			title = title.length ? title.text().replace(' *', '') : this.id;
			alert(title + ' is required!');
			$(this).focus();
			check_status = 0;
			return false;
		}
		var the_key = this.id.replace('company_', '');
		data[the_key] = the_value;
	});

	if(!check_status) return false;

	data['message'] = $.trim($('#summary_info').val());
	if(!data['message']){
		alert('Leave us some message please.');
		$('#summary_info').focus();
		return false;
	}

	if (ajax_doing == 0){
		ajax_doing = 1;
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
					$('.float_order_box').fadeOut();
					$('#ok').fadeIn();
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
	window.location.href = "mailto:info@efolix.com";
});



</script>