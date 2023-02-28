
<?
//$_POST['influencer_name'].'/'.$_POST['hashtag_keyword'].'/'.$_POST['amount'];

$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => 'triz.loca.lt/face_detector/find_recognition',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 100,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => false,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'POST',
	CURLOPT_POSTFIELDS => 'influencer_name='.$_POST['influencer_name'].'&hashtag_keyword='.$_POST['hashtag_keyword'].'&amount='.$_POST['amount'],
	//CURLOPT_POSTFIELDS => 'influencer_name=daejin_doctor&hashtag_keyword=triz_crawl_result&amount=3',
	CURLOPT_HTTPHEADER => array(
		'Content-Type: application/x-www-form-urlencoded'
	),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>


