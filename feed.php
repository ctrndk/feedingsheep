<?php

function jolly($userid, $usertoken, $jum){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://h5server.jollychic.com/active/sheepFeed/getFood.do?callback=topicCallback1533793153536&appTypeId=0&lang=12&countryCode=ID&appVersion=7.1.1&currency=IDR&terminalType=1&timestamp=1533792012760&cookieId=c81dbd56-5ecf-49ed-9e0e-ef67ad30c1e4&userId=$userid&userToken=$usertoken&token=FfHKVDLRxPrCabMKNVV4KFJ%2BXve5hz0O3cjI7sjZbP3igP5v9%2F0zlAQQ&type=$jum&edtionCatId=77628&_=1533793108201");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'https://h5server.jollychic.com/');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output;
}
function pakan($uid, $usertoken){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://h5server.jollychic.com/active/sheepFeed/feed.do?callback=topicCallback1533793176459&appTypeId=0&lang=12&countryCode=ID&appVersion=7.1.1&currency=IDR&terminalType=1&timestamp=1533792012760&cookieId=c81dbd56-5ecf-49ed-9e0e-ef67ad30c1e4&userId=$uid&userToken=$usertoken&token=FfHKVDLRxPrCabMKNVV4KFJ%2BXve5hz0O3cjI7sjZbP3igP5v9%2F0zlAQQ&_=1533793108210");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_REFERER, 'https://h5server.jollychic.com/');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
}

print "AUTO FEEDING SHEEP\n\n";
echo "User ID?\nInput : ";
$uid = trim(fgets(STDIN));
echo "User Token?\nInput : ";
$usertoken = trim(fgets(STDIN));
echo "Jumlah\nInput : ";
$jumlah = trim(fgets(STDIN));
echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
$jeda = trim(fgets(STDIN));
for($a=0;$a<$jumlah;$a++){
	$jum = rand(123,$jumlah);
	$jum1 = rand($jum,$jumlah);
	$chance = jolly($uid, $usertoken, $jum);
	$chance1 = jolly($uid, $usertoken, $jum1);
	$pakan = pakan($uid, $usertoken);
	sleep($jeda);
	flush();
}
echo "\n";
?>
