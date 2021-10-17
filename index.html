<?php

/*
RSS WEB PLAYER FREE CODE
Copyright (c) 2021 Albdroid.AL
YOU CAN MODIFY IT AS YOU WISH
NOTE: IF YOU ARE INTERESTED TO BUY JSON API CONTACT ME TO TRC4@USA.COM
*/

ob_start();
error_reporting(0);
set_time_limit(0);
if (!ini_get('date.timezone')) {
	date_default_timezone_set('Europe/Tirane');
}
ini_set("user_agent","Mozilla/5.0 (SmartHub; SMART-TV; U; Linux/SmartTV; Maple2012) AppleWebKit/534.7 (KHTML, like Gecko) SmartTV Safari/534.7");
require_once __DIR__."/config.php"; // Player Config
$api_host = "https://paidcodes.albdroid.al/RSS_Builder_Apis/JSON_Enclosure/get_data.php?url=";
// URLS
//http://podcasts.protocol-radio.com/PRRADIO.xml
// http://www.radiorecord.ru/rss.xml
$rss_url = "http://www.radiorecord.ru/rss.xml"; // RSS URL, YOU CAN PLAY MIXED RSS URL'S
$data = file_get_contents($api_host.$rss_url);
$json = json_decode($data);
$channel_title = $json->channel_title;
$channel_description = $json->channel_description;
$channel_site = $json->channel_site;
$channel_image = $json->channel_image;
?>
<html>
<head>
<title><?php if ($channel_title){ echo $channel_title; }else{ echo 'Albdroid APIS Podcast Player'; } ?> Podcasts</title>
<link rel="shortcut icon" href="https://kodi.al/panel.ico" type="image/x-icon">
<link rel="icon" href="https://kodi.al/panel.ico" type="image/x-icon">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- JavaScript Bundle with Popper EXTRA -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
<!-- JavaScript Bundle with Popper EXTRA -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/cjs/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<meta property="og:site_name" content="<?php if ($channel_title){ echo $channel_title; }else{ echo 'Albdroid APIS Podcast Player'; } ?>"/>
<meta property="og:type" content="tv_show"/>
<meta property="og:image" content="<?php if ($channel_image){ echo $channel_image; }else{ echo 'https://png.kodi.al/tv/albdroid/logo_bar.png'; } ?>"/>
<meta name="title" property="og:title" content="<?php if ($channel_title){ echo $channel_title; }else{ echo 'Albdroid APIS Podcast Player'; } ?>">
<meta name="description" property="og:description" content="<?php if ($channel_title){ echo $channel_title; }else{ echo 'Albdroid APIS Podcast Player'; } ?>">
</head>
<body style="background-color: #000" >
<div class="container-fluid">
<div class="row">
<div class="col-md-8">
<div class="card text-lime" style="box-shadow: 5px 0 9px -5px rgba(0,0,0,0.21);background-color: #000">
<div class="card-header" style="background-color: #000; border: 1px solid lime; color: #0F0;">
<h5><center><?php if ($channel_title){ echo $channel_title; }else{ echo 'Albdroid APIS Podcast Player'; } ?></center></h5>
</div>
<div class="card-body" style="background-color: #000; border: 1px solid lime; color: #0F0;">
<div class="row" style="background-color: #000; border: 1px solid lime; color: #0F0;">
<?php
foreach ($json->streaming_data as $item) {
$thumbnail = $item->stream_thumbnail;
$title = $item->stream_title;
$stream_url = $item->stream_url;
$stream_category = $item->stream_category;
$published_date = $item->published_date;

$stream_url = str_replace(
	// REPLACE FROM
    array(" "),
	// REPLACE TO
    array("%20"),
    $stream_url
);

// clappr_player.php?url=https://promodj.com/download/7234752/EDM%20Radio%20Show%20%23250%20%28promodj.com%29.mp3?podcast
/*
$stream_url = str_replace(
	// REPLACE FROM
    array('?podcast'),
	// REPLACE TO
    array(''),
    $stream_url
);
*/

    echo '<div class="col-md-4" style="margin-bottom: 10px;">';
    echo '<a href="'.$playing_player.$stream_url.'" style="text-decoration: none;"><br>';
    echo '<div class="card" style="padding: 3px; background-color: #111; border: 1px dotted lime; color: #0F0">';
    echo '<img class="card-img-top" height="90" src="'.$thumbnail.'" alt="'.$title.'" title="'.$title.'">';
    echo '<div class="card-body"><p class="text-lime" style="font-weight: bold">';
    echo $title.'<br>';
	echo '<small>'.$published_date.'</small>';
	echo '</div></div></a></div>';
}
?>
</div>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card text-lime" style="box-shadow: 1px 0 9px -5px rgba(0,0,0,0.21); background-color: #000 border: 1px dotted lime; color: #0F0;">
<div class="card-header" style="background-color: #000; border: 1px solid lime; color: #0F0;">
<img src="<?php if ($channel_image){ echo $channel_image; }else{ echo 'https://png.kodi.al/tv/albdroid/logo_bar.png'; } ?>" style="width: 298px;">
<hr>
<h3><?php if ($channel_title){ echo $channel_title; }else{ echo 'Albdroid APIS Podcast Player'; } ?></h3>
<span class="badge badge-primary">Electro</span>
<span class="badge badge-primary">Dance</span>
<span class="badge badge-primary">Music</span>
<span class="badge badge-primary">ETC...</span>
<div class="overflow-hidden text-truncate"><?= $channel_site; ?>
<p class="overflow-hidden text-truncate"><?= $channel_description; ?>	
</div>
</div>
</div>
</body>
</html>
<?php ob_end_flush(); ?>
