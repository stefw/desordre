<?

function url2png_v6($url, $args) {
 
  # Get your apikey from http://url2png.com/plans
  $URL2PNG_APIKEY = "xxx";
  $URL2PNG_SECRET = "xxx";
 
  # urlencode request target
  $options['url'] = urlencode($url);
 
  $options += $args;
 
  # create the query string based on the options
  foreach($options as $key => $value) { $_parts[] = "$key=$value"; }
 
  # create a token from the ENTIRE query string
  $query_string = implode("&", $_parts);
  $TOKEN = md5($query_string . $URL2PNG_SECRET);
 
  return "http://beta.url2png.com/v6/$URL2PNG_APIKEY/$TOKEN/png/?$query_string";
 
}
 
 
# usage
$options['force']     = 'false';      # [false,always,timestamp] Default: false
$options['fullpage']  = 'true';      # [true,false] Default: false
$options['thumbnail_max_width'] = 'false';      # scaled image width in pixels; Default no-scaling.
$options['viewport']  = "1280x1024";  # Max 5000x5000; Default 1280x1024

$options2['force']     = 'false';      # [false,always,timestamp] Default: false
$options2['fullpage']  = 'true';      # [true,false] Default: false
$options2['thumbnail_max_width'] = '500';      # scaled image width in pixels; Default no-scaling.
$options2['viewport']  = "480x640";  # Max 5000x5000; Default 1280x1024
$options2['user_agent']  = 'ipad';  # Max 5000x5000; Default 1280x1024


$src = url2png_v6($_GET[url], $options);
$src2 = url2png_v6($_GET[url], $options2);

?>


<img src="<?=$src;?>" />
<img src="<?=$src2;?>" />