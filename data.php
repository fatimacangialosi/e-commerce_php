<?php

// METODO 1 - file_get_contents
//
// $json = file_get_contents('https://mockend.up.railway.app/api/products');
// echo $json;



// METODO 2 - curl
$url = 'https://mockend.up.railway.app/api/products';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);


$arr = [5 , 9, 4];

session_start();


// Inseriamo il json nella variabile di sessione "json"
$_SESSION["json"] = $response_json;

// Inseriamo il json decodificato nella variabile di sessione "data"
$_SESSION["data"] = json_decode($response_json);

$_SESSION["permanent_array"]=$arr;

/*

$arr = [5 , 9, 4];

$map['key'] = "value";
$map['fatima'] = 30;

$age = $map['fatima'];

$json =$_SESSION["json"];
$data=$_SESSION["data"];

$_SESSION["fatima"]=30;
$_SESSION["francesco"]=39;


$map['fatima'] = 11;
$map['francesco'] = 14;
$map['eustolzio'] = 94;

foreach ($map as $value) {
    echo $value . "\n";
}

foreach ($map as $key => $value) {
    echo $key . " - " . $value . "\n";
}

*/
?>