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

$pro=  $_POST["prod"];
$fini=  $_POST["fi"];
$ffin=  $_POST["ff"];
$suc=  $_POST["sucur"];
$disco=  $_POST["disc"];
$descr=  $_POST["desc"];
$img=  $_POST["image"];






$test = new ParseObject("Promociones");
$test->set("Sucursal", $suc);
$test->set("NombreProducto", $pro);
$test->set("Fechainicio", $fini);
$test->set("Fechafinal", $ffin);
$test->set("Descuento", $disc);
$test->set("Descripcion", $descr);
$test->set("imagen", $img);
 

try {
  $test->save();


header('Location: http://ofertaya.hostinazo.com/final/promos.html');


} catch (ParseException $ex) {  
  

 echo '<script language="javascript">alert("Error");</script>'; 

 
}




    ?>