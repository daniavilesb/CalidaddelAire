<?php
class Peticion{
  public function sendGet(){
    $token='f43ea0d648edd73a847e17b762d0ed3a2b440129';
    $data = array("city"=>"london","lang" => "es");
    $ch = curl_init("http://api.waqi.info/feed/here/?token=$token");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
    $response = curl_exec($ch);
    curl_close($ch);
    if(!$response) {
      return false;
    }else{
      var_dump($response);
    }
  }
}
Peticion::sendGet();
?>
