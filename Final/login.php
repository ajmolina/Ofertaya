<?php


define( 'PARSE_SDK_DIR', './Parse/' );


require_once( 'autoload.php' );
use Parse\ParseClient;
use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseACL;
use Parse\ParsePush;
use Parse\ParseUser;
use Parse\ParseInstallation;
use Parse\ParseException;
use Parse\ParseAnalytics;
use Parse\ParseFile;
use Parse\ParseCloud;
use Parse\ParseSessionStorage;
use Parse\ParseStorageInterface;
session_start();

ParseClient::initialize('1meX4eoaUmA1quVUqVWN8TW0JtGaQLUip4xylIdW', 'RAkvuwFDpoYO7kqqpj7Rp0HvaLRyezz97GhBLIFc', 'nmx58yZNVlbAEcSqd2oJptcOLdPXD3R2f8qdGE6E');


$nam = $_POST["username"];
$pas = $_POST["password"];



ParseClient::setStorage( new ParseSessionStorage() );

 try {
  $user = ParseUser::logIn($nam, $pas);
  
$currentUser = ParseUser::getCurrentUser();

$admin= $currentUser->get("Admin");

if ($admin =="si") {
header('Location: http://ofertaya.hostinazo.com/final/promos.html');

}
else{

header('Location: http://ofertaya.hostinazo.com/final/promos2.html');


}


  



} catch (ParseException $error) {
   header('Location: http://ofertaya.hostinazo.com/final/index.html');
}
  






    ?>