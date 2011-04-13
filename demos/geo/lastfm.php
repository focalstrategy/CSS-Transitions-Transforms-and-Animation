<?
$lat = $_GET['lat'];
$long = $_GET['lon'];
$page = $_GET['page'];

if (!isset($lat)) {
	$lat = "50.429";
	$long = "-3.570";
}

$key = "0669441c03748ce4c20072754ea128e2";

$url = "http://lastfm-api-ext.appspot.com/2.0/?outtype=json&method=geo.getevents&api_key=".$key."&lat=".$lat."&long=".$long."&page=".$page;

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "$url");
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 2);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

	$result = curl_exec($curl);
	$resultArray = curl_getinfo($curl);

	curl_close($curl);

echo $result;
?>