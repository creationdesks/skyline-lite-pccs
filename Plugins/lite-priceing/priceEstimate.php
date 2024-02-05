<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <link rel="stylesheet" type="text/css" href="/lite/lite-priceing/Sage_files/store.css">
                <link rel="stylesheet" type="text/css" href="/lite/lite-priceing/Sage_files/storePrint.css" media="print">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                    <!--[if IE ]>
                    <link rel="stylesheet" type="text/css" href="/css/storeIE.css" />
            <![endif]-->
                    <!--[if lt IE 7]> <html class="ltIE9 ltIE8 ltIE7"> <![endif]-->
                    <!--[if IE 7]>    <html class="ltIE9 ltIE8"> <![endif]-->
                    <!--[if IE 8]>    <html class="ltIE9"> <![endif]-->
                    
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>                  
                     <script type="text/javascript" src="/lite/lite-priceing/Sage_files/stickyfloat.js"></script>                
                     <script>
                         $EmailSent = 0;
                          $(document).ready(function() {
								 $(".textbox").keydown(function (e) {
                                    // Allow: backspace, delete, tab, escape, enter and .
                                    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                                         // Allow: Ctrl+A
                                        (e.keyCode == 65 && e.ctrlKey === true) || 
                                         // Allow: home, end, left, right, down, up
                                        (e.keyCode >= 35 && e.keyCode <= 40)) {
                                             // let it happen, don't do anything
                                             return;
                                    }
                                    // Ensure that it is a number and stop the keypress
                                    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                                        e.preventDefault();
                                    }
                                });
        
                                $('#priceTableBoxes .ob_grey_button').click(function(e){                                    
                                    $('.ob_normal ').removeClass('selected');
                                    $(this).parent('div').parent('div').parent('div').addClass('selected'); 
                                    updatePrice();
                                })
                                
                                 $('#social-module').click(function(e){                                    
                                    if(!$('#webdesign-module').hasClass('ob_selected')){
                                        $('#msg-social-media').text('Web Design and Social Media are a bundle – you must select both…..');
                                        $('#msg-social-media').css('color','#189fe3');   
                                        $('#webdesign-module').trigger('click');                                    
                                        updatePrice();
                                    }                               
                                })
                  
                                
                                
                                $('.inner .ob_sml_grey_button').click(function(e){                                                                       
                                    if( $(this).hasClass('ob_selected')){
                                         $(this).removeClass('ob_selected'); 
                                         $rel=$(this).attr('rel');
                                            if($rel=='webdesign-module'){
                                                $('#msg-social-media').text("Don't forget to add Social Media to your website……");
                                                $('#msg-social-media').css('color','#41a940');     
                                                $('#social-module').removeClass('ob_selected');   
                                            }
                                    }else{
                                        $(this).addClass('ob_selected'); 
                                    }                                    
                                    updatePrice();
                                })
                                
                                
                                $('#users').change(function(){                                    
                                    $('#users-price').text($(this).val());
                                     $('.inner .ob_selected' ).each(function( index ) {
                                            $rel=$(this).attr('rel');
                                            //for  Group
                                            if($rel=='Group'){
                                                 updatePrice();
                                            }
                                     })
                                })
                                
                                
								$('#diary').change(function(){                                    
                                    $('#diary-price').text($(this).val());
                                     $('.inner .ob_selected' ).each(function( index ) {
                                            $rel=$(this).attr('rel');
                                            //for engineer set up
                                            if($rel=='diarySetup'){
                                                 updatePrice();
                                            }
                                     })
                                })
								
								$('#booking-no-id').change(function(){                                    
                                    $('#booking-staff-input-price').text(parseInt($(this).val())*8);
                                     $('.inner .ob_selected' ).each(function( index ) {
                                            $rel=$(this).attr('rel');
                                            //for booking staff
                                            if($rel=='booking-staff'){
                                                 updatePrice();
                                            }
                                     })
                                })
								
								                          
                                $('#remote-engineer-input').change(function(){                                    
                                    $('#remote-engineer-input-price').text(parseInt($(this).val())*10);
                                      $('.inner .ob_selected' ).each(function( index ) {
                                            $rel=$(this).attr('rel');                                            
                                            if($rel=='remote-eng'){
                                                 updatePrice();
                                            }
                                     })
                                })
                                
                                
                                 $('#smart-mapping-input').change(function(){                                    
                                    $('#smart-mapping-input-price').text(parseInt($(this).val())*10);
                                    $('.inner .ob_selected' ).each(function( index ) {
                                            $rel=$(this).attr('rel');                                            
                                            if($rel=='smart-mapping'){
                                                 updatePrice();
                                            }
                                     })
                                })
                                
								$('#booking-tracking-module-input').change(function(){                                    
                                    $('#booking-tracking-module-input-price').text(parseInt($(this).val())*25);
                                    $('.inner .ob_selected' ).each(function( index ) {
                                            $rel=$(this).attr('rel');                                            
                                            if($rel=='client-module'){
                                                 updatePrice();
                                            }
                                     })
                                })
								
                                 $('#AgentDiscountCode').blur(function(){                                    
                                     updatePrice();
                                  })
                                  
                                 clearStuff(); 
                                 $('#About-You,#Address').hide()
								 
								
                          })
                          
                         function clearStuff(){
                                $('#text-1').text('No Support');
                                $('#text-2').text('Under 5 Users');
                                 $('#text-3').text();
                                 $('#text-4').text();
								 $('#text-9').text();
								 $('#POAspan').empty();
                                 $('#price-p-1,#price-p-2,#price-p-3,#price-p-4,#price-p-5,#price-p-6,#price-p-7,#price-p-8,#price-p-9,#price-p-15,#price-p-16,#price-p-17,#price-p-18').text('0.00');
                         } 
                         function updatePrice(){
                              $('.ob_ajax_loader').show();
                              clearStuff();                              
                              $len =$('.selected').length;
                              if($len==0){
                                  $pakage=50;
                                  $('.lite').addClass('selected'); 
                              }
                              else{
                                $pakage= parseInt($('.selected').attr('rel'));  
                              }
                              
                              if($pakage==50){
                                  $('#text-1').text('No Support');
                                  $('#price-p-1').text($pakage.toFixed(2));
                              }
                              if($pakage==75){
                                  $('#text-1').text('Smart Support')                                 
                                  $('#price-p-1').text($pakage.toFixed(2));
                                   
                              }
                              if($pakage==100){
                                  $('#text-1').text('Pro Support')
                                   $('#price-p-1').text($pakage.toFixed(2));
                              }
                              
                              $('.inner .ob_selected' ).each(function( index ) {
                                    $rel=$(this).attr('rel');
                                    //for  Group                                   
                                    if($rel=='Group'){
                                        $('#text-2').text($('#users option:selected').text())
                                        $val=parseInt($('#users-price').text())                                        
                                        $('#price-p-2').text($val.toFixed(2))
                                    }
                                    
                                    if($rel=='booking-staff'){
                                        $('#text-15').text(' x '+$('#booking-no-id').val());
                                        $val=parseInt(parseInt($('#booking-no-id').val())*8)                                        
                                        $('#price-p-15').text($val.toFixed(2))
                                    }
									if($rel=='training-module'){                                        
                                        $val=parseInt($('#training-module-price').text())                                        
                                        $('#price-p-18').text($val.toFixed(2))
                                    }
                                     if($rel=='remote-eng'){
                                        $('#text-3').text(' x '+$('#remote-engineer-input').val());
                                        $val=parseInt(parseInt($('#remote-engineer-input').val())*10)                                        
                                        $('#price-p-3').text($val.toFixed(2))
                                    }
                                    
                                    if($rel=='smart-mapping'){
                                        $('#text-4').text(' x '+$('#smart-mapping-input').val());
                                        $val=parseInt(parseInt($('#smart-mapping-input').val())*10)                                        
                                        $('#price-p-4').text($val.toFixed(2))
                                    }
                                    								
                                    if($rel=='texting-module'){                                        
                                        $val=parseInt($('#texting-module-price').text())                                        
                                        $('#price-p-5').text($val.toFixed(2))
                                    }
                                    if($rel=='diarySetup'){
                                        $('#text-5').text($('#diary option:selected').text())      
                                        $val=parseInt($('#diary-price').text())                                        
                                        $('#price-p-6').text($val.toFixed(2))
                                    }
									
									if($rel=='stock-module'){                                        
                                        $val=parseInt($('#stock-module-price').text())                                        
                                        $('#price-p-7').text($val.toFixed(2))
                                    }
                                    
                                     if($rel=='iframe-module'){                                        
                                        $val=parseInt($('#iframe-module-price').text())                                        
                                        $('#price-p-8').text($val.toFixed(2))
                                    }
                                    
                                     if($rel=='client-module'){                                        
                                        $('#text-9').text(' x '+$('#booking-tracking-module-input') .val());
										$val=parseInt(parseInt($('#booking-tracking-module-input').val())*25)                                        
                                        $('#price-p-9').text($val.toFixed(2))
                                    }
                                    
                                    if($rel=='social-module'){                                        
                                        $val=parseInt($('#social-module-price').text())                                        
                                        $('#price-p-17').text($val.toFixed(2))       
                                    }
                                    
                                    if($rel=='webdesign-module'){                                        
                                        //$val=parseInt($('#website-module-price').text())                                        
										$val=0                                        
                                        $('#price-p-16').text($val.toFixed(2))
										$('#POAspan').text('(POA)')                                        
										
                                    }
                               });
                              calculateTotals();    
                              $('.ob_ajax_loader').fadeOut( "slow" ); 
                         }
                         function calculateTotals(){
                                $total=0;                                
                                $val=parseInt($('#price-p-1').text())                                        
                                $total=$total+$val
                                
                                $val=parseInt($('#price-p-2').text())                                        
                                $total=$total+$val
                                
                                $val=parseInt($('#price-p-3').text())                                        
                                $total=$total+$val
                                
                                $val=parseInt($('#price-p-4').text())                                        
                                $total=$total+$val
                                
                                $val=parseInt($('#price-p-5').text())                                        
                                $total=$total+$val
                                
								$val=parseInt($('#price-p-6').text())                                        
                                $total=$total+$val
								
                                $val=parseInt($('#price-p-7').text())                                        
                                $total=$total+$val
                                
                                $val=parseInt($('#price-p-8').text())                                        
                                $total=$total+$val
                                
                                $val=parseInt($('#price-p-9').text())                                        
                                $total=$total+$val
                                
                                $val=parseInt($('#price-p-15').text())                                        
                                $total=$total+$val
                                
                                $val=parseInt($('#price-p-16').text())                                        
                                $total=$total+$val
                                
                                $val=parseInt($('#price-p-17').text())                                        
                                $total=$total+$val
                                
								$val=parseInt($('#price-p-18').text())                                        
                                $total=$total+$val
                                
                                //check discount coupn
                                discountCost = 0;
                                var NoiseAgentDiscountCode = "noise2015";
                                var UserEnter=$('#AgentDiscountCode').val();
                                if(NoiseAgentDiscountCode == UserEnter.toLowerCase()){  
                                    var discountCost = 25;
                                }   
                                //end                               
                                $('#price-discount').text(discountCost.toFixed(2))
                                $total=$total-discountCost
                                $vat=$total*0.2
                                $finalTotal=$total+$vat;
                                $('#price-ex-vat').text($total.toFixed(2))                             
                                $('#price-vat').text('+ '+$vat.toFixed(2))
                                $('#price-summary-vat').text($finalTotal.toFixed(2))
                                
                         }
                         
                         
                         function MainVisiableScreen(){
                            $(parent.document).find('iframe').attr('height','2350');  
                             $('#mainContent').fadeIn(2000)
                             $('#About-You,#Address').hide()
                             
                         }
                         
                          function AboutVisiableScreen(){
                             $len =$('.selected').length;
                              if($len==0){
                                 alert('Please select the package');
                                 return false;
                              }
                             $(parent.document).find('iframe').attr('height','700');  
                             $('#mainContent,#Address').hide()
                             $('#About-You').fadeIn(2000)
                             
                         }
                         
                          function AddressVisiableScreen(){
                             $ret=0
                             $('#firstName, #lastName, #compayName, #emaiID, #LaneLine').blur(function(){
                                 AddressVisiableScreen();
                             });
                             $('#firstName, #lastName, #compayName, #emaiID, #LaneLine').removeClass('required');                             
                             $('#firstName, #lastName, #compayName, #emaiID, #LaneLine').each(function(){
                                 if($(this).val()==''){
                                     $(this).addClass('required');    
                                     $ret=1;
                                 }
                             })
                             if($ret==1){
                                $('.required').first().focus(); 
                                return false;
                             }
							$(parent.document).find('iframe').attr('height','800');  
                             $('#mainContent,#About-You ').hide()
                             $('#Address').fadeIn(2000)
                            
                         }
    	                      
                         function processMail(){
                            if($EmailSent > 0) {
                                 return false;
                            }
                                
                            $len =$('.selected').length;
                              if($len==0){
                                 alert('Please select the package');
                                 return false;
                              }
                             $ret=0
                             /*
                             $('#address1, #city, #postcode').blur(function(){
                                 processMail();
                             });
                             */
                             $('#address1, #city, #postcode,#emaiID,#firstName,#lastName,#compayName,#LaneLine').removeClass('required');                             
                             $('#address1, #city, #postcode,#emaiID,#firstName,#lastName,#compayName,#LaneLine').each(function(){
                                 if($(this).val()==''){
                                     $(this).addClass('required');    
                                     $ret=1;
                                 }
                             })
                             if($ret==1){
                                $('.required').first().focus(); 
                                return false;
                             }
							 
			      $('.sendMail').hide();  
                            
                              $pack_val = $('#price-p-1').text();                                
                              if($pack_val=='50.00'){                                    
                                    $package='Skyline Lite'                                  
                              }                                  
                              if($pack_val=='75.00'){                                
                                $package='Skyline Smart'                                                                   
                              }
                              if($pack_val=='100.00'){                                    
                                    $package='Pro Support'
                              }
                              $cntUser='';
                              $cnt_val='';
                              $remoteEng='';
                              $remoteEng_val='';
                              $smartMap='';
							  $client='';
							  $diary_val='';
							  $setup_val ='0.00';
                               $smartMap_val ='0.00';
                               $texting_val='0.00';
							   $training_val='0.00';
                               $sage_val='0.00';
                               $stock_val='0.00';
                               $iframe_val='0.00';
                               $client_val='0.00';
                               $Total_val=$('#price-ex-vat').text();
                               $VAT_val=$('#price-vat').text();
                               $Total_vat_val =$('#price-summary-vat').text();
                               $full_name=$('#CustomerTitleID option:selected').text()+' '+$('#firstName').val()+' '+$('#lastName').val();
                               $company=$('#compayName').val();
                               $emailID=$('#emaiID').val();
                               $Telphone=$('#LaneLine').val();
                               $RefNo=$('#RefNumber').val();
                               $PostCode=$('#price-p-15').text();
                               $PostCodeText="";
                               if($PostCode!='0.00')$PostCodeText=$('#text-15').text(); 							   
                               $website_design=$('#price-p-16').text();
							   if($('#POAspan').text()!='')$website_design='POA';							   							  
                               $social_design=$('#price-p-17').text();
                               
                               if($.trim($RefNo)=='')$RefNo='--';
                               $address_1=$('#address1').val();
                               $address_2=$('#address2').val();
                               if($.trim($address_2)=='')$address_2='--';
                               $town=$('#city').val();                               
                               $county=$('#county').val();
                               if($.trim($county)=='')$county='--';
                               $postcode=$('#postcode').val();
                               $country=$('#country').val();
                               if($.trim($country)=='')$country='--';                               
                               $Discount=$('#price-discount').text();
                               $Discount_code=$('#AgentDiscountCode').val();
                             $('.inner .ob_selected' ).each(function( index ) {
                                     $rel=$(this).attr('rel');
                                     
                                        $cntUser =$('#users option:selected').text()
                                        $val=parseInt($('#users-price').text())                                        
                                        $cnt_val=$val.toFixed(2)
                                         if($val==15){                                    
                                                    $cntUser='6 to 10 Users'                                  
                                              }                                  
                                              if($val==30){                                
                                                    $cntUser='11 to 20 Users'                                                                   
                                              }
                                              if($val==45){                                    
                                                    $cntUser='21 to 30 Users'
                                              }
											  if($val==60){                                    
                                                    $cntUser='31 to 45 Users'
                                              }
											  if($val==80){                                    
                                                    $cntUser='46 to 60 Users'
                                              }
											  if($val==150){                                    
                                                    $cntUser='Unlimited Users'
                                              }
										
										$diary_val =$('#diary option:selected').text()
                                        $val=parseInt($('#diary-price').text())                                        
                                        $setup_val=$val.toFixed(2)
                                         if($val==0){                                    
                                                    $diary_val='Basic'                                  
                                              }           
																  
											  
									if($rel=='booking-staff'){
                                        $PostCodeText = ' x '+$('#booking-no-id').val();
                                        $val=parseInt(parseInt($('#booking-no-id').val())*8)                                        
                                        $PostCode = $val.toFixed(2)
                                    }
																		   								   
                                    if($rel=='training-module'){                                        
                                        $val=parseInt($('#training-module-price').text())                                        
                                        $training_val=$val.toFixed(2)
                                    }
                                     if($rel=='remote-eng'){
                                        $remoteEng =' x '+$('#remote-engineer-input').val();
                                        $val=parseInt(parseInt($('#remote-engineer-input').val())*10)                                        
                                        $remoteEng_val = $val.toFixed(2)
                                    }
                                    
                                     if($rel=='smart-mapping'){
                                        $smartMap = ' x '+$('#smart-mapping-input').val();
                                        $val=parseInt(parseInt($('#smart-mapping-input').val())*10)                                        
                                        $smartMap_val = $val.toFixed(2)
                                    }
                                    
                                     if($rel=='texting-module'){                                        
                                        $val=parseInt($('#texting-module-price').text())                                        
                                        $texting_val=$val.toFixed(2)
                                    }
                                    
                                     if($rel=='stock-module'){                                        
                                        $val=parseInt($('#stock-module-price').text())                                        
                                        $stock_val = $val.toFixed(2)
                                    }
                                    
                                     if($rel=='iframe-module'){                                        
                                        $val=parseInt($('#iframe-module-price').text())                                        
                                        $iframe_val = $val.toFixed(2)
                                    }
                                    
                                     if($rel=='client-module'){
										$client = ' x '+$('#booking-tracking-module-input').val();	
                                        $val=parseInt(parseInt($('#booking-tracking-module-input').val())*25)                                        
                                        $client_val = $val.toFixed(2)
                                    }
                                    
                               });
                              $EmailSent=1;
                              $.post('sendmail.php',{ 
                                  cntUser       :$cntUser,
								  diary_val		:$diary_val,
								  setup_val		:$setup_val,
                                  package       :$package,
                                  pack_val      :$pack_val,
                                  cnt_val       :$cnt_val,
                                  remoteEng     :$remoteEng,
                                  remoteEng_val :$remoteEng_val,
                                  smartMap      :$smartMap,
                                  smartMap_val  :$smartMap_val,
                                  texting_val   :$texting_val,
				  training_val	:$training_val,
                                  sage_val      :$sage_val,
                                  stock_val     :$stock_val,
                                  iframe_val    :$iframe_val,
				  client	:$client,
                                  client_val    :$client_val,
                                  Total_val     :$Total_val,
                                  VAT_val       :$VAT_val,
                                  Total_vat_val :$Total_vat_val,
                                  full_name     :$full_name,
                                  company       :$company,
                                  emailID       :$emailID,
                                  Telphone      :$Telphone,
                                  RefNo         :$RefNo,
                                  address_1     :$address_1,
                                  address_2     :$address_2,
                                  town          :$town,
                                  county        :$county,
                                  postcode      :$postcode,
                                  country       :$country,
                                  Discount      :$Discount,
                                  Discount_code :$Discount_code,
                                  PostCode      :$PostCode,
                                  PostCodeText  : $PostCodeText,                               
                                  website_design: $website_design,
                                  social_design: $social_design
                              },function(data) { 
                                    data=$.trim(data);                                    
                                    
                                    if(parseInt(data)==2){
                                       alert('Email Address Not Valid')
                                       $('.sendMail').show();  
                                       $EmailSent=0;
                                    }
								                                     
                                    if(parseInt(data)==0){
                                       alert('Error Mail not Sent');
                                       $('.sendMail').show();  
                                       $EmailSent=0;
                                    }                                    
                                    
                                    if(parseInt(data)==1){                                                                                
                                        parent.window.location.href = "/lite/thankyou/";
                                    }
                                })
                            
                         }
                         </script>
                    <body>


                        <div id="mainContent" style="width: 1180px;margin: 0 auto;">
                            <div id="ob_content">

                                <div id="ob_form">
                                    <h1 class="heading1" style="margin-left:0px;font-size:38px !important;color :#189fe3 !important;">
                                                    Customise Skyline Lite to manage your specific business requirements</span></h1>
                                    <div id="ob_layout" style="position:relative">
                                        <div class="unit size700 hideBck">
                                            <div class="unit ob_unit">
                                                <div class="simple ob_normal">
                                                    <b class="top"><b class="tl"></b><b class="tr"></b></b>
                                                    <fieldset class="inner" >

                                                        <legend class="heading3 firm1 mts" style="color :#189fe3 !important;padding: 0 10px;margin-left: 2px;">1. Select your Skyline Lite Version</legend>
                                                        <div class=" ob_row ob_row_sagecover_selector line " id="priceTableBoxes" style="height: 380px">
                                                            <div class="unit size1of3">
                                                                <div class="unit">
                                                                    <div class="ob_mgr_10 simple lite ob_normal" rel='50'>
                                                                        <b class="top"><b class="tl"></b><b class="tr"></b></b>
                                                                        <div class="inner ">
                                                                            <h3 class="heading4 minLetSpace mtl ob_dg" style="height: 46px">Skyline Lite product only</h3>
                                                                            <p class="ob_larger scInline minLetSpace " title="No SageCover">
                                                                            </p>
                                                                            <div class="ob_hidden no_cover_hidden" title="50">+50</div>
                                                                            <p class="scInline bold">
                                                                                £<span class="no_cover_price"> 50.00</span> +VAT
                                                                                p/m
                                                                            </p>
                                                                            <ul class="ob_li mtm equalHeight" style="height: 208px;">
                                                                                <li>No Support Cover</li>
                                                                                <li>Always on the latest version<br>

                                                                                </li>
                                                                            </ul>

                                                                            <div style="text-align: center;">
                                                                                <a rel="button"  name="noCover" class="ob_button ob_grey_button ob_but_scover" title="Skyline Lite product only" >Select</a>
                                                                            </div>
                                                                        </div>
                                                                        <b class="bottom"><b class="bl"></b><b class="br"></b></b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="unit size1of3">
                                                                <div class="unit">
                                                                    <div class="ob_mgr_10 simple ob_normal" rel='75'>
                                                                        <b class="top"><b class="tl"></b><b class="tr"></b></b>
                                                                        <div class="inner ">
                                                                            <div id="most-popular2c">
                                                                                Most Popular
                                                                            </div>
                                                                            <h3 class="heading4 minLetSpace mts ob_dg">Skyline Lite with Smart Technical Support </h3>
                                                                            <p class="ob_larger scInline minLetSpace" title="SageCover Online">
                                                                            </p>
                                                                            <div class="ob_hidden sage_cover_online_hidden" title="75">+75</div>
                                                                            <p class="scInline bold">
                                                                                £<span class="sage_cover_online_price"> 75.00</span> +VAT
                                                                                p/m
                                                                            </p>
                                                                            <ul class="ob_li mtm equalHeight" style="height: 215px;">
                                                                                <li>Email Support</li>
                                                                                <li>Online Support </li>
                                                                                <li>Key Points Training Video’s</li>
                                                                                <li>Always on the latest version</li>
																			</ul>
                                                                            <div style="text-align: center;">
                                                                                <a name="online" class="ob_button ob_grey_button ob_but_scover" title="Skyline Lite with Smart Technical Support" >Select</a>
                                                                            </div>
                                                                        </div>
                                                                        <b class="bottom"><b class="bl"></b><b class="br"></b></b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="unit size1of3">
                                                                <div class="unit">

                                                                    <div class="simple ob_normal" rel='100'>
                                                                        <b class="top"><b class="tl"></b><b class="tr"></b></b>
                                                                        <div class="inner" >
                                                                            <h3 class="heading4 minLetSpace mtl ob_dg">Skyline Lite with Pro Technical Support </h3>
                                                                            <p class="ob_larger scInline minLetSpace" title="SageCover Extra">
                                                                            </p>
                                                                            <div class="ob_hidden sage_cover_extra_hidden" title="100">+100</div>
                                                                            <p class="scInline bold">
                                                                                £<span class="sage_cover_extra_price"> 100.00</span> +VAT
                                                                                p/m
                                                                            </p>
                                                                            <ul class="ob_li mtm equalHeight" style="height: 215px;">
                                                                                <li>All the benefits of Skyline Smart Support plus the following…</li>
                                                                                <li>Dedicated Support Manager </li>
                                                                                <li>Telephone Support</li>
                                                                                <li>Call Back Support</li>
                                                                                <li>Remote Support</li>
                                                                                <li>Report Generator</li>
                                                                                <li>Colour Theme</li>
                                                                            </ul>
                                                                            <div style="text-align: center;">
                                                                                <a name="extra" class="ob_button ob_grey_button ob_but_scover" title="Skyline Lite with Pro Technical Support" >Select</a>
                                                                            </div>
                                                                        </div>
                                                                        <b class="bottom"><b class="bl"></b><b class="br"></b></b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ob_clear">
                                                            </div>
                                                        </div>
                                                        <h2 class="heading3 firm1 mtl">2. Select User Group Size</h2>
                                                        <div class="line inner ">
                                                            <div>
                                                                <label style="text-align: left;">
                                                                    How many people will use the software?
                                                                </label>
                                                                <div class="ob_select_custom ob_employee" id="ob_software">
                                                                    <select class="ob_select_software ob_title" name="users" id="users">
                                                                        <option value="0" selected="selected" title="free">Up to 5 Users Free </option>
                                                                        <option value="15" title="15">6 to 10 Users  £15.00 </option>
                                                                        <option value="30" title="30">11 to 20 Users £30.00 </option>
                                                                        <option value="45" title="45">21 to 30 Users £45.00 </option>
																		<option value="60" title="45">31 to 45 Users £60.00 </option>
																		<option value="80" title="45">46 to 60 Users £80.00 </option>
																		<option value="150" title="45">Unlimited Users £150.00 </option>
                                                                    </select>
                                                                    Up to 5 concurrent users are free of charge 
                                                                </div>
                                                            </div>
                                                             <div class="custPrice" style="float: right;">
                                                                        <span class="ob_strong">£</span><span id="users-price" class="ob_price ob_strong">0</span>
                                                                        <span class="ob_incl_vat">+VAT P/M</span>
                                                                        <span class="ob_prodrow" style="width: 80px;float: right;padding-left: 10px;"> 
                                                                            <a class="ob_button_training ob_button_small ob_sml_grey_button" rel="Group"  title="Click to select/deselect item">Select</a>
                                                                        </span>    
                                                                    </div>
                   
                                      
                                                        </div>
														<h2 class="heading3 firm1 mtl">3. Select Training Cost</h2>
														<div class="ob_prodrow ob_prodrow_row1">
                                                            <div class="inner basketApps">
                                                                <div class="unit ob_prod_pic">
                                                                    <img src="/lite/lite-priceing/Sage_files/accountsforeigntrader_sm.png" alt="Sage 50 Accounts Mobile Sales" id="Img3">
                                                                </div>
                                                                <div class="unit lastUnit">
                                                                    <h4 class="ob_strong ob_stationery">Full Training Day</h4>
                                                                    <p>
                                                                        Our dedicated Skyline Lite Business Analysts will come to your business to train staff members on Skyline Lite to ensure you are getting the most out of the system.
                                                                    </p>
                                        
                                                                    <div class="custPrice">
                                                                        <span class="ob_strong">From £</span><span id="training-module-price" class="ob_price ob_strong">300</span>
                                                                        <span class="ob_incl_vat">+VAT P/M</span>
                                                                        <a class="ob_button_training ob_button_small ob_sml_grey_button" rel="training-module"  title="Click to select/deselect item">Select</a>
                                                                    </div>
                                                                    <div style="clear:both;width:100%;margin: 0px">
                                                                    <!-- <a style="padding: 7px;font-size: 14px;" class="button large" target="parent" href="/skyline-lite-modules/" >Read More </a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
														<h2 class="heading3 firm1 mtl">4. Select Additional Modules <span class="sageDarkGrey"></span></h2>
                                                        <div class="ob_prodrow ob_prodrow_row1">
                                                            <div class="inner basketApps">
                                                                <div class="unit ob_prod_pic">
                                                                    <img src="/lite/lite-priceing/Sage_files/accountsforeigntrader_sm.png" alt="Sage Accounts Foreign Trader app" id="Img1">
                                                                </div>
                                                                <div class="unit lastUnit">
                                                                    <h4 class="ob_strong ob_stationery">Mobile Workforce App.</h4>
                                                                    <p>
                                                                        Real-time information delivered direct to your engineer and real-time updates delivered direct to your admin team.  Eliminate double entry and saves £££££….. <strong></strong>
                                                                    </p>
                                                
                                                                    <span class="ob_dg">Number of field engineers <input value='1' type="text" class="textbox" id="remote-engineer-input" style="width:50px" /></span>
                                                                    <div class="custPrice">
                                                                        <span class="ob_strong">£</span><span id="remote-engineer-input-price" class="ob_price ob_strong">10</span>
                                                                        <span class="ob_incl_vat">+VAT P/M</span>
                                                                        <a class="ob_button_training ob_button_small ob_sml_grey_button" rel="remote-eng"  title="Click to select/deselect item">Select</a>
                                                                    </div>
                                                          <div style="clear:both;width:100%;margin: 0px">
                                                                    
                                                                    <!-- <a style="padding: 7px;font-size: 14px;" class="button large" target="parent" href="/skyline-lite-modules/" >Read More </a> -->
                                                          </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="ob_prodrow ob_prodrow_row2">
                                                            <div class="inner basketApps">
                                                                <div class="unit ob_prod_pic">
                                                                    <img src="/lite/lite-priceing/Sage_files/accounts_cis_sm.png" alt="Sage Accounts CIS app" id="Img2">
                                                                </div>
                                                                <div class="unit lastUnit">
                                                                    <h4 class="ob_strong ob_stationery">Smart Mapping Module</h4>
                                                                    <p>
                                                                        Visually manage field engineers and optimise routes. Track engineers in real-time and allocate new jobs to closest operative. Display actual visit time and show alert if running late.
                                                                    </p>
																	
                                                                    <span class="ob_dg">Number of field engineers <input type="text" value='1'  class="textbox" id="smart-mapping-input" style="width:50px" /></span>
                                                                    <div class="custPrice">
                                                                        <span class="ob_strong">£</span><span id='smart-mapping-input-price' class="ob_price ob_strong">10</span>
                                                                        <span class="ob_incl_vat">+VAT P/M</span>
                                                                        <a class="ob_button_training ob_button_small ob_sml_grey_button" rel="smart-mapping" title="Click to select/deselect item">Select</a>
                                                                    </div>
                                                                    <div style="clear:both;width:100%;margin: 0px">
                                                                    <!-- <a style="padding: 7px;font-size: 14px;" class="button large" target="parent" href="/skyline-lite-modules/" >Read More </a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
														
														<div class="ob_prodrow ob_prodrow_row2">
                                                            <div class="inner basketApps">
                                                                <div class="unit ob_prod_pic">
                                                                    <img src="/lite/lite-priceing/Sage_files/accounts_cis_sm.png" alt="app" id="Img2">
                                                                </div>
                                                                <div class="unit lastUnit">
																
                                                                    <h4 class="ob_strong ob_stationery">Diary Management - </h4>
                                                                    <p>
                                                                        The basic diary allows for generic setup for all engineers.
                                                                    	The Advanced diary allows for custom set-up per engineer, Smart Maps use on an engineer, absent diary set-up and engineer notes.
																	</p>	
																	<span class="ob_dg">Select Diary type</span>
                                                                    <select class="ob_select_software ob_title" name="diary" id="diary">
                                                                        <option value="0" title="free"> Basic</option>
																		<option value="10" selected="selected" title="10"> Advanced</option>
                                                                    </select>
                                                             
																	<div class="custPrice" style="float: right;">
                                                                        <span class="ob_strong">£</span><span id="diary-price" class="ob_price ob_strong">10</span>
																			<span class="ob_incl_vat">+VAT P/M</span>
																			<span class="ob_prodrow" style="width: 80px;float: right;padding-left: 10px;"> 
                                                                            <a class="ob_button_training ob_button_small ob_sml_grey_button" rel="diarySetup"  title="Click to select/deselect item">Select</a>
                                                                        </span>    
                                                                    </div>
                                                                    <div style="clear:both;width:100%;margin: 0px">
																		<!-- <a style="padding: 7px;font-size: 14px;" class="button large" target="parent" href="/skyline-lite-modules/" >Read More </a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                         <div class="ob_prodrow ob_prodrow_row2" style="">
                                                            <div class="inner basketApps">
                                                                <div class="unit ob_prod_pic">
                                                                    <img src="/lite/lite-priceing/Sage_files/accounts_cis_sm.png" alt="Sage Accounts CIS app" id="Img2">
                                                                </div>
                                                                <div class="unit lastUnit">
                                                                    <h4 class="ob_strong ob_stationery">Postcode Lookup</h4>
                                                                    <p>
                                                                        Anywhere a postcode and address is required, the interface looks up the postecode automatically from the current Royal Mail Database.
																		Once the postcode is entered into Skyline and the lookup key is pressed, the requested address is then filled out automatically.
                                                                    </p>
																	<span class="ob_dg">Number of Licences <input type="text" value='1'  class="textbox" id="booking-no-id" style="width:50px" /> x £8 per Month</span>
                                                                    <div class="custPrice">
                                                                        <span class="ob_strong">£</span><span id='booking-staff-input-price' class="ob_price ob_strong">8</span>
                                                                        <span class="ob_incl_vat">+VAT P/M</span>
                                                                        <a class="ob_button_training ob_button_small ob_sml_grey_button" rel="booking-staff" title="Click to select/deselect item">Select</a>
                                                                    </div>
                                                                    <div style="clear:both;width:100%;margin: 0px">
                                                                   <!-- <a style="padding: 7px;font-size: 14px;" class="button large" target="parent" href="/skyline-lite-modules/" >Read More </a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        
                                                        
                                                        <div class="ob_prodrow ob_prodrow_row3">
                                                            <div class="inner basketApps">
                                                                <div class="unit ob_prod_pic">
                                                                    <img src="/lite/lite-priceing/Sage_files/accountsforeigntrader_sm.png" alt="Sage 50 Accounts Mobile Sales" id="Img3">
                                                                </div>
                                                                <div class="unit lastUnit">
                                                                    <h4 class="ob_strong ob_stationery">Texting Module</h4>
                                                                    <p>
                                                                        Send text messages to any customer from the job update page with customised texts. SMS Text Credits can be ordered in batches of 1000 when required.
                                                                    </p>
                                        
                                                                    <div class="custPrice">
                                                                        <span class="ob_strong">£</span><span class="ob_price ob_strong" id="texting-module-price">50</span>
                                                                        <span class="ob_incl_vat">+VAT P/M</span>
                                                                        <a class="ob_button_training ob_button_small ob_sml_grey_button" rel="texting-module"  title="Click to select/deselect item">Select</a>
                                                                    </div>
                                                                    <div style="clear:both;width:100%;margin: 0px">
                                                                   <!-- <a style="padding: 7px;font-size: 14px;" class="button large" target="parent" href="/skyline-lite-modules/" >Read More </a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="ob_prodrow ob_prodrow_row3">
                                                            <div class="inner basketApps">
                                                                <div class="unit ob_prod_pic">
                                                                    <img src="/lite/lite-priceing/Sage_files/accountsforeigntrader_sm.png" alt="Sage 50 Accounts Mobile Sales" id="Img3">
                                                                </div>
                                                                <div class="unit lastUnit">
                                                                    <h4 class="ob_strong ob_stationery">Stock Control Module</h4>
                                                                    <p>
                                                                       This is a fully integrated Stock Control Module that will allow you to Order & Receive Stock and populate Internal and Van Stock locations.
																	</p>
                                                                    <div class="custPrice">
                                                                        <span class="ob_strong">£</span><span class="ob_price ob_strong"  id="stock-module-price">25</span>
                                                                        <span class="ob_incl_vat">+VAT P/M</span>
                                                                        <a class="ob_button_training ob_button_small ob_sml_grey_button" rel="stock-module" title="Click to select/deselect item">Select</a>
                                                                    </div>
                                                                    <div style="clear:both;width:100%;margin: 0px">
                                                                  <!--  <a style="padding: 7px;font-size: 14px;" class="button large" target="parent" href="/skyline-lite-modules/" >Read More </a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="ob_prodrow ob_prodrow_row3">
                                                            <div class="inner basketApps">
                                                                <div class="unit ob_prod_pic">
                                                                    <img src="/lite/lite-priceing/Sage_files/accountsforeigntrader_sm.png" alt="Sage 50 Accounts Mobile Sales" id="Img3">
                                                                </div>
                                                                <div class="unit lastUnit">
                                                                    <h4 class="ob_strong ob_stationery">iFrame Booking & Tracking  Module</h4>
                                                                    <p>
                                                                        Integrate a real-time Booking and Tracking page into your website to save on administration costs and to deliver up to date information to your customer anytime they want it. 
																	</p>
                                                                    <div class="custPrice">
                                                                        <span class="ob_strong">£</span><span class="ob_price ob_strong"  id="iframe-module-price">25</span>
                                                                        <span class="ob_incl_vat">+VAT P/M</span>
                                                                        <a class="ob_button_training ob_button_small ob_sml_grey_button" rel="iframe-module"  title="Click to select/deselect item">Select</a>
                                                                    </div>
                                                                    <div style="clear:both;width:100%;margin: 0px">
                                                                   <!-- <a style="padding: 7px;font-size: 14px;" class="button large" target="parent" href="/skyline-lite-modules/" >Read More </a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                         <div class="ob_prodrow ob_prodrow_row3">
                                                            <div class="inner basketApps">
                                                                <div class="unit ob_prod_pic">
                                                                    <img src="/lite/lite-priceing/Sage_files/accountsforeigntrader_sm.png" alt="Sage 50 Accounts Mobile Sales" id="Img3">
                                                                </div>
                                                                <div class="unit lastUnit">
                                                                    <h4 class="ob_strong ob_stationery">Client Booking & Tracking Module</h4>
                                                                    <p>
                                                                        Allow key clients to access your skyline system as if it was their own booking and tracking jobs with a restricted view. Up to 2 logins per client.
                                                                    </p>
																	 <span class="ob_dg">Number of clients <input type="text" value='1'  class="textbox" id="booking-tracking-module-input" style="width:50px" /></span>
                                                                    <div class="custPrice">
                                                                        <span class="ob_strong">£</span><span class="ob_price ob_strong"  >25</span>
                                                                        <span class="ob_incl_vat">+VAT P/M</span><span>per client</span>
                                                                        <a class="ob_button_training ob_button_small ob_sml_grey_button" rel="client-module" title="Click to select/deselect item">Select</a>
                                                                    </div>
                                                                    <div style="clear:both;width:100%;margin: 0px">
                                                                   <!-- <a style="padding: 7px;font-size: 14px;" class="button large" target="parent" href="/skyline-lite-modules/" >Read More </a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                                            <div class="ob_prodrow ob_prodrow_row3">
                                                            <div class="inner basketApps">
                                                                <div class="unit ob_prod_pic">
                                                                    <img src="/lite/lite-priceing/Sage_files/accountsforeigntrader_sm.png" alt="Sage 50 Accounts Mobile Sales" id="Img3">
                                                                </div>
                                                                <div class="unit lastUnit">
                                                                    <h4 class="ob_strong ob_stationery">Website Design</h4>
                                                                    <p>
                                                                       We will have your new website up and running in less than 10working days. Our web team will design your site. write & load your content and active all our
                                                                       great new features. Your new site will inspire browsers to purchase your service and will seamlessly integrate with Skyline so customers can book
                                                                       and track jobs online.
                                                                    </p>
                                         
                                                                    <div class="custPrice">
                                                                        <span class="ob_strong"> </span><span class="ob_price ob_strong"  id="website-module-price">POA</span>
                                                                        <span class="ob_incl_vat">+VAT P/M</span>
                                                                        <a class="ob_button_training ob_button_small ob_sml_grey_button" id="webdesign-module" rel="webdesign-module" title="Click to select/deselect item">Select</a>
                                                                    </div>
                                                                    <div style="clear:both;width:100%;margin: 0px">
                                                                   <!-- <a style="padding: 7px;font-size: 14px;" class="button large" target="parent" href="/skyline-lite-modules/" >Read More </a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                     <div class="ob_prodrow ob_prodrow_row3" style="display:none">
                                                            <div class="inner basketApps">
                                                                <div class="unit ob_prod_pic">
                                                                    <img src="/lite/lite-priceing/Sage_files/accountsforeigntrader_sm.png" alt="Sage 50 Accounts Mobile Sales" id="Img3">
                                                                </div>
                                                                <div class="unit lastUnit">
                                                                    <h4 class="ob_strong ob_stationery">Website Design & Social Media Manager Bundle</h4>
                                                                    <p>
                                                                        All the features of our professional website design bundled together with a fully interactive Social Media Manager. Automatically generate
                                                                        and post multiple updates with information about your business, industry related information and really interesting links and special promotional
                                                                        offers that will encourage your clients and followers to re-post. <br /><br />
                                                                        For just an additional £20 per month we will ensure business has a professional Social Media image
                                                                        
                                                                    
                                                                    </p>
                                         
                                                                    <div class="custPrice">
                                                                        <span style="padding-right: 120px;color:#41a940" id="msg-social-media">Don't forget to add Social Media to your website……</span>
                                                                        <span class="ob_strong">£</span><span class="ob_price ob_strong"  id="social-module-price" style="display:none">20</span><span class="ob_price ob_strong">80</span>
                                                                        <span class="ob_incl_vat">+VAT P/M</span>
                                                                        <a class="ob_button_training ob_button_small ob_sml_grey_button" id='social-module' rel="social-module" title="Click to select/deselect item">Select</a>
                                                                    </div>
                                                                    <div style="clear:both;width:100%;margin: 0px">
                                                                   <!-- <a style="padding: 7px;font-size: 14px;" class="button large" target="parent" href="/skyline-lite-modules/" >Read More </a> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        

                                                        <a  class="button large" onclick="AboutVisiableScreen()">Register Interest <i class="fa fa-angle-right"></i></a>

                                                    </fieldset>
                                                    <b class="bottom"><b class="bl"></b><b class="br"></b></b>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="unit size220 lastUnit">
                                            <div id="ob_scroll_block" class="unit ob_unit" >
                                                <div class="simple ob_head">
                                                    <div class="inner">
                                                        <span class="ob_headb right"></span><span class="ob_headb" style="color: #41a940;">You have selected...</span>
                                                    </div>
                                                </div>
                                                <div class="simple ob_body">
                                                    <div class="inner">
                                                        <div class="ob_prodrown">
                                                            <div id="sidebar-right">
                                                                <div class="unit ob_prod_pic">
                                                                    <img style="margin-bottom:10px;width: 100%;vertical-align: bottom;" src="/lite/wp-content/uploads/2018/06/logo-3.png" alt="Skyline" title="Skyline" />
                                                                </div>
                                                                
                                                            
                                                                <div class="ob_clear">
                                                                </div>
                                                                <span class="ob_dg">Compulsory Options</span>
                                                                 <div class="ob_clear">
                                                                </div>
                                                                   <div>
                                                                       <span id='text-1'>No Support</span> <span class="ob_r sub-total"> <span id="price-p-1">25.00</span></span>
                                                                </div>
                                                                
                                                                 <div>
                                                                    <span id='text-2'>Under 5 Users</span> <span class="ob_r sub-total"> <span id="price-p-2"> 0.00</span></span>
                                                                </div>
																
																<div>
                                                                    Training  <span class="ob_r sub-total"> <span id="price-p-18">0.00</span></span>
                                                                </div>
                                                                
                                                                <div class="ob_clear">
                                                                </div>
                                                                <span class="ob_dg">Selected Modules </span>
                                                                 <div class="ob_clear">
                                                                </div>
																<div>
                                                                    Mobile Workforce App<span id='text-3'></span> <span class="ob_r sub-total"> <span id="price-p-3">0.00</span></span>
                                                                </div>
                                                                
                                                                 <div>
                                                                     Smart Mapping<span id='text-4'></span>  <span class="ob_r sub-total"> <span id="price-p-4">0.00</span></span>
                                                                </div>
																
                                                                <div>
                                                                    Diary Management<span id='text-5'></span><span class="ob_r sub-total"> <span id="price-p-6">0.00</span></span>
                                                                </div>
																
                                                                 <div style="">
                                                                    Postcode Lookup<span id='text-15'></span>  <span class="ob_r sub-total"> <span id="price-p-15">0.00</span></span>
                                                                </div> 
                                                                 <div>
                                                                    Texting  <span class="ob_r sub-total"> <span id="price-p-5">0.00</span></span>
                                                                </div>
                                                                
                                                                <div>
                                                                    Stock Control  <span class="ob_r sub-total"> <span id="price-p-7">0.00</span></span>
                                                                </div>
                                                                
                                                                <div>
                                                                    iFrame Booking & Tracking  <span class="ob_r sub-total"> <span id="price-p-8">0.00</span></span>
                                                                </div>
                                                                
                                                                 <div>
                                                                    Client Booking & Tracking<span id='text-9'></span>  <span class="ob_r sub-total"> <span id="price-p-9">0.00</span></span>
                                                                </div>
                                                                
                                                                <div>
                                                                    Website Design<span id="POAspan"></span> <span class="ob_r sub-total"> <span id="price-p-16">0.00</span></span>
                                                                </div>
                                                                
                                                                <div style="display:none">
                                                                    Social Media Manager Bundle  <span class="ob_r sub-total"> <span id="price-p-17">0.00</span></span>
                                                                </div>
                                                                
                                                                    <div class="ob_clear">
                                                                </div>
                                                                <span class="ob_dg">Discount Code  </span>
                                                                 <div class="ob_clear">
                                                                </div>
                                                                <div>
                                                                    Promotion supplied by your sponsor:  <input type="text"  style="width:120px;text-transform:uppercase" id="AgentDiscountCode"  /><span class="ob_r sub-total"> -<span id="price-discount">0.00</span></span>
                                                                </div>
                                                                
                                                                <div class="ob_ajax_loader" style="height: 127px; display: none;padding-left: 10px;">
                                                                    <img src="images/ob/ajax-loader.gif" alt="Updating...">
                                                                </div>
                                                            </div>
                                                            <div id="sidebar-items">
                                                                <ul id="sidebar-items-list">
                                                                </ul>
                                                            </div>
                                                            <!-- row -->
                                                            <div id="basket_total">                                                             
                                                                <div>
                                                                    Total P/M (Ex VAT) <span class="ob_r sub-total"><span id="price-ex-vat">0.00</span></span>
                                                                </div>
                                                            
                                                                <div>
                                                                    <span class="vat-title">VAT at 20%</span><span class="ob_r extra-cost" id="price-vat">+ 0.00</span>
                                                                </div>
                                                                <div>
                                                                    Total P/M (Incl VAT) <span class="ob_r total">£<span id="price-summary-vat">0.00</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="ob_mt_15">
                                                                <a  class="button large" onclick="AboutVisiableScreen()" >Register Interest <i class="fa fa-angle-right"></i></a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <b class="bottom"><b class="bl"></b><b class="br"></b></b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                                                </div>
                      </div>
                        
                        <div id="About-You" style="width: 1170px; margin: 0px auto; display: block;">
                            <div class="unit size700 hideBck" style="width:1130px;">
                                            <div class="unit ob_unit">
                                                <div class="simple ob_normal">
                                                    <b class="top"><b class="tl"></b><b class="tr"></b></b>
                                                    <fieldset class="inner">

                                                        <legend class="heading3 firm1 mts" style="color :#189fe3 !important;padding: 0 10px;margin-left: 2px;"> About You </legend>
                                                        <div class=" ob_row ob_row_sagecover_selector line" style="width:100%;">
															<div style="width:49%; display:grid; float:left;">
                                                            All fields are required to process your order, unless marked(Optional)
                                                             <div style="margin-top:20px;font-weight:bold">
                                                                <p> <label style="width:70px">Title</label>  <label style="width:210px">First name</label>  <label style="width:100px">Last name</label> <br /> 
                                                                <select id="CustomerTitleID"  class='adressText' style="width:75px;height:35px" name="CustomerTitleID">                                                                     
                                                                     <option value="1">Mr</option>
                                                                    <option value="5">Dr</option>
                                                                    <option value="3">Miss</option>                                                                   
                                                                    <option value="2">Mrs</option>
                                                                    <option value="4">Ms</option>
                                                                </select>     
                                                                      <Input type='text' style="width:200px;margin-right: 15px;height: 27px;" name='firstName' id='firstName' value="<?php echo isset($PostData['first-name'])?$PostData['first-name']:'' ?>" class='adressText' />
                                                                      <Input type='text' style="width:200px;height: 27px;" name='lastName' id='lastName' value="<?php echo isset($PostData['last-name'])?$PostData['last-name']:'' ?>" class='adressText' />
                                                                </p>
                                                                <p>
                                                                <label>Company name</label>  <br /> 
                                                                <Input type='text' name='compayName' id='compayName' value="<?php echo isset($PostData['company-name'])?$PostData['company-name']:'' ?>" class='adressText' />
                                                                </p>
                                                                <p>
                                                                <label>Email address</label>  <br /> 
                                                                <Input type='email' name='emaiID' id='emaiID' value="<?php echo isset($PostData['email'])?$PostData['email']:'' ?>" class='adressText' />
                                                                </p>
                                                                <p>
                                                                <label>Landline telephone number</label>  <br /> 
                                                                <Input type='number' name='LaneLine' id='LaneLine' value="<?php echo isset($PostData['telephone'])?$PostData['telephone']:'' ?>" class='adressText' />
                                                                </p>
                                                                <p>
                                                                <label>Your Reference Number(Optional)</label>  <br /> 
                                                                <Input type='text' id="RefNumber" name='RefNumber' class='adressText' />
                                                                </p>
                                                            </div>
															</div>
															<div style="display:grid;">
																
																<span style="color:#41a940; font-size:20px">What is the address of your business?</span>
																<div style="margin-top:20px;font-weight:bold">
                                                                <p> <label>Address</label>  <br /> 
                                                                <Input type='text' id="address1" name='address1' class='adressText' /><br /> 
                                                                <br /> 
                                                                <Input type='text' name='address2' id='address2' class='adressText' />
                                                                </p>
                                                                <p>
                                                                <label>Town/City</label>  <br /> 
                                                                <Input type='text' name='city' id="city" class='adressText' />
                                                                </p>
                                                                <p>
                                                                <label>County(Optional)</label>  <br /> 
                                                                <Input type='text' name='county' id='county' class='adressText' />
                                                                </p>
                                                                <p>
                                                                <label>PostCode</label>  <br /> 
                                                                <Input type='text' name='postcode' id="postcode"  class='adressText' />
                                                                </p>
                                                                <p>
                                                                <label>Country</label>  <br /> 
                                                                <select type='text' id='country' name='country' class='adressText' >
                                                                    <option value="Afghanistan">Afghanistan</option>
																	<option value="Albania">Albania</option>
																	<option value="Algeria">Algeria</option>
																	<option value="American">American Samoa</option>
																	<option value="Andorra">Andorra</option>
																	<option value="Angola">Angola</option>
																	<option value="Anguilla">Anguilla</option>
																	<option value="Antarctica">Antarctica</option>
																	<option value="Antigua and Barbuda">Antigua and Barbuda</option>
																	<option value="Argentina">Argentina</option>
																	<option value="Armenia">Armenia</option>
																	<option value="Aruba">Aruba</option>
																	<option value="Australia">Australia</option>
																	<option value="Austria">Austria</option>
																	<option value="Azerbaijan">Azerbaijan</option>
																	<option value="Bahamas">Bahamas</option>
																	<option value="Bahrain">Bahrain</option>
																	<option value="Bangladesh">Bangladesh</option>
																	<option value="Barbados">Barbados</option>
																	<option value="Belarus">Belarus</option>
																	<option value="Belgium">Belgium</option>
																	<option value="Belize">Belize</option>
																	<option value="Benin">Benin</option>
																	<option value="Bermuda">Bermuda</option>
																	<option value="Bhutan">Bhutan</option>
																	<option value="Bolivia">Bolivia</option>
																	<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
																	<option value="Botswana">Botswana</option>
																	<option value="Bouvet Island">Bouvet Island</option>
																	<option value="Brazil">Brazil</option>
																	<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
																	<option value="Brunei Darussalam">Brunei Darussalam</option>
																	<option value="Bulgaria">Bulgaria</option>
																	<option value="Burkina Faso">Burkina Faso</option>
																	<option value="Burundi">Burundi</option>
																	<option value="Cambodia">Cambodia</option>
																	<option value="Cameroon">Cameroon</option>
																	<option value="Canada">Canada</option>
																	<option value="Cape Verde">Cape Verde</option>
																	<option value="Cayman Islands">Cayman Islands</option>
																	<option value="Central African Republic">Central African Republic</option>
																	<option value="Chad">Chad</option>
																	<option value="Chile">Chile</option>
																	<option value="China">China</option>
																	<option value="Christmas Island">Christmas Island</option>
																	<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
																	<option value="Colombia">Colombia</option>
																	<option value="Comoros">Comoros</option>
																	<option value="Congo">Congo</option>
																	<option value="Cook Islands">Cook Islands</option>
																	<option value="Costa Rica">Costa Rica</option>
																	<option value="Cote DIvoire">Cote DIvoire</option>
																	<option value="Croatia">Croatia</option>
																	<option value="Cuba">Cuba</option>
																	<option value="Cyprus">Cyprus</option>
																	<option value="Czech Republic">Czech Republic</option>
																	<option value="Democratic Republic of Congo">Democratic Republic of Congo</option>
																	<option value="Denmark">Denmark</option>
																	<option value="Djibouti">Djibouti</option>
																	<option value="Dominica">Dominica</option>
																	<option value="Dominican Republic">Dominican Republic</option>
																	<option value="East Timor">East Timor</option>
																	<option value="Ecuador">Ecuador</option>
																	<option value="Egypt">Egypt</option>
																	<option value="El Salvador">El Salvador</option>
																	<option value="Equatorial Guinea">Equatorial Guinea</option>
																	<option value="Eritrea">Eritrea</option>
																	<option value="Estonia">Estonia</option>
																	<option value="Ethiopia">Ethiopia</option>
																	<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
																	<option value="Faroe Islands">Faroe Islands</option>
																	<option value="Fiji">Fiji</option>
																	<option value="Finland">Finland</option>
																	<option value="France">France</option>
																	<option value="France, Metropolitan">France, Metropolitan</option>
																	<option value="French Guiana">French Guiana</option>
																	<option value="French Polynesia">French Polynesia</option>
																	<option value="French Southern Territories">French Southern Territories</option>
																	<option value="Gabon">Gabon</option>
																	<option value="Gambia">Gambia</option>
																	<option value="Georgia">Georgia</option>
																	<option value="Germany">Germany</option>
																	<option value="Ghana">Ghana</option>
																	<option value="Gibraltar">Gibraltar</option>
																	<option value="Greece">Greece</option>
																	<option value="Greenland">Greenland</option>
																	<option value="Grenada">Grenada</option>
																	<option value="Guadeloupe">Guadeloupe</option>
																	<option value="GU">Guam</option>
																	<option value="Guatemala">Guatemala</option>
																	<option value="Guinea">Guinea</option>
																	<option value="Guinea-bissau">Guinea-bissau</option>
																	<option value="Guyana">Guyana</option>
																	<option value="Haiti">Haiti</option>
																	<option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
																	<option value="Honduras">Honduras</option>
																	<option value="Hong Kong">Hong Kong</option>
																	<option value="Hungary">Hungary</option>
																	<option value="Iceland">Iceland</option>
																	<option value="India" >India</option>
																	<option value="Indonesia">Indonesia</option>
																	<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
																	<option value="Iraq">Iraq</option>
																	<option value="Ireland">Ireland</option>
																	<option value="Israel">Israel</option>
																	<option value="Italy">Italy</option>
																	<option value="Jamaica">Jamaica</option>
																	<option value="Japan">Japan</option>
																	<option value="Jordan">Jordan</option>
																	<option value="Kazakhstan">Kazakhstan</option>
																	<option value="Kenya">Kenya</option>
																	<option value="Kiribati">Kiribati</option>
																	<option value="Korea, Republic of">Korea, Republic of</option>
																	<option value="Kuwait">Kuwait</option>
																	<option value="Kyrgyzstan">Kyrgyzstan</option>
																	<option value="Lao Peoples Democratic Republic">Lao Peoples Democratic Republic</option>
																	<option value="Latvia">Latvia</option>
																	<option value="Lebanon">Lebanon</option>
																	<option value="Lesotho">Lesotho</option>
																	<option value="Liberia">Liberia</option>
																	<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
																	<option value="Liechtenstein">Liechtenstein</option>
																	<option value="Lithuania">Lithuania</option>
																	<option value="Luxembourg">Luxembourg</option>
																	<option value="Macau">Macau</option>
																	<option value="Macedonia">Macedonia</option>
																	<option value="MG">Madagascar</option>
																	<option value="Madagascar">Malawi</option>
																	<option value="Malaysia">Malaysia</option>
																	<option value="Maldives">Maldives</option>
																	<option value="Mali">Mali</option>
																	<option value="Malta">Malta</option>
																	<option value="Marshall Islands">Marshall Islands</option>
																	<option value="Martinique">Martinique</option>
																	<option value="Mauritania">Mauritania</option>
																	<option value="Mauritius">Mauritius</option>
																	<option value="Mayotte">Mayotte</option>
																	<option value="Mexico">Mexico</option>
																	<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
																	<option value="Moldova, Republic of">Moldova, Republic of</option>
																	<option value="Monaco">Monaco</option>
																	<option value="Mongolia">Mongolia</option>
																	<option value="Montserrat">Montserrat</option>
																	<option value="Morocco">Morocco</option>
																	<option value="Mozambique">Mozambique</option>
																	<option value="Myanmar">Myanmar</option>
																	<option value="Namibia">Namibia</option>
																	<option value="Nauru">Nauru</option>
																	<option value="Nepal">Nepal</option>
																	<option value="Netherlands">Netherlands</option>
																	<option value="Netherlands Antilles">Netherlands Antilles</option>
																	<option value="New Caledonia">New Caledonia</option>
																	<option value="New Zealand">New Zealand</option>
																	<option value="Nicaragua">Nicaragua</option>
																	<option value="Niger">Niger</option>
																	<option value="Nigeria">Nigeria</option>
																	<option value="Niue">Niue</option>
																	<option value="Norfolk Island">Norfolk Island</option>
																	<option value="North Korea">North Korea</option>
																	<option value="Northern Mariana Islands">Northern Mariana Islands</option>
																	<option value="Norway">Norway</option>
																	<option value="Oman">Oman</option>
																	<option value="Pakistan">Pakistan</option>
																	<option value="Palau">Palau</option>
																	<option value="Panama">Panama</option>
																	<option value="Papua New Guinea">Papua New Guinea</option>
																	<option value="Paraguay">Paraguay</option>
																	<option value="Peru">Peru</option>
																	<option value="Philippines">Philippines</option>
																	<option value="Pitcairn">Pitcairn</option>
																	<option value="Poland">Poland</option>
																	<option value="Portugal">Portugal</option>
																	<option value="Puerto Rico">Puerto Rico</option>
																	<option value="Qatar">Qatar</option>
																	<option value="Reunion">Reunion</option>
																	<option value="Romania">Romania</option>
																	<option value="Russian Federation">Russian Federation</option>
																	<option value="Rwanda">Rwanda</option>
																	<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
																	<option value="Saint Lucia">Saint Lucia</option>
																	<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
																	<option value="Samoa">Samoa</option>
																	<option value="San Marino">San Marino</option>
																	<option value="Sao Tome and Principe">Sao Tome and Principe</option>
																	<option value="Saudi Arabia">Saudi Arabia</option>
																	<option value="Senegal">Senegal</option>
																	<option value="Seychelles">Seychelles</option>
																	<option value="Sierra Leone">Sierra Leone</option>
																	<option value="Singapore">Singapore</option>
																	<option value="Slovak Republic">Slovak Republic</option>
																	<option value="Slovenia">Slovenia</option>
																	<option value="Solomon Islands">Solomon Islands</option>
																	<option value="Somalia">Somalia</option>
																	<option value="South Africa">South Africa</option>
																	<option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option>
																	<option value="Spain">Spain</option>
																	<option value="Sri Lanka">Sri Lanka</option>
																	<option value="St. Helena">St. Helena</option>
																	<option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
																	<option value="Sudan">Sudan</option>
																	<option value="Suriname">Suriname</option>
																	<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
																	<option value="Swaziland">Swaziland</option>
																	<option value="Sweden">Sweden</option>
																	<option value="Switzerland">Switzerland</option>
																	<option value="Syrian Arab Republic">Syrian Arab Republic</option>
																	<option value="Taiwan">Taiwan</option>
																	<option value="Tajikistan">Tajikistan</option>
																	<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
																	<option value="Thailand">Thailand</option>
																	<option value="Togo">Togo</option>
																	<option value="Tokelau">Tokelau</option>
																	<option value="Tonga">Tonga</option>
																	<option value="Trinidad and Tobago">Trinidad and Tobago</option>
																	<option value="Tunisia">Tunisia</option>
																	<option value="Turkey">Turkey</option>
																	<option value="Turkmenistan">Turkmenistan</option>
																	<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
																	<option value="Tuvalu">Tuvalu</option>
																	<option value="Uganda">Uganda</option>
																	<option value="Ukraine">Ukraine</option>
																	<option value="United Arab Emirates">United Arab Emirates</option>
																	<option value="United Kingdom" selected="selected">United Kingdom</option>
																	<option value="United States">United States</option>
																	<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
																	<option value="Uruguay">Uruguay</option>
																	<option value="Uzbekistan">Uzbekistan</option>
																	<option value="Vanuatu">Vanuatu</option>
																	<option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
																	<option value="Venezuela">Venezuela</option>
																	<option value="Viet Nam">Viet Nam</option>
																	<option value="Virgin Islands (British)">Virgin Islands (British)</option>
																	<option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
																	<option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
																	<option value="Western Sahara">Western Sahara</option>
																	<option value="Yemen">Yemen</option>
																	<option value="Yugoslavia">Yugoslavia</option>
																	<option value="Zambia">Zambia</option>
																	<option value="Zimbabwe">Zimbabwe</option>
                                                                </select>
                                                                </p>
                                                            </div>
                                                    	</div>
                                                    </div>
													<div class="ob_mt_15">
                                  <a style="margin-right: 30px;" class="button large" onclick="MainVisiableScreen()"><i class="fa fa-angle-left"></i> Back </a> <a onclick="processMail()" class="button large sendMail" style="float:right;">Continue <i class="fa fa-angle-right"></i></a>
                            </div>
                                                </fieldset>
                                            </div>
                                        </div>
                             </div>
       
       
                        </div>
                        
                        <script>
                           jQuery('#ob_scroll_block').stickyfloat();
                        </script>
                    </body>