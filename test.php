
<?php
 
$url="http://api.openweathermap.org/data/2.5/forecast?q=London,usl&appid=2de143494c0b295cca9337e1e96b00e0;units=metric&cnt=7&lang=en";
$json=file_get_contents($url);
$data=json_decode($json,true);
echo "Temp: ". $data['main']['temp']."ºC";
echo $data['weather'][0]['description']."";
echo $data['weather'][0]['main']."";
echo "Wind Speed: " . $data['wind']['speed']." mph";
 
?>