<?php
/*
Plugin Name: Saoshyant Social  
Author: Saoshyant
*/ 
  
/********************************************************************
Social Icon
*********************************************************************/
function saoshyant_social($id,$none= false){
 	global $smof_data;
 	$social_align = 'right';
  	$azar_social_align = !empty( $smof_data[ $id.'_social_align' ] ) ? $smof_data[ $id.'_social_align' ]:   $social_align;
	
	
	?>
    
    <div class="rd-social rd-social-<?php echo esc_attr($azar_social_align);?> <?php if(empty($none)) echo 'rd-social-fa';?>">
    	<ul>
        <?php if(!empty( $smof_data[$id.'_social_rss'])){ ?>
            <li><a class="fa-rss" href="<?php echo esc_url($smof_data[$id.'_social_rss']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/rss.jpg" alt="rss" width="64" height="64"/><?php }?></a></li>
        <?php } ?>
        
        <?php if(!empty( $smof_data[$id.'_social_facebook'])){ ?>
            <li><a class="fa-facebook" href="<?php echo esc_url($smof_data[$id.'_social_facebook']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/facebook.jpg" alt="facebook" width="64" height="64" /><?php }?></a></li>
        <?php } ?>
    
        <?php if(!empty( $smof_data[$id.'_social_twitter'])){ ?>
            <li><a class="fa-twitter" href="<?php echo esc_url($smof_data[$id.'_social_twitter']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/twitter.jpg" alt="twitter" width="64" height="64" /><?php }?></a></li>
        <?php } ?>
        
         <?php if(!empty( $smof_data[$id.'_social_googleplus'])){ ?>
            <li><a  class="fa-google-plus" href="<?php echo esc_url($smof_data[$id.'_social_googleplus']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/googleplus.jpg" alt="googleplus" width="64" height="64" /><?php }?></a></li>
         <?php } ?>
         
         <?php if(!empty( $smof_data[$id.'_social_telegram'])){ ?>
            <li><a class="fa-telegram" href="<?php echo esc_url($smof_data[$id.'_social_telegram']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/telegram.jpg" alt="telegram" width="64" height="64" /><?php }?></a></li>
         <?php } ?>
  
        
        <?php if(!empty( $smof_data[$id.'_social_dribbble'])){ ?>
            <li><a class="fa-dribbble" href="<?php echo esc_url($smof_data[$id.'_social_dribbble']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/dribbble.jpg" alt="dribbble" width="64" height="64" /><?php }?></a></li>
        <?php } ?>
        
        <?php if(!empty( $smof_data[$id.'_social_linkedIn'])){ ?>
            <li><a class="fa-linkedin" href="<?php echo esc_url($smof_data[$id.'_social_linkedIn']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/linkedin.jpg"  alt="linkedin" width="64" height="64" /><?php }?></a></li>
        <?php } ?>
        
        <?php if(!empty( $smof_data[$id.'_social_dropbox'])){ ?>
            <li><a class="fa-dropbox" href="<?php echo esc_url($smof_data[$id.'_social_dropbox']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/dropbox.jpg"  alt="dropbox" width="64" height="64"  /><?php }?></a></li>
        <?php } ?>
        
        <?php if(!empty( $smof_data[$id.'_social_flickr'])){ ?>
            <li><a class="fa-flickr"  href="<?php echo esc_url($smof_data[$id.'_social_flickr']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/flickr.jpg"  alt="flickr" width="64" height="64" /><?php }?></a></li>
        <?php } ?>
        
        <?php if(!empty( $smof_data[$id.'_social_deviantart'])){ ?>
            <li><a class="fa-deviantart" href="<?php echo esc_url($smof_data[$id.'_social_deviantart']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/deviantart.jpg"  alt="deviantart" width="64" height="64" /><?php }?></a></li>
        <?php } ?>
        
        <?php if(!empty( $smof_data[$id.'_social_youTube'])){ ?>
            <li><a  class="fa-youtube" href="<?php echo esc_url($smof_data[$id.'_social_youTube']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/youtube.jpg"  alt="youtube" width="64" height="64" /><?php }?></a></li>
        <?php } ?>
         
        <?php if(!empty( $smof_data[$id.'_social_vimeo'])){ ?>
            <li><a class="fa-vimeo" href="<?php echo esc_url($smof_data[$id.'_social_vimeo']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/vimeo.jpg"  alt="vimeo" width="64" height="64" /><?php }?></a></li>
        <?php } ?>
        
        <?php if(!empty( $smof_data[$id.'_social_yahoo'])){ ?>
            <li><a  class="fa-yahoo" href="<?php echo esc_url($smof_data[$id.'_social_yahoo']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/yahoo.jpg"  alt="yahoo" width="64" height="64" /><?php }?></a></li>
        <?php } ?>
        
        <?php if(!empty( $smof_data[$id.'_social_skype'])){ ?>
            <li><a  class="fa-skype"  href="<?php echo esc_url($smof_data[$id.'_social_skype']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/skype.jpg"  alt="skype" width="64" height="64" /><?php }?></a></li>
        <?php } ?>
      
        <?php if(!empty( $smof_data[$id.'_social_digg'])){ ?>
            <li><a class="fa-digg"  href="<?php echo esc_url($smof_data[$id.'_social_digg']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/digg.jpg"  alt="digg" width="64" height="64" /><?php }?></a></li>
        <?php } ?>
        
        <?php if(!empty( $smof_data[$id.'_social_stumbleupon'])){ ?>
            <li class="fa-stumbleupon"><a href="<?php echo esc_url($smof_data[$id.'_social_stumbleupon']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/stumbleupon.jpg"  alt="stumbleupon" width="64" height="64" /><?php }?></a></li>
        <?php } ?>
        
        <?php if(!empty( $smof_data[$id.'_social_tumblr'])){ ?>
            <li><a i class="fa-tumblr" href="<?php echo esc_url($smof_data[$id.'_social_tumblr']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/tumblr.jpg"  alt="tumblr" width="64" height="64" /><?php }?></a></li>
        <?php } ?>

        
        <?php if(!empty( $smof_data[$id.'_social_pinterest'])){ ?>
            <li><a class="fa-pinterest" href="<?php echo esc_url($smof_data[$id.'_social_pinterest']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/pinterest.jpg" alt="pinterest" width="64" height="64" /><?php }?></a></li>
        <?php } ?>
        
        <?php if(!empty( $smof_data[$id.'_social_instagram'])){ ?>
            <li><a  class="fa-instagram" href="<?php echo esc_url($smof_data[$id.'_social_instagram']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/instagram.jpg" alt="instagram" width="64" height="64" /><?php }?></a></li>
        <?php } ?>
        
        <?php if(!empty( $smof_data[$id.'_social_paypal'])){ ?>
            <li><a class="fa-paypal" href="<?php echo esc_url($smof_data[$id.'_social_paypal']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/paypal.jpg" alt="paypal" width="64" height="64" /><?php }?></a></li>
        <?php } ?>
        
        <?php if(!empty( $smof_data[$id.'_social_behance'])){ ?>
            <li><a  class="fa-behance" href="<?php echo esc_url($smof_data[$id.'_social_behance']);  ?>"><?php if(!empty($none)){?><img src="<?php echo plugin_dir_url( __FILE__ )?>/images/behance.jpg" alt="behance" width="64" height="64"/><?php }?></a></li>
        <?php } ?>
        </ul>
     </div>
    <?php 
}?>