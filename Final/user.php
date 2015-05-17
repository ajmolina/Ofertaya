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

$currentUser = ParseUser::getCurrentUser();


$emp= $currentUser->get("Empresa");
$us=  $_POST["users"];
$pd=  $_POST["passwd"];
$ema=$_POST["ema"];





$user = new ParseUser();
$user->set("username", $us);
$user->set("password", $pd);
$user->set("email", $ema);
$user->set("Empresa", $emp);
$user->set("Admin", no);

try {
  $user->signUp();
header('Location: http://ofertaya.hostinazo.com/final/sucess.html');
} catch (ParseException $ex) {

  echo "Error: " . $ex->getCode() . " " . $ex->getMessage();
}










    ?>