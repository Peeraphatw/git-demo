<?php
$curl = curl_init();
curl_setopt($curl,CURLOPT_URL,'https://jsonplaceholder.typicode.com/users');
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,FALSE); //FOR HTTPS PROTOCAL
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl,CURLOPT_HTTPGET, array(
    'Content-Type : application/json',
    'Accept : application/json'
));

$res = curl_exec($curl);
curl_close($curl);
// print_r($res);





foreach(json_decode($res) as $result)
{
  echo $result->id;
  echo $result->name;
  echo $result->username;
  echo $result->email;
  echo $result->address->street;
  echo $result->address->suite;
  echo $result->address->zipcode;
  echo $result->address->geo->lat;
  echo $result->address->geo->lng;
  echo $result->phone;
  echo $result->website;
  echo $result->company->name;
  echo $result->company->catchPhrase;
  echo $result->company->bs;
  echo "<br /> <br /> <br />" ;
}