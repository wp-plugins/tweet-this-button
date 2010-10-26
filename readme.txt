=== Tweet This! Button ===
Contributors: georgejipa
Donate link: http://www.georgejipa.com
Tags: twitter, tweet this, twitter button
Requires at least: 2.5
Tested up to: 3.0.1
Stable tag: 1.0
Version: 1.0

== Description ==

By using this plugin you can display on your blog, "Tweet this! Button", the official button from Twitter

== Installation ==

1. Upload the plugin into "/wp-content/plugins/" directory
2. Active it from "Plugins" dashboard
3. Insert the following function into your blog template (you should change georgejipa with your own twitter account)

3.1. For horizontal button:
 
if(function_exists("tweet_button")) { echo tweet_button('georgejipa'); }

3.2. For vertical button:

if(function_exists("tweet_button")) { echo tweet_button('georgejipa', 'vertical'); }

3.3. For simple button (without count):

if(function_exists("tweet_button")) { echo tweet_button('georgejipa', 'none'); } 

== Frequently Asked Questions ==

Q: http://georgejipa.com/plugins/tweet-this-button/

== Screenshots ==

1. screenshot-1.jpg

== Upgrade Notice ==

No updates!

== Changelog ==

No updates!

