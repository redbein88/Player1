<html>
<head>
<meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Player</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/jwplayer/jwplayer.js"></script>
<script type="text/javascript">jwplayer.key="4cFrCsBdTSWp87XH5zQW4VsWi+mFFzQIIqiC4kpnEoU=";</script>

<script language=javascript>
<!--
var redirectagent = navigator.userAgent.toLowerCase();
var redirect_devices = ['vnd.wap.xhtml+xml', 'sony', 'symbian', 'nokia', 'samsung', 'mobile', 'windows ce', 'epoc', 'opera mini', 'nitro', 'j2me', 'midp-', 'cldc-', 'netfront', 'mot', 'up.browser', 'up.link', 'audiovox', 'blackberry', 'ericsson', 'panasonic', 'philips', 'sanyo', 'sharp', 'sie-', 'portalmmm', 'blazer', 'avantgo', 'danger', 'palm', 'series60', 'palmsource', 'pocketpc', 'smartphone', 'rover', 'ipaq', 'au-mic', 'alcatel', 'ericy', 'vodafone', 'wap1', 'wap2', 'teleca', 'playstation', 'lge', 'lg-', 'iphone', 'android', 'htc', 'dream', 'webos', 'bolt', 'nintendo'];
for (var i in redirect_devices) {
if (redirectagent.indexOf(redirect_devices[i]) != -1) {
location.replace("mplayer.php?u=<?=$_GET["u"]?>");
}
}
-->
</script>
</head>
<body topmargin="0" leftmargin="0">


<div class="centerVideo">
<div style="position:relative">

	<div style="position: absolute; width: 160px; height: 41px; z-index: 1; left: 4px; top: 4px" id="layer1">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="https://facebook.com/alltvgoals" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
</div>

	<object type="application/x-shockwave-flash" name="player" data="http://sportlive.ws/assets/swf/player.swf" width="100%" height="100%" id="player" style="visibility: visible;" __idm_id__="918529"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="bgcolor" value="#000000"><param name="wmode" value="opaque">
		<param name="flashvars" value="src=<?=$_GET["u"]?>/playlist.m3u8&amp;plugin_hls=http://sportlive.ws/assets/swf/hls_plugin.swf&amp;javascriptCallbackFunction=onJSBridge&amp;autoPlay=true&amp;controlBarAutoHide=false"?>/playlist.m3u8&amp;plugin_hls=http://sportlive.ws/assets/swf/hls_plugin.swf&amp;javascriptCallbackFunction=onJSBridge&amp;autoPlay=true&amp;controlBarAutoHide=false"?>/playlist.m3u8&amp;plugin_hls=http://sportlive.ws/assets/swf/hls_plugin.swf&amp;javascriptCallbackFunction=onJSBridge&amp;autoPlay=true&amp;controlBarAutoHide=false"></object>
	
		
</div>

</div>


</body>
</html>