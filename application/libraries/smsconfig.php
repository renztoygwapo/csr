<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Smsconfig extends CI_Controller {
  function __construct() {
        parent::__construct();


    } 

########################################################
# Login information for the SMS Gateway
########################################################


########################################################
# Functions used to send the SMS message
########################################################
function httpRequest($url){

    $pattern = "/http...([0-9a-zA-Z-.]*).([0-9]*).(.*)/";
    preg_match($pattern,$url,$args);
    $in = "";
    var_dump($url);
    var_dump($args);
    $fp = fsockopen($args[1], $args[2], $errno, $errstr, 30);
    if (!$fp) {
       return "F";
    } else {
        $out = "GET /$args[3] HTTP/1.1\r\n";
        $out .= "Host: $args[1]:$args[2]\r\n";
        $out .= "User-agent: Ozeki PHP client\r\n";
        $out .= "Accept: */*\r\n";
        $out .= "Connection: Close\r\n\r\n";

        fwrite($fp, $out);
        while (!feof($fp)) {
           $in.=fgets($fp, 128);
        }
    }
    fclose($fp);
    return "S";
}



function ozekiSend($phone, $msg, $debug=false){
      var_dump($phone);
      $ozeki_user = "admin";
      $ozeki_password = "admin";
      $ozeki_url = "http://127.0.0.1:9501/api?";
     // global $ozeki_user,$ozeki_password,$ozeki_url;

      $url = 'username='.$ozeki_user;
      $url.= '&password='.$ozeki_password;
      $url.= '&action=sendmessage';
      $url.= '&messagetype=SMS:TEXT';
      $url.= '&recipient='.urlencode($phone);
      $url.= '&messagedata='.urlencode($msg);

      $urltouse =  $ozeki_url.$url;
      if ($debug) { echo "Request: <br>$urltouse<br><br>"; }

      //Open the URL to send the message
      $response = $this->httpRequest($urltouse);

      return $response;
}



########################################################
# GET data from sendsms.html
########################################################



}