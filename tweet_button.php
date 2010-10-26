<?php
  /**
   *  Plugin Name: Tweet This! Button
   *  Version: 1.0
   *  Plugin URI: http://georgejipa.com/plugins/tweet-this-button/
   *  Description: By using this plugin you can display on your blog, "Tweet this! Button", the official button from Twitter
   *  Author: GeorgeJipa
   *  Author URI: http://georgejipa.com/        
   **/
   
  function tweet_button_js(){
	 echo '<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>';
  }

  function tweet_button($account, $data_count = 'horizontal'){
	  $button  = '<div>';
    $button .= '<a href="http://twitter.com/share" class="twitter-share-button" data-url="'.get_permalink().'" data-via="'.$account.'" data-text="'.get_the_title().'" data-count="'.$data_count.'">Tweet</a>';
    $button .= '</div>';
	  return $button;
  }

  add_action('wp_head', 'tweet_button_js');
?>