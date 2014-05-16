<link rel="Stylesheet" type="text/css" href="<?php echo base_url();?>efolix/assets/css/order_now.css" />

<div class="cont">
	<div class="order_now">
   		<ul class="left">
    		<li class="h1">
            	<span class="cart_icon"></span><?=$this->lang->line('order_title');?>
            </li>
            <li>
            	<div class="h2">
                	<span class="num_icon">1</span><?=$this->lang->line('order_step_1');?>
                </div>
                <ul class="cont" id="ipad_choosen_ul">
                	<li id="no_ipad_needed"><input type="radio" name="radio_ipad" checked="checked" value='0' title="<?=$this->lang->line('order_nodevice');?>" /><?=$this->lang->line('order_nodevice');?></li>
                    <li>
                    	<dl>
                    		<?php 
                    		foreach($device_arr as $k=>$v):if($k==0)continue;?>
                    		<dd>
                    			<div class="img_ipad<?=$k;?>"></div>
                    			<input type="radio" name="radio_ipad" title="<?=$v;?>" value="<?=$k;?>" /><?=$v;?>
                    		</dd>
                    		<?php endforeach;?>
                    	</dl>
                    </li>
                </ul>
            </li>
            <li>
            	<div class="h2">
                	<span class="num_icon">2</span><?=$this->lang->line('order_step_2');?>
                </div>
                <div class="cont">
                	<span id="soft_num_span" class="soft_num soft_num_1"></span>
                    <span class="soft_num_icon soft_num_minus"></span>
                    <span class="soft_num_icon soft_num_middle_hover" title="Click To Comfirm"></span>
                    <span class="soft_num_icon soft_num_middle" title="Click To Comfirm"></span>
                    <span class="soft_num_icon soft_num_middle" title="Click To Comfirm"></span>
                    <span class="soft_num_icon soft_num_middle" title="Click To Comfirm"></span>
                    <span class="soft_num_icon soft_num_middle" title="Click To Comfirm"></span>
                    <span class="soft_num_icon soft_num_middle" title="Click To Comfirm"></span>
                    <span class="soft_num_icon soft_num_middle" title="Click To Comfirm"></span>
                    <span class="soft_num_icon soft_num_middle" title="Click To Comfirm"></span>
                    <span class="soft_num_icon soft_num_middle" title="Click To Comfirm"></span>
                    <span class="soft_num_icon soft_num_add"></span>
                </div>
                <input type="hidden" id="device_num" value="1"/>
            </li>
            <li class="clear_border">
            	<div class="h2">
                	<span class="num_icon">3</span><?=$this->lang->line('order_step_3');?>
                </div>
                <ul id="lang_select_ul" class="cont">
                	<?php
                	foreach($lang_arr as $k=>$v):?>
                	<li><input type="radio" name="radio_lang" value="<?=$k;?>" title="<?=$v;?>" <?php echo $k==0?'checked="checked"':'';?>/><?=$v;?></li>
                	<?php endforeach;?>
                </ul>
            </li>
    	</ul>
        
        <div class="right">
        	<div class="mask"></div>
    		<div class="h"><?=$this->lang->line('order_summary');?></div>
            <div class="cont">
            	<div class="h">eManager Commande</div>
                <ul id="choosen_result_ul">
                	<li class="device"><span t_val="1"><?=$this->lang->line('order_nodevice');?></span></li>
                	<li class="num"><span t_val="1">1  <?=$this->lang->line('order_license');?></span></li>
                	<li class="lang"><span t_val="0">Français</span></li>
                </ul>
            </div>
            <div class="prize">
            	Total<br>
                <span id="price_num" class="p">€ <?php echo $prices['base'];?></span>
                <div class="red_button">Contacter vendeur</div>
                <div class="day"><?=$this->lang->line('order_dayicon');?><div class="day_icon"></div></div>
                <div class="day"><?=$this->lang->line('order_euicon');?><div class="eu_icon"></div></div>
            </div>            
    	</div>    	
    </div>
</div>

<div class="float_order_box">
	<div class="container">
		<div id="float_order_box_title" class="h">
			<div class="close_icon"></div>
			Demande contact
		</div>
		<ul class="right">
			<li>
				<div class="label">Message *</div>
				<textarea name="" id="summary_info" cols="30" rows="10" class="small_area">				
				</textarea>
			</li>
			<li>
				<button class="red_btn">Envoyer</button>
			</li>
		</ul>
		
		<ul class="left">
			<li>
				<div class="label">Nom de la société *</div>
				<input id="company_name" type="text" name=""/>
			</li>
			<li>
				<div class="label">Nom du contact *</div>
				<input id="company_contact" type="text" name=""/>
			</li>
			<li>
				<div class="label">Téléphone *</div>
				<input id="company_telephone" type="text" name="" />
			</li>
		</ul>		
	</div>
</div>

<script>
	//ipad_num_select
    $('.soft_num_middle,.soft_num_middle_hover').mouseenter(function () {
        $(this).prevAll('.soft_num_middle,.soft_num_middle_hover').addClass('soft_num_middle_hover');
        $(this).addClass('soft_num_middle_hover');
        $(this).nextAll('.soft_num_middle,.soft_num_middle_hover').removeClass('soft_num_middle_hover');
        $('#soft_num_span.soft_num').removeClass().addClass('soft_num').addClass('soft_num_' + ($(this).prevAll('.soft_num_middle,.soft_num_middle_hover').length+1));
        $('#choosen_result_ul li.num span').html(($(this).prevAll('.soft_num_middle,.soft_num_middle_hover').length+1)+" vendeurs / licenses")
        	.attr('t_val',$(this).prevAll('.soft_num_middle,.soft_num_middle_hover').length+1);
        $('#choosen_result_ul li.num').show();
        change_price();
    }).click(function(){
    	$('.soft_num_middle,.soft_num_middle_hover').unbind('mouseenter');
    });
    
    $('.soft_num_minus').click(function(){
    	if($('.soft_num_middle_hover').length>1){
    		var num = $('#choosen_result_ul li.num span').attr('t_val') - 1;
    		change_license_num(num);
    	}
    });
    
    $('.soft_num_add').click(function(){
    	if($('.soft_num_middle_hover').length<9){
    		var num = $('#choosen_result_ul li.num span').attr('t_val') - 0 + 1;
    		change_license_num(num);
    	}
    });
    
    function change_license_num(num){
    	$('#soft_num_span.soft_num').removeClass().addClass('soft_num').addClass('soft_num_' + num);
		//$('.soft_num_middle_hover:last').next().addClass("soft_num_middle_hover");
		$('.soft_num_middle').removeClass('soft_num_middle_hover');
		$('.soft_num_middle').each(function(index){
			if(index + 1<num){
				$(this).addClass('soft_num_middle_hover');
			}
		});
		$('#choosen_result_ul li.num span').html(num +" <?=$this->lang->line('order_license');?>").attr('t_val',num);
    	$('#choosen_result_ul li.num').show();
    	change_price();
    }
    
    //修改价格显示
    function change_price(){
    	$('#price_num').html('Loading...');
    	var device = $('#ipad_choosen_ul input:checked').val();
	    var num = $('#choosen_result_ul li.num span').attr('t_val');
    	$.post(
    		'<?php echo base_url();?>index.php/web/order?op=get_price&rand='+Math.random(),
    		{'device':device,'num':num},
    		function(data){
    			if(data.success == 1){
    				$('#price_num').html(data.price);
    			}else{
    				$('#price_num').html('Network Error,<br />Refresh This Page!');
    			}
    		},
    		'json'
    	)
    }
    
    //ipad_type_select
    $('.order_now .left #ipad_choosen_ul dd , #no_ipad_needed').click(function(){
    	$('.order_now .left #ipad_choosen_ul dd').each(function(){
    		$('div',this).removeClass().addClass("img_ipad"+$('input',this).val());
    		$('input',this).removeAttr('checked');
    	});
    	$('div',this).removeClass().addClass("img_ipad"+$('input',this).val()+'_hover');
    	$('input',this).attr('checked','checked');
    	
    	$('#choosen_result_ul li.device span').html($('input',this).attr('title')).attr('t_val',$('input',this).val());
        $('#choosen_result_ul li.device').show();
        change_price();
    });
    
    //lang_select_ul
    $('#lang_select_ul li').click(function(){
    	$('#lang_select_ul li').each(function(){
    		$('input',this).removeAttr('checked');
    	});
    	$('input',this).attr('checked','checked');
    	$('#choosen_result_ul li.lang span').html($('input',this).attr('title')).attr('t_val',$('input',this).val());
        $('#choosen_result_ul li.lang').show();
    });
    
    //
    $('.red_button').click(function(){
    	if($('#choosen_result_ul li.device span').html()!='' && $('#choosen_result_ul li.num span').attr('t_val') != undefined){
	    	var device = $('#ipad_choosen_ul input:checked').val();
	    	var num = $('#choosen_result_ul li.num span').attr('t_val');
	    	var lang = $('#choosen_result_ul li.lang span').attr('t_val');
	    	$.post(
				'<?php echo base_url();?>index.php/web/makemail?rand='+Math.random(),
				{'device':device,'num':num,'lang':lang},
				function(data){
					if(data.success == 1){
						$('.float_order_box textarea#summary_info').html(data.msg);
						return false;
					}else{
						alert(data.msg);
						return false;
					}
				},
				'json'
			);
	    	
	    	$('.float_order_box').animate({top:"0px"},function(){
	    		window.scrollTo(0,0);return false;
	    	});
    	}else{
    		alert("Pick all option needed, Please.");
    		return false;
    	}
    });
    
    $('.float_order_box .close_icon').click(function(){
    	$('.float_order_box').animate({top:"-450px"});
    });
    
    //发送邮件
    $('.float_order_box .red_btn').click(function(){
    	if($(this).attr('disabled') != 'disabled'){
	    	var device = $('#ipad_choosen_ul input:checked').val();
	    	var num = $('#choosen_result_ul li.num span').attr('t_val');
	    	var lang = $('#choosen_result_ul li.lang span').attr('t_val');
	    	var company = $('#company_name').val();
	    	var contact = $('#company_contact').val();
	    	var phone = $('#company_telephone').val();
	    	var msg = $('#summary_info').val();
	    	
	    	if(company == '' || contact == '' || phone == '' || msg == ''){
	    		alert("Désolé, veuillez remplir les informations nécessaires!");
	    		return false;
	    	}
	    	
	    	$(this).attr('disabled','disabled');
			$.post(
				'<?php echo base_url();?>index.php/web/send?rand='+Math.random(),
				{'device':device,'num':num,'lang':lang,'company':company,'contact':contact,'phone':phone,'msg':msg},
				function(data){
					$('.float_order_box .red_btn').removeAttr('disabled');
					if(data.success == 1){
						alert('Merci pour votre commande, nous vous contacterons ultérieurement!');
						return false;
					}else{
						alert(data.msg);
						return false;
					}
				},
				'json'
			)
		}else{
			return false;
		}
    });
</script>