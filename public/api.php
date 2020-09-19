<?php

header('Content-type:application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: X-Requested-With');
header('X-Robots-Tag: noindex, nofollow', true);

//$current_page = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//header("Refresh: 20; URL=$current_page");

$msg = [];
$url = '';
$score= [];

if(isset($_GET['url'])){
    $url = $_GET['url'];
}

try
{

    if (empty($url))
    {
        throw new Exception('false');
    }

    $ch = curl_init();
    curl_setopt ( $ch, CURLOPT_URL, $url);
    curl_setopt( $ch, CURLOPT_POST, false);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt( $ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4); 
    curl_setopt( $ch, CURLOPT_ENCODING, 'gzip');
    curl_setopt( $ch, CURLOPT_TIMEOUT, 20);
    curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt( $ch, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Safari/537.36");
    curl_setopt( $ch, CURLOPT_HEADER, false);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    $html_encoded = htmlentities($data);

    $msg['success'] = true;

    if ($string = getSDLink($data))
    {   
        $a = array( 'Summary | ESPNcricinfo.com', 'Report | ESPN.com', 'Summary, Report | ESPNcricinfo.com' );
        $result = str_replace($a, '', $string);
        $final = trim(preg_replace('/\s+/', ' ', $result));
        $score = rtrim($final, ',');
        $msg['livescore']['score'] = $score;

    } elseif ($score == null)
    {
        $msg['livescore']['score'] = 'Not Found';

    } else {

        $msg = false;
    }
    echo json_encode($msg, JSON_PRETTY_PRINT);
}

catch(Exception $e)
{
    echo $e->getMessage();
}

function getSDLink($curl_content)
{
    $regexRateLimit = '/property="og:title"\s*content="([^"]+)"/';
    $regexSrc = '/\<title(.*)\>(.*)\<\/title\>/i';

    if (preg_match($regexRateLimit, $curl_content, $match))
    {
        return $match[1];
    }
    elseif (preg_match($regexSrc, $curl_content, $match))
    {
        return $match[1];
    }
    else
    {
        return false;
    }
}