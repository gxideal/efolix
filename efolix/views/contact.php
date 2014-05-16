<link rel="Stylesheet" type="text/css" href="<?php echo base_url();?>efolix/assets/css/contact.css" />

<div class="top_pic">
    <iframe width="100%" height="590" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=18+Rue+de+Feulen,+Ettelbruck,+Luxembourg&amp;aq=1&amp;oq=18,+rue+de+feulen&amp;sll=38.410558,-95.712891&amp;sspn=55.354837,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=18+Rue+de+Feulen,+Ettelbruck,+Diekirch,+Luxembourg&amp;t=m&amp;ll=49.853037,6.100674&amp;spn=0.019369,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
</div>
<div class="top_line"></div>

<div class="contact_nav_line"></div>

<div class="cont" style="padding-top:544px;">
	<div class="contact">
    	<div class="h">
        	<div class="left">
            Comme toujours, pour les clients de la France, vous pouvez nous appeler en composant l'un des numéros ci-dessous du bureau de Paris. Nous vous rappelons que notre siège social est situé au Luxembourg.<br />
            <!--Contact Paris&nbsp;&nbsp;&nbsp;&nbsp;Tel: 0638225920&nbsp;&nbsp;&nbsp;&nbsp;Tel: 0658478229-->
            Contact Paris&nbsp;&nbsp;&nbsp;&nbsp;Tel: 0148335892
            </div>
            <div class="right">
            <span class="color_a">eFolix SARL</span><br />
			18, Rue de feulen<br />
			LU-9043 Ettelbruck<br />
			Tel. : +352 26 87 72 47<br />
			E-mail: info@efolix.com
            </div>
        </div>
        <ul id="contact_nav" class="nav">
       		<li id="nav_1" onclick="chang_nav(1)" class="ed">Je veux une démonstration</li>
        	<li id="nav_2" onclick="chang_nav(2)">Je veux plus d'information</li>
        	<li id="nav_3" onclick="chang_nav(3)">J'ai une réclamation</li>
        </ul>
        
        <div class="float_order_box">
			<div class="container">
				<ul class="right">
					<li>
						<div class="label">Message</div>
						<textarea name="" id="summary_info" cols="30" rows="10" class="small_area">
                        </textarea>
					</li>
					<li>
						<button class="red_btn">Envoyer</button>
					</li>
					<li>
						Vos commentaires, vos suggestions et vos questions nous intéressent. Ils peuvent nous aider à améliorer nos produits et nos services.
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
						<input id="company_telephone" type="text" name=""/>
					</li>
				</ul>
				<div style="clear: both;"></div>
			</div>
		</div>
		<div class="download_box">
			<dl>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

				<!-- <dd><a href="#">Download Link</a></dd>
				<dd><a href="#">Download Link</a></dd>
				<dd><a href="#">Download Link</a></dd>
				<dd><a href="#">Download Link</a></dd>
				<dd><a href="#">Download Link</a></dd> -->
			</dl>
		</div>
        
        <div class="email">
        <br />
<br />
<br />
	
        </div>
        
    </div>
</div>



<script language="javascript">
	function chang_nav(id){
			$('#contact_nav li').removeClass('ed');
			$('#nav_'+id).addClass('ed');
			if(id==1){
				$('.float_order_box #summary_info').val("");
				//$('.download_box').hide();
				//$('.float_order_box').show();
			}else if(id==2){
				//$('.float_order_box').hide();
				//$('.download_box').show();				
			}else if(id==3){
				$('.float_order_box #summary_info').val("");
				//$('.download_box').hide();
				//$('.float_order_box').show();
			}
		}
		
	//发送邮件
    $('.float_order_box .red_btn').click(function(){
    	if($(this).attr('disabled') != 'disabled'){
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
				'<?php echo base_url();?>index.php/web/contact_send?rand='+Math.random(),
				{'company':company,'contact':contact,'phone':phone,'msg':msg},
				function(data){
					$('.float_order_box .red_btn').removeAttr('disabled');
					if(data.success == 1){
						alert('Merci pour votre message, nous vous répondrons dès que possible!');
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