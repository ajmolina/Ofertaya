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

ParseClient::initialize('DLvMEIqJsYS4V2GVzxeKRpLRMs6BdK7n77s5lNbn','yLQD0VPy0AoClYv2uoVwQKZaKfuuVOy4qIKqdwzO', 'x2uxDPN7ANo9MatG49wah11vP6WZ556ttCauQJcG');

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