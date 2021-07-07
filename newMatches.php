<?php

	$api_url  = "https://cricapi.com/api/matches?apikey=KsxgHZJR0CV1HOVh2o0QHosHTyA2";
//  $api_url  = "http://cricapi.com/api/fantasySummary?apikey=<apikey>&unique_id=<unique_id>"

//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$api_url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

// Will dump a json - you can save in variable and use the json
$cricketMatches=json_decode($result);

  echo "<pre>";
  print_r($cricketMatches);
  ?>
  
  
  
  
!