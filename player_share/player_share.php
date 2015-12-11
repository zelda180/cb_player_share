<?php

/*
Plugin Name: Player Share
Description: Turn your simple media player into easy to share media player
Author: Saqib Razzaq
Author Website: http://clip-bucket.com/
ClipBucket Version: 2
Version: 1.0
Website: http://clip-bucket.com/
Plugin Type: Watch Videos only
*/
													   
													   

if(!function_exists("share_player"))
{

	function share_player()
	{
		echo '<div class="btn-group plyrbdle" role="group" aria-label="..." style="width: 100%;>
<a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]={videoLink($video)|urlencode}&p[images][0]={get_thumb vdetails=$video}&p[title]=
{$video.title|title|urlencode}&p[summary]={$video.description|description|urlencode}" target="_blank"><button type="button" class="btn btn-primary"
 style="border-radius:0px; border-right:1px solid white; width: 17%; background-color: #24427E; border-color: #24427E;"><i class="fa fa-facebook">
 </i>&nbsp;&nbsp;Facebook</button></a>

<a href="https://twitter.com/share" target="_blank"><button type="button" class="btn btn-primary" style="margin-left: -4px; border-radius:0px; 
border-left:1px solid white; border-right:1px solid white; width: 16%; background-color: #139BCF; border-color: #139BCF;"><i class="fa fa-twitter">
</i>&nbsp;&nbsp;Twitter</button></a>

<a href="https://pinterest.com/pin/create/bookmarklet/?media={get_thumb vdetails=$video}&url={videoLink($video)|urlencode}&description=
{$video.title|title|urlencode}"><button type="button" class="btn btn-primary" style="margin-left: -4px; border-radius:0px; border-right:1px solid white;
 border-left:1px solid white; width: 17%; background-color: #CA1E2A; border-color: #CA1E2A;" data-toggle="" data-target=""><i class="fa fa-pinterest-p"></i>
 &nbsp;&nbsp;Pinterest</button></a>

<a href="https://plus.google.com/share?url={urlencode(videolink($video))}" target="_blank"><button type="button" class="btn btn-primary" style="margin-left: -4px; 
border-radius:0px; border-left:1px solid white; border-right:1px solid white; width: 17%; background-color: #D04437; border-color: #D04437;">
<i class="fa fa-google"></i>&nbsp;&nbsp;Google Plus</button></a>

<a href="http://www.stumbleupon.com/submit?url={videoLink($video)|urlencode}&title={$video.title|title|urlencode}" target="_blank"><button type="button" 
class="btn btn-primary" style="margin-left: -4px; border-radius:0px; border-right:1px solid white; width: 16.66%; background-color: #E46F4E; border-color: #E46F4E;">
<i class="fa fa-stumbleupon"></i></i>&nbsp;&nbsp;Stumble</button></a>

<a href="http://www.reddit.com/submit?url={videoLink($video)|urlencode}&title={$video.title|title|urlencode}" target="_blank"><button type="button" class="btn btn-primary"
 style="margin-left: -4px; border-radius:0px; border-right:1px solid white; width: 17.15%; background-color: black; border-color: black;"><i class="fa fa-reddit"></i>
 </i>&nbsp;&nbsp;Reddit</button></a>
</div>';
	}

	register_anchor_function("share_player","share_player");
}

?>