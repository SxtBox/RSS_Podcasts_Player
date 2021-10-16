<?php
if (!ini_get('date.timezone')) {
	date_default_timezone_set('Europe/Tirane');
}
// Function by TRC4@USA.COM
function clappr_player($url){
$stream_url = @$_GET['url'];
if(!$stream_url)
$stream_url = "";
$width = '100%';
$height = '100%';
{
$player_code = '<html>
<!----/>
Player Code Generated From https://demo.kodi.al/My_Tools/Players_Tools/Player_Builder/Clappr_Player/
<!---->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>RSS Player</title>
<link rel="shortcut icon" href="https://kodi.al/panel.ico"/>
<link rel="icon" href="https://kodi.al/panel.ico"/>
<script src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
<style type="text/css">
body,td,th {
	color: #0F0;
}
body {
	background-color: #000;
}
a:link {
	color: #0FC;
}
a:visited {
	color: #3F6;
}
a:hover {
	color: #09F;
}
a:active {
	color: #009;
}
</style>
</head>
<body>
<div id="player"></div>
<script>
var player = new Clappr.Player({
source: "'.$stream_url.'",
mimeType: \'audio/mpeg\',
poster: "https://radiorecord.ru/upload/rr-logo-podcast.jpg",
watermark: "https://png.kodi.al/tv/albdroid/logo_bar.png",
position: "top-right",
parentId: "#player",
playInline: true,
autoPlay: true,
mediacontrol: {seekbar: "#0F0", buttons: "#0F0"},
width: "'.$width.'",
height: "'.$height.'"
});
</script>
</body>
</html>';
}
    return $player_code;
}

echo clappr_player("");
?>