<?php
# 天気情報をLivedoor 天気から取得、整形
$base_url =
"http://weather.livedoor.com/forecast/webservice/json/v1?city=130010";
$json = file_get_contents($base_url, true);
$obj = json_decode($json);
$img = $obj->forecasts[0]->image->url;
$img_width = $obj->forecasts[0]->image->width;
$img_height = $obj->forecasts[0]->image->height;
$max = is_null($obj->forecasts[0]->temperature->max->celsius) ?
	'-' : $obj->forecasts[0]->temperature->max->celsius ;
$min = is_null($obj->forecasts[0]->temperature->min->celsius) ?
	'-' : $obj->forecasts[0]->temperature->min->celsius ;
print <<< DOC_END
<img id="forecast-image" src=$img border="0" hegiht="$img_height" width="$img_width"><br>
$max / $min
<br>
DOC_END;
?>
