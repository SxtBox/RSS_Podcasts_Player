<?php
/*
RSS WEB PLAYER FREE CODE
Copyright (c) 2021 Albdroid.AL
YOU CAN MODIFY IT AS YOU WISH
NOTE: YOU CAN CHANGE 'feed_class.php' BECAUSE IT IS VERY OLD AND VERY SLOW
KY INDEX PUNON ME feed_class.php EDHE KA PROBLEM NE LIVE SERVER, NE SISA LINKS BEN GET EDHE NE DISA JO
*/

if (!ini_get('date.timezone')) {
	date_default_timezone_set('Europe/Tirane');
}
require_once __DIR__."/feed_class.php"; // this class is very slow
// SITE IS PROTECTED WITH Cloudflare
$rss = Feed::loadRss("https://www.radiorecord.ru/rss.xml"); // RSS URL
require_once __DIR__."/config.php"; // Player Config
?>
<html>
<head>
<title>Radio Record Podcasts</title>
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
<meta property="og:site_name" content="Radio Record Podcasts"/>
<meta property="og:type" content="tv_show"/>
<meta property="og:image" content="https://radiorecord.ru/upload/rr-logo-podcast.jpg"/>
<meta name="title" property="og:title" content="Radio Record Podcasts">
<meta name="description" property="og:description" content="Radio Record Podcasts">
</head>
<body style="background-color: #000" >
<div class="container-fluid">
<div class="row">
<div class="col-md-8">
<div class="card text-lime" style="box-shadow: 5px 0 9px -5px rgba(0,0,0,0.21);background-color: #000">
<div class="card-header" style="background-color: #000; border: 1px solid lime; color: #0F0;">
<h5><center>Radio Record Podcasts</center></h5>
</div>
<div class="card-body" style="background-color: #000; border: 1px solid lime; color: #0F0;">
<div class="row" style="background-color: #000; border: 1px solid lime; color: #0F0;">
<?php
foreach ($rss->item as $item) {
$stream_url = $item->enclosure['url'];
$title = $item->title;
$published_date = $item->pubDate;
$description = $item->description;
$thumbnail = "https://radiorecord.ru/upload/rr-logo-podcast.jpg";
    echo '<div class="col-md-4" style="margin-bottom: 10px;">';
    echo '<a href="'.$playing_player.$stream_url.'" style="text-decoration: none;"><br>';
    echo '<div class="card" style="padding: 3px; background-color: #111; border: 1px dotted lime; color: #0F0">';
    echo '<img class="card-img-top" height="90" src="'.$thumbnail.'" alt="'.$item->title.'" title="'.$item->title.'">';
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
<img src="https://radiorecord.ru/upload/rr-logo-podcast.jpg" style="width: 298px;">
<hr>
<h3>Live Club</h3>
<span class="badge badge-primary">Electro</span>
<span class="badge badge-primary">Dance</span>
<span class="badge badge-primary">Music</span>
<span class="badge badge-primary">ETC...</span>
<p class="overflow-hidden text-truncate">Radiorecord.RU</p>
</p>	
</div>
</div>
</body>
</html>
