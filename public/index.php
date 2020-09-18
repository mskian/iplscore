<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="HandheldFriendly" content="True" />
<meta name="theme-color" content="#ffffff">
<link rel="shortcut icon" href="assets/icons/Icon-48.png"/>
<?php $current_page = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 echo '<link rel="canonical" href="'.$current_page.'"/>'; ?>


<title>Live IPL Cricket Score 🏏</title>
<meta name="description" content="Free online - Live IPL Cricket Score." />

<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="Live Score">

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="white-translucent">
<meta name="apple-mobile-web-app-title" content="Live Score">

<link rel="apple-touch-icon" sizes="48x48" href="assets/icons/Icon-48.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/icons/Icon-72.png">
<link rel="apple-touch-icon" sizes="96x96" href="assets/icons/Icon-96.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/icons/Icon-144.png">
<link rel="apple-touch-icon" sizes="192x192" href="assets/icons/Icon-192.png">
<link rel="apple-touch-icon" sizes="256x256" href="assets/icons/Icon-256.png">
<link rel="apple-touch-icon" sizes="512x512" href="assets/icons/Icon-512.png">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.0/css/bulma.min.css" integrity="sha512-ADrqa2PY1TZtb/MoLZIZu/Z/LlPaWQeDMBV73EMwjGam43/JJ5fqW38Rq8LJOVGCDfrJeOMS3Q/wRUVzW5DkjQ==" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/assets/css/app.css">

<link rel="manifest" href="manifest.json">

<link rel="dns-prefetch" href="//fonts.googleapis.com" />
<link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

</head>
<body>

<section class="section">
<div class="container">
<div class="column is-half is-offset-one-quarter">
<div class="card-content content user-form login">
<h1 class="title has-text-centered">Hello IPL 🏏</h1>
<hr>
<p class="has-text-centered">Live IPL Score 🔥</p><br>
<div id="liveipl"></div>
<br>
<div class="buttons is-centered">
<button class="button is-success pwa-button" onClick="window.location.reload(true);">Refresh Score</button>
</div>
<br>
<p class="has-text-danger has-text-weight-bold" style="font-size:14px; margin:15px;">
Auto Refresh Every 1 Minutes <br>
Bookmark our site link - we will Update the live match details every day. Score May delay due to Scraping Content is Not Updated Frequently Just Refresh the page to Get Live Score.
</p>
</div>
</div>
</div>
</section>

<script>
if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('sw.js').then(function(registration) {
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }).catch(function(err) {
            console.log('ServiceWorker registration failed: ', err);
        });
    });
}
</script>

<script src="/assets/js/score.js"></script>

</body>
</html>