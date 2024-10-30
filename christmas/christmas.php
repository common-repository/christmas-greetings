<?php
class techno_cristmas
{
	function __construct()
    {
       	$this->cristmas_gift();
    }
	function cristmas_gift()
	{
		$new_preview='';
		$radio_active='';
		$preview_techno='';
		$preview_gift_tc='';
		$date=false;
		$path =  plugin_dir_url( __FILE__ );
		$song_path = $path.'../song/christmas-music.mp3';
		if( $new_preview!='new_preview') 
		{
			if( $preview_techno=='preview') 
			{
				echo '<script type="text/javascript">jQuery(document).ready(function(){jQuery("#wpadminbar").addClass("hide-option");});</script>';
				if(isset($preview_tc))
				{
					$preview_gift_tc=$preview_tc;
				}
				if($preview_gift_tc=='preview_gift')
				{
					echo '<script type="text/javascript">jQuery(document).ready(function(){jQuery("#div2").css("display" , "block");jQuery("#snow").addClass("open");});</script>';
				}

				// Sanitize and manually extract parameters from $_GET
				$product_res = '';
				$date = true;
				$radio_active = 'active';

				$radio_snow = isset($_GET['snow']) ? htmlspecialchars($_GET['snow'], ENT_QUOTES, 'UTF-8') : '';
				$radio_santa = isset($_GET['santa']) ? htmlspecialchars($_GET['santa'], ENT_QUOTES, 'UTF-8') : '';
				$radio_font_snow = isset($_GET['snow_font']) ? htmlspecialchars($_GET['snow_font'], ENT_QUOTES, 'UTF-8') : '';
				$color_snow = isset($_GET['snow_color']) ? htmlspecialchars($_GET['snow_color'], ENT_QUOTES, 'UTF-8') : '';
				$radio_greetings = isset($_GET['greetings']) ? htmlspecialchars($_GET['greetings'], ENT_QUOTES, 'UTF-8') : '';
				$srt_date = isset($_GET['start_date']) ? sanitize_date($_GET['start_date'], ENT_QUOTES, 'UTF-8') : '';
				$en_date = isset($_GET['end_date']) ? sanitize_date($_GET['end_date'], ENT_QUOTES, 'UTF-8') : '';
				$gifteffect_res = isset($_GET['gifteffect']) ? htmlspecialchars($_GET['gifteffect'], ENT_QUOTES, 'UTF-8') : '';
				$box_type = isset($_GET['box']) ? htmlspecialchars($_GET['box'], ENT_QUOTES, 'UTF-8') : '';
				$radio_fontfamily = isset($_GET['fontfamily']) ? htmlspecialchars($_GET['fontfamily'], ENT_QUOTES, 'UTF-8') : '';
				$radio_color = isset($_GET['color']) ? htmlspecialchars($_GET['color'], ENT_QUOTES, 'UTF-8') : '';
				$message_res = isset($_GET['msg']) ? htmlspecialchars($_GET['msg'], ENT_QUOTES, 'UTF-8') : '';
				$coupon_code = isset($_GET['code']) ? htmlspecialchars($_GET['code'], ENT_QUOTES, 'UTF-8') : '';

				if (isset($_GET['res_product_select'])) {
						$product_res = htmlspecialchars($_GET['res_product_select'], ENT_QUOTES, 'UTF-8');
				}

				$radio_layout = isset($_GET['layout']) ? htmlspecialchars($_GET['layout'], ENT_QUOTES, 'UTF-8') : '';
				$tc_decoration_radio = isset($_GET['decoraation_radio_tc']) ? htmlspecialchars($_GET['decoraation_radio_tc'], ENT_QUOTES, 'UTF-8') : '';
				$tc_song_radio = isset($_GET['song_radio_tc']) ? htmlspecialchars($_GET['song_radio_tc'], ENT_QUOTES, 'UTF-8') : '';
				$tc_snow_radio = isset($_GET['snow_radio_tc']) ? htmlspecialchars($_GET['snow_radio_tc'], ENT_QUOTES, 'UTF-8') : '';
				$tc_santa_radio = isset($_GET['santa_radio_tc']) ? htmlspecialchars($_GET['santa_radio_tc'], ENT_QUOTES, 'UTF-8') : '';
				$tc_gift_radio = isset($_GET['gift_radio_tc']) ? htmlspecialchars($_GET['gift_radio_tc'], ENT_QUOTES, 'UTF-8') : '';
			}
			else
			{	/****get value from database*****/
				$sett = get_option('genral_settings');
				$sett_res = json_decode($sett);

				$radio_active = isset($sett_res->active) ? sanitize_text_field($sett_res->active) : '';
				$radio_snow = isset($sett_res->snow) ? sanitize_text_field($sett_res->snow) : '';
				$radio_font_snow = isset($sett_res->snow_font) ? sanitize_text_field($sett_res->snow_font) : '';
				$color_snow = isset($sett_res->snow_color) ? sanitize_text_field($sett_res->snow_color) : '';
				$radio_santa = isset($sett_res->santa) ? sanitize_text_field($sett_res->santa) : '';
				$radio_greetings = isset($sett_res->greetings) ? sanitize_text_field($sett_res->greetings) : '';
				$srt_date = isset($sett_res->start_date) ? sanitize_text_field($sett_res->start_date) : '';
				$en_date = isset($sett_res->end_date) ? sanitize_text_field($sett_res->end_date) : '';
				$gifteffect_res = isset($sett_res->gifteffect) ? sanitize_text_field($sett_res->gifteffect) : '';
				$box_type = isset($sett_res->box) ? sanitize_text_field($sett_res->box) : '';
				$tc_snow_radio = isset($sett_res->snow_radio_tc) ? sanitize_text_field($sett_res->snow_radio_tc) : '';
				$tc_decoration_radio = isset($sett_res->decoraation_radio_tc) ? sanitize_text_field($sett_res->decoraation_radio_tc) : '';
				$tc_song_radio = isset($sett_res->song_radio_tc) ? sanitize_text_field($sett_res->song_radio_tc) : '';
				$tc_santa_radio = isset($sett_res->santa_radio_tc) ? sanitize_text_field($sett_res->santa_radio_tc) : '';
				$tc_gift_radio = isset($sett_res->tc_gift_radio) ? sanitize_text_field($sett_res->tc_gift_radio) : '';

				$set_temp = get_option('advance_settings');
				$sett_res1 = json_decode($set_temp);

				$radio_fontfamily = isset($sett_res1->fontfamily) ? sanitize_text_field($sett_res1->fontfamily) : '';
				$radio_color = isset($sett_res1->color) ? sanitize_text_field($sett_res1->color) : '';
				$message_res = isset($sett_res1->msg) ? sanitize_text_field($sett_res1->msg) : '';
				$coupon_code = isset($sett_res1->code) ? sanitize_text_field($sett_res1->code) : '';

				// Assuming $sett_res1->res_product_select is an array
				$product_res = isset($sett_res1->res_product_select) && is_array($sett_res1->res_product_select) ? array_map('sanitize_text_field', $sett_res1->res_product_select) : array();

				$radio_layout = isset($sett_res1->layout) ? sanitize_text_field($sett_res1->layout) : '';
			}
			$date_start=strtotime(str_replace('-', '/', $srt_date));
			$date_end=strtotime(str_replace('-', '/', $en_date));
			$current_date = strtotime(gmdate('d-m-Y'));
			if(($current_date >= $date_start) && ($current_date <= $date_end)){ $date=true; }
		}		
		if($radio_active=="active")
		{
			if($date==true)
			{	
				wp_enqueue_style('mycss2', $path.'css/christmus.css');
				echo '<script type="text/javascript" src="'.$path.'js/cristmas.js" defer></script>';
				if($tc_song_radio=='enable_song')
				{ echo '
					<script type="text/javascript">
						if(!window.jQuery){
							console.log("jQuery dynamic loded")
						   var script = document.createElement("script");
						   script.type = "text/javascript";
						   script.src = "https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js";
						   document.getElementsByTagName("head")[0].appendChild(script);
						}
						jQuery(document).ready(function() 
						{
							var xmasMusic = document.createElement("audio");
							xmasMusic.setAttribute("src", "'.$song_path.'");
							xmasMusic.setAttribute("autoplay", "autoplay");
							xmasMusic.volume=0.3;
							jQuery.get();
							xmasMusic.addEventListener("load", function() 
							{
								xmasMusic.play();
							}, true);
							xmasMusic.addEventListener("ended", function() 
							{
								this.currentTime = 0;
								this.play();
							}, false);  
							jQuery("body").append("<div id='."'".'sound_switcher'."'".'><i class='."'".'fa fa-play'."'".'></i><i class='."'".'fa fa-pause'."'".'></i></div>");
							jQuery("#sound_switcher").click(function() 
							{
								if (xmasMusic.paused == false) 
								{
									xmasMusic.pause();
									jQuery("#sound_switcher").addClass("play_sound_switcher");
								} 
								else 
								{
									xmasMusic.play();
									jQuery("#sound_switcher").removeClass("play_sound_switcher");
								}
							});
						});
					</script>';	
				}
				if($tc_snow_radio=='enable')
				{
					if($radio_snow=='light')
					{
						echo '<script type="text/javascript" src="'.$path.'js/snowstorm.js" defer></script>';
					}
					else
					{
					 	if($radio_snow=='dark')
					 	{
							echo '<div id="snowflakeContainer"><p class="snowflake" style="color: rgb(239, 239, 239);">*</p></div>';
					 	}
					 	else
					 	{
					 		echo '<div id="snowflakeContainer"><p class="snowflake" style="color:#'.$color_snow.' !important;">'.$radio_font_snow.'</p></div>';
					 	}
						echo '<script type="text/javascript" src="'.$path.'js/snow01.js" defer></script>';
					}					
				}
				echo '<div class="template_style">';
					if( $tc_decoration_radio=="enable_decoration")
					{
						echo '<div class="decoration_img"><img src="'.$path.'../img/decoration.png"></div>';
					}
					if($tc_santa_radio=='disable_santa') { $radio_santa=''; }
					if($radio_santa=='floating')
					{ 
						echo '<div id="christmas-greetings-santa"><img src="'.$path.'img/santa-hello.gif"/></div>';
					}
					if($radio_santa=="moving")
					{ 
						echo' <div id="santa-moving" class="banner-wrap "><div class="cloude-img"></div><div class="santa"><img src="'.$path.'img/santas.gif"/></div></div>';
					} 
					if($tc_gift_radio=='gift_enable')
					{   echo '		
						<div id="div2" style="display:'.$preview_gift_tc.'">
							<div class="hide-div" >
								<i aria-hidden="true">x</i>
							</div>
							<div class="message-box-part">
								<div class="tree-prt">
									<div class="tree-img img01"><img src="'.$path.'img/sonw-flex-a.png"/></div><div class="tree-img img02"><img src="'.$path.'img/sonw-flex-a.png"/></div>
									<div class="tree-img img03"><img src="'.$path.'img/sonw-flex-b.png"/></div><div class="tree-img img04"><img src="'.$path.'img/sonw-flex-a.png"/></div>
									<div class="tree-img img05"><img src="'.$path.'img/sonw-flex-a.png"/></div><div class="tree-img img06"><img src="'.$path.'img/sonw-flex-a.png"/></div>
									<div class="tree-img img07"><img src="'.$path.'img/sonw-flex-b.png"/></div><div class="tree-img img08"><img src="'.$path.'img/sonw-flex-a.png"/></div>
									<div class="tree-img img09"><img src="'.$path.'img/sonw-flex-b.png"/></div><div class="tree-img img10"><img src="'.$path.'img/sonw-flex-a.png"/></div>
									<div class="tree-img img11"><img src="'.$path.'img/sonw-flex-a.png"/></div><div class="tree-img img12"><img src="'.$path.'img/sonw-flex-b.png"/></div>
									<div class="tree-img img13"><img src="'.$path.'img/sonw-flex-b.png"/></div><div class="tree-img img14"><img src="'.$path.'img/sonw-flex-a.png"/></div>
									<div class="tree-img img15"><img src="'.$path.'img/sonw-flex-b.png"/></div><div class="tree-img img16"><img src="'.$path.'img/sonw-flex-a.png"/></div>
								</div>
								<div class="circle-wrap">
									<img class="cr01" src="'.$path.'img/glow-b.png"/><img class="cr02" src="'.$path.'img/glow-b.png"/><img class="cr03" src="'.$path.'img/glow-b.png"/>
									<img class="cr04" src="'.$path.'img/glow-b.png"/><img class="cr05" src="'.$path.'img/glow-b.png"/><img class="cr06" src="'.$path.'img/glow-b.png"/>
									<img class="cr07" src="'.$path.'img/glow-b.png"/><img class="cr08" src="'.$path.'img/glow-b.png"/><img class="cr09" src="'.$path.'img/glow-b.png"/>
									<img class="cr10" src="'.$path.'img/glow-b.png"/><img class="cr11" src="'.$path.'img/glow-b.png"/><img class="cr12" src="'.$path.'img/glow-b.png"/>
									<img class="cr13" src="'.$path.'img/glow-b.png"/><img class="cr14" src="'.$path.'img/glow-b.png"/><img class="cr15" src="'.$path.'img/glow-b.png"/>
									<img class="cr16" src="'.$path.'img/glow-b.png"/><img class="cr17" src="'.$path.'img/glow-b.png"/><img class="cr18" src="'.$path.'img/glow-b.png"/>
									<img class="cr19" src="'.$path.'img/glow-b.png"/><img class="cr20" src="'.$path.'img/glow-b.png"/><img class="cr21" src="'.$path.'img/glow-b.png"/>
									<img class="cr22" src="'.$path.'img/glow-b.png"/><img class="cr23" src="'.$path.'img/glow-b.png"/><img class="cr24" src="'.$path.'img/glow-b.png"/>
									<img class="cr25" src="'.$path.'img/glow-b.png"/><img class="cr26" src="'.$path.'img/glow-b.png"/><img class="cr27" src="'.$path.'img/glow-b.png"/>
									<img class="cr28" src="'.$path.'img/glow-b.png"/><img class="cr29" src="'.$path.'img/glow-b.png"/>
								</div>
								<div class="baloon-prt">
									<div class="baloon baloon-left"><img src="'.$path.'img/baloon.png"/></div>
									<div class="glow left-glow"><img src="'.$path.'img/glow.png"/></div>
									<div class="baloon baloon-right"><img src="'.$path.'img/baloon.png"/></div>
									<div class="glow right-glow"><img src="'.$path.'img/glow.png"/></div>
								</div>		
								<div class="frame-content">
									<div class="frame-inner-wrap">
										<div class="frame-inner-wrap01">
											<h2 class="'.$radio_fontfamily.' '.$radio_color.'">merry christmas</h2>			
											<p class="msg_txt">'.$message_res.' </p>';
											if($radio_greetings=='coupon'){ echo '
												<ul class="button_01" >
													<li>
														<div class="cuppon-code">
															<a href="#">code:<span id="coupon_text">'.$coupon_code.'</span></a>
															<input style="opacity: 0;" type="text" name="clipbord_code" value="" id="clipbord_code">
														</div>
													</li>
													<li>
														<div class="grab-style2"><a id="grab_text" href="#">grab it</a></div> 
													</li>
												</ul>';
											}
											if($radio_greetings=='product_promo' && class_exists('WooCommerce') && isset($product_res) && $product_res!='')
											{ 
												wp_enqueue_style('mycss3', $path.'css/product.css');
												$product_style='';
												$args = array( 'post_type' => 'product','post__in'=>$product_res, 'orderby'=> 'menu_order','order'=> 'ASC','posts_per_page'=> -1 ,'suppress_filters' => false);
												echo '<div class="show-option">';
												switch ($radio_layout) 
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
												echo '<ul id="product-box" class="'.$product_style.'">';
									    		$the_query = new WP_Query( $args ); 	       	
												while ( $the_query->have_posts() ) : $the_query->the_post();
													$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
													echo'<li>';
													if($radio_layout=='layout1')
													{ 
														echo '<div class="contain"><div class="card"><div class="shine1"></div><div class="img_01"><img src="'.$featured_img_url.'"/></div><p><a href="#">'.get_the_title().'</a></p></div></div><div class="addtocart">'; woocommerce_template_loop_add_to_cart(); echo '</div>';
													} 
													if($radio_layout=='layout2')
													{ 
														echo '<div class="li01"><div class="img_01"><img src="'.$featured_img_url.'"/></div><a href="#">'.get_the_title().'</a></div><div class="button12">'; woocommerce_template_loop_add_to_cart(); echo '</div>';
													}
													if($radio_layout=='layout3')
													{ 
														echo '<div class="li01"><div class="img_01"><img src="'.$featured_img_url.'"/></div><a href="#">'.get_the_title().'</a></div><div class="button20">'; woocommerce_template_loop_add_to_cart(); echo '</div>';
													}
													echo '</li>';
												endwhile;
												wp_reset_query();
												echo '</ul></div>';
											} echo'
										</div>
									</div>
								</div>
							</div>
						</div> 
						<div id="click-btn" class="'.$gifteffect_res.' '.$box_type.'">';
							if($gifteffect_res=='sparkalffect')
							{
								echo '<img class="btn_img02" src="'.$path.'img/sparker.gif"/>';						
							}
							else
							{
								echo '<img class="btn_img01" src="'.$path.'img/Gift-icon3.png"/>';						
							}echo '
						</div>';
					} 
				echo '</div>';
			}
		}				
	}
}?>