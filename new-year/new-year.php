<?php
class newyear_greeting
{
	function __construct()
    {
       	$this->greetings_newyear();
    }
	function greetings_newyear()
	{
		$path =  plugin_dir_url( __FILE__ );
		$song_path = $path.'../song/PaukenBrumfiel_AngelsOnHigh.mp3';
		$preview_techno='';	$new_preview_gift_tc=''; $new_res_product_select_id=''; $new_radio_active=''; $new_preview=''; $date=false;
		if( $preview_techno!='preview') 
		{
			if( $new_preview=='new_preview') 
			{
				echo '<script type="text/javascript">jQuery(document).ready(function(){jQuery("#wpadminbar").addClass("hide-option");});</script>';
				if(isset($preview_tc))
				{
					$preview_gift_tc=$preview_tc;
				}
				if($new_preview_gift_tc=='new_preview_gift')
				{
					echo '<script type="text/javascript">jQuery(document).ready(function(){jQuery("#frame-wrapper").show();});</script>';
				}
				if($new_preview_gift_tc=='new_preview_gift')
				{
					$new_res_product_select_id=$new_res_product_select;
				}
				// Sanitize and manually extract parameters from $_GET
				$date = true;
				$product_res = '';
				$new_radio_active = 'new_active';

				$new_tc_snow_radio = isset($_GET['new_snow_radio_tc']) ? htmlspecialchars($_GET['new_snow_radio_tc'], ENT_QUOTES, 'UTF-8') : '';
				$radio_firework = isset($_GET['new_firework']) ? htmlspecialchars($_GET['new_firework'], ENT_QUOTES, 'UTF-8') : '';
				$new_tc_santa_radio = isset($_GET['new_santa_radio_tc']) ? htmlspecialchars($_GET['new_santa_radio_tc'], ENT_QUOTES, 'UTF-8') : '';
				$new_radio_santa = isset($_GET['new_santa']) ? htmlspecialchars($_GET['new_santa'], ENT_QUOTES, 'UTF-8') : '';
				$new_box_type = isset($_GET['new_box']) ? htmlspecialchars($_GET['new_box'], ENT_QUOTES, 'UTF-8') : '';
				$new_srt_date = isset($_GET['new_start_date']) ? sanitize_date($_GET['new_start_date'], ENT_QUOTES, 'UTF-8') : '';
				$new_en_date = isset($_GET['new_end_date']) ? sanitize_date($_GET['new_end_date'], ENT_QUOTES, 'UTF-8') : '';
				$new_radio_greetings = isset($_GET['new_greetings']) ? htmlspecialchars($_GET['new_greetings'], ENT_QUOTES, 'UTF-8') : '';
				$new_gifteffect_res = isset($_GET['new_gifteffect']) ? htmlspecialchars($_GET['new_gifteffect'], ENT_QUOTES, 'UTF-8') : '';
				$new_tc_decoration_radio = isset($_GET['new_decoraation_radio_tc']) ? htmlspecialchars($_GET['new_decoraation_radio_tc'], ENT_QUOTES, 'UTF-8') : '';
				$new_tc_song_radio = isset($_GET['new_song_radio_tc']) ? htmlspecialchars($_GET['new_song_radio_tc'], ENT_QUOTES, 'UTF-8') : '';
				$new_radio_fontfamily = isset($_GET['new_fontfamily']) ? htmlspecialchars($_GET['new_fontfamily'], ENT_QUOTES, 'UTF-8') : '';
				$new_radio_color = isset($_GET['new_color']) ? htmlspecialchars($_GET['new_color'], ENT_QUOTES, 'UTF-8') : '';
				$new_message_res = isset($_GET['new_msg']) ? htmlspecialchars($_GET['new_msg'], ENT_QUOTES, 'UTF-8') : '';
				$new_coupon_code = isset($_GET['new_code']) ? htmlspecialchars($_GET['new_code'], ENT_QUOTES, 'UTF-8') : '';

				if(isset($new_res_product_select_id)){
					$product_res = $new_res_product_select_id;
				}
				$new_radio_layout = $new_layout;
				$new_tc_gift_radio = $new_gift_radio_tc;
			}
			else
			{
				$sett = get_option('new_genral_settings');
				$sett_res = json_decode($sett);

				$new_radio_active = isset($sett_res->{'new_active'}) ? sanitize_text_field($sett_res->{'new_active'}) : '';
				$new_tc_snow_radio = isset($sett_res->{'new_snow_radio_tc'}) ? sanitize_text_field($sett_res->{'new_snow_radio_tc'}) : '';
				$radio_firework = isset($sett_res->{'new_firework'}) ? sanitize_text_field($sett_res->{'new_firework'}) : '';
				$new_tc_santa_radio = isset($sett_res->{'new_santa_radio_tc'}) ? sanitize_text_field($sett_res->{'new_santa_radio_tc'}) : '';
				$new_radio_santa = isset($sett_res->{'new_santa'}) ? sanitize_text_field($sett_res->{'new_santa'}) : '';
				$new_box_type = isset($sett_res->{'new_box'}) ? sanitize_text_field($sett_res->{'new_box'}) : '';
				$new_srt_date = isset($sett_res->{'new_start_date'}) ? sanitize_text_field($sett_res->{'new_start_date'}) : '';
				$new_en_date = isset($sett_res->{'new_end_date'}) ? sanitize_text_field($sett_res->{'new_end_date'}) : '';
				$new_radio_greetings = isset($sett_res->{'new_greetings'}) ? sanitize_text_field($sett_res->{'new_greetings'}) : '';
				$new_gifteffect_res = isset($sett_res->{'new_gifteffect'}) ? sanitize_text_field($sett_res->{'new_gifteffect'}) : '';
				$new_tc_decoration_radio = isset($sett_res->{'new_decoraation_radio_tc'}) ? sanitize_text_field($sett_res->{'new_decoraation_radio_tc'}) : '';
				$new_tc_song_radio = isset($sett_res->{'new_song_radio_tc'}) ? sanitize_text_field($sett_res->{'new_song_radio_tc'}) : '';
				$new_tc_gift_radio = isset($sett_res->{'new_tc_gift_radio'}) ? sanitize_text_field($sett_res->{'new_tc_gift_radio'}) : '';

				$new_set_temp = get_option('new_advance_settings');
				$new_sett_res1 = json_decode($new_set_temp);

				$new_radio_fontfamily = isset($new_sett_res1->{'new_fontfamily'}) ? sanitize_text_field($new_sett_res1->{'new_fontfamily'}) : '';
				$new_radio_color = isset($new_sett_res1->{'new_color'}) ? sanitize_text_field($new_sett_res1->{'new_color'}) : '';
				$new_message_res = isset($new_sett_res1->{'new_msg'}) ? sanitize_text_field($new_sett_res1->{'new_msg'}) : '';
				$new_coupon_code = isset($new_sett_res1->{'new_code'}) ? sanitize_text_field($new_sett_res1->{'new_code'}) : '';

				// Assuming $new_sett_res1->{'new_res_product_select'} is an array
				$product_res = isset($new_sett_res1->{'new_res_product_select'}) && is_array($new_sett_res1->{'new_res_product_select'}) ? array_map('sanitize_text_field', $new_sett_res1->{'new_res_product_select'}) : array();

				$new_radio_layout = isset($new_sett_res1->{'new_layout'}) ? sanitize_text_field($new_sett_res1->{'new_layout'}) : '';
			}
			$date_start=strtotime(str_replace('-', '/', $new_srt_date));
			$date_end=strtotime(str_replace('-', '/', $new_en_date));
			$current_date = strtotime(gmdate('d-m-Y'));
			if(($current_date >= $date_start) && ($current_date <= $date_end)) { $date=true; }
		}
		if($new_radio_active=="new_active")
		{
			if($date==true)
			{
				wp_enqueue_style('newyear1', $path.'css/newyear.css');	
				wp_enqueue_style('christmas2', $path.'../christmas/css/christmus.css');	
				echo '<script type="text/javascript" src="'.esc_attr( $path ).'js/my_newyear.js" defer></script>';
				if($new_tc_song_radio=='enable_song')
				{ echo '
					<script type="text/javascript">
						if(!window.jQuery){
							console.log("jQuery dynamic loded")
						   var script = document.createElement("script");
						   script.type = "text/javascript";
						   script.src = "https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js";
						   document.getElementsByTagName("head")[0].appendChild(script);
						}
						jQuery(document).ready(function(){
							var xmasMusic = document.createElement("audio");
							xmasMusic.setAttribute("src", "'.$song_path.'");
							xmasMusic.setAttribute("autoplay", "autoplay");
							xmasMusic.volume=0.3;
							jQuery.get();
							xmasMusic.addEventListener("load", function(){
								xmasMusic.play();
							}, true);
							xmasMusic.addEventListener("ended", function(){
								this.currentTime = 0;
								this.play();
							}, false);  
							jQuery("body").append("<div id='."'".'sound_switcher'."'".'><i class='."'".'fa fa-play'."'".'></i><i class='."'".'fa fa-pause'."'".'></i></div>");
							jQuery("#sound_switcher").click(function(){
								if (xmasMusic.paused == false){
									xmasMusic.pause();
									jQuery("#sound_switcher").addClass("play_sound_switcher");
								}else{
									xmasMusic.play();
									jQuery("#sound_switcher").removeClass("play_sound_switcher");
								}
							});
						});
					</script>';	
				}				
				if ($new_tc_snow_radio=='new_enable') 
				{
					if ($radio_firework=='firework1') 
					{
						wp_enqueue_script('myjs1', $path.'js/newyear.js');
					}
				}
				if($new_tc_santa_radio=='new_disable_santa'){ $new_radio_santa='';}
				echo '
				<div id="newyear-template">
					<div class="fireworks">';
						if($new_radio_santa=='new_floating')
						{ 	
							echo '<div id="christmas-greetings-santa"><img src="'.esc_attr( $path ).'img/santa-hello.gif"/></div>  ';
						}
						if($new_radio_santa=="new_moving")
						{ 
							echo ' <div id="santa-moving" class="banner-wrap"><div class="cloude-img"></div><div class="santa"><img src="'.esc_attr( $path ).'img/santas.gif"/></div></div>';
						} 
						if( $new_tc_decoration_radio=="new_enable_decoration")
						{
							echo '<div class="decoration_img"><img src="'.esc_attr( $path ).'../img/decoration.png"></div>';
						}
						if($new_tc_gift_radio=='new_gift_enable')
						{ echo '
							<div id="frame-wrapper">
								<div class="hide-div"><i aria-hidden="true">x</i></div>
								<div class="baloon-prt-effect">
									<div class="baloon baloon_tc01"><img src="'.esc_attr( $path ).'img/goldan-baloon.png"/></div>						
									<div class="baloon baloon_tc"><img src="'.esc_attr( $path ).'img/goldan-baloon.png"/></div>						
								</div>
								<div class="star-prt-effect">						
									<div class="star_tc"><img src="'.esc_attr( $path ).'img/snow-flex-big.png"/></div>
									<div class="star_tc01"><img src="'.esc_attr( $path ).'img/big_star.png"/></div>
								</div>				
								<div class="frame-wrap-inner">
									<div class="frame-inner-wrap_01">
										<div class="crackers01"><img src="'.esc_attr( $path ).'img/giphy 03.gif"/></div>
										<div class="frame-inner-wrap_02">
											<div class="frame-inner-wrap_03">
												<h2 class="new_year_msg '.esc_attr( $new_radio_fontfamily ).' '.esc_attr( $new_radio_color ).'">Happy New Year</h2>							
												<p>'.esc_html( $new_message_res ).'</p>
												<ul class="button_tc hide-option ';if($new_radio_greetings=='new_coupon'){ echo esc_attr( "show-option" );	} echo'">
													<li>
														<div class="cuppon-code">
															<a href="#">code:<span id="coupon_text">'.esc_html( $new_coupon_code ).'</span></a>
															<input style="opacity: 0;" type="text" name="clipbord_code" value="" id="clipbord_code">
														</div>
													</li>
													<li>
														<div class="grab-style2"><a id="grab_text" href="#">grab it</a></div> 
													</li>
												</ul>';
												if($new_radio_greetings=='new_product_promo' && class_exists('WooCommerce') && isset($product_res) && $product_res !='')
												{ 

													wp_enqueue_style('new_mycss2', $path.'css/product.css');
													$product_style='';
													$args = array( 'post_type' => 'product','post__in'=>$product_res, 'orderby'=> 'menu_order','order'=> 'ASC','posts_per_page'=> -1,'suppress_filters' => false);
													echo '<div class="show-option">';
													switch ($new_radio_layout) 
													{
														case 'layout1':
															$product_style='product-style4';
															break;
														case 'layout2':
															$product_style='product-style1';
															break;
														case 'layout3':
															$product_style='product-style3';
															break;
													}
													echo '<ul id="product-box" class="'.esc_attr( $product_style ).'">';
										    		$the_query = new WP_Query( $args ); 	       	
													while ( $the_query->have_posts() ) : $the_query->the_post();
														echo '<li>';
														$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
														if($new_radio_layout=='layout1')
														{ 
															echo '<div class="contain"><div class="card"><div class="shine1"></div><div class="img_01"><img src="'.esc_attr( $featured_img_url ).'"/></div><p><a href="#">'.get_the_title().'</a></p></div></div><div class="addtocart">'; woocommerce_template_loop_add_to_cart(); echo '</div>';
														} 
														if($new_radio_layout=='layout2')
														{ 
															echo '<div class="li01"><div class="img_01"><img src="'.esc_attr( $featured_img_url ).'"/></div><a href="#">'.get_the_title().'</a></div><div class="button12">'; woocommerce_template_loop_add_to_cart(); echo '</div>';
														}
														if($new_radio_layout=='layout3')
														{ 
															echo '<div class="li01"><div class="img_01"><img src="'.esc_attr( $featured_img_url ).'"/></div><a href="#">'.get_the_title().'</a></div><div class="button20">'; woocommerce_template_loop_add_to_cart(); echo '</div>';
														}
														echo '</li>';
													endwhile;
													wp_reset_query();
													echo '</ul></div>';
												} echo '									
											</div>						
										</div>
									</div>
								</div>
							</div>
							<div class="gift-btn">
								<div id="click-btn" class="'.esc_attr( $new_gifteffect_res ).' '.esc_attr( $new_box_type ).'">';
									if($new_gifteffect_res=='sparkalffect'){
										echo '<img class="btn_img02" src="'.esc_attr( $path ).'img/sparker.gif"/>';						
									}else{
										echo '<img class="btn_img01" src="'.esc_attr( $path ).'img/Gift-icon3.png"/>';						
									}echo '						
								</div>
							</div>';
						} echo'
					</div>
				</div>';
			}
		}
	}
}