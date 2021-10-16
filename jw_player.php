<?php
if (!ini_get('date.timezone')) {
	date_default_timezone_set('Europe/Tirane');
}
// Function by TRC4@USA.COM
function jw_player($url){
$stream_url = @$_GET['url'];
if(!$stream_url)
$stream_url = "";
$width = '100%';
$height = '100%';
{
$player_code = '<!doctype html>
<!----/>
Player Code Generated From https://demo.kodi.al/My_Tools/Players_Tools/Player_Builder/JW_Player/
<!---->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RSS Player</title>
<link rel="shortcut icon" href="https://kodi.al/panel.ico"/>
<link rel="icon" href="https://kodi.al/panel.ico"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="JW Player Code Builder" />
<meta name="author" content="Olsion Bakiaj - Endrit Pano" />
<meta property="og:site_name" content="JW Player Code Builder">
<meta property="og:locale" content="en_US">
<meta name="msapplication-TileColor" content="#0F0">
<meta name="theme-color" content="#0F0">
<meta name="msapplication-navbutton-color" content="#0F0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#0F0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<!-- Include CDN Player --/>
<script src="https://content.jwplatform.com/libraries/Jq6HIbgz.js"></script>
<!-- Include CDN Player -->
<script type="text/javascript" src="https://content.jwplatform.com/libraries/Jq6HIbgz.js"></script>
<style type="text/css">
#player{position:absolute;width:100%!important;height:100%!important;}
</style>
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
jwplayer("player").setup({
playlist: [
    {
    image: "https://radiorecord.ru/upload/rr-logo-podcast.jpg",
    sources: [ 
    {
		file: "'.$stream_url.'",
		type: \'audio/mpeg\',
	},
    ] 
    }
	],
/* LOGO POSITIONS
top-right
bottom-left
bottom-right
bottom-left
*/
logo: {
    file: "https://png.kodi.al/tv/albdroid/logo_bar.png",
    position: "top-right"
},

skin: {
    name: "netflix",
// TO LOAD COLORS FROM CSS SKINS CLOSE THE 3 LINES IN EXTRA CONTROLS COLOR
// EXTRA CONTROLS COLOR
    active: "#0F0",
    inactive: "#0F0",
    background: "transparent"
// EXTRA CONTROLS COLOR
},

/* STRETCHING OPTIONS
RESOLUTION
stretching = object-fit
none =none
exactfit = fill
fill = cover
uniform	= contain*
*/
    //stretching: "uniform",
    stretching: "uniform",
    controls: true,
    displaytitle: true,
    fullscreen: "true",
    height: "100%",
    width: "100%",
    fallback: false,
    repeat: true,
    autostart: false, 
    //primary: "flash",
    primary: "html5",
    aspectratio: "16:9",
    renderCaptionsNatively: false,
    mute: false
});
</script>
</body>
</html>';
}
    return $player_code;
}

echo jw_player("");
?>