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



$update=  $_POST["idpromo"];
ParseClient::initialize('1meX4eoaUmA1quVUqVWN8TW0JtGaQLUip4xylIdW', 'RAkvuwFDpoYO7kqqpj7Rp0HvaLRyezz97GhBLIFc', 'nmx58yZNVlbAEcSqd2oJptcOLdPXD3R2f8qdGE6E');

$pro=  $_POST["prodn"];
$fini=  $_POST["inid"];
$ffin=  $_POST["fid"];
$suc=  $_POST["idsuc"];
$disco=  $_POST["dt"];
$descr=  $_POST["dn"];
$img=  $_POST["imagee"];






$query = new ParseQuery("Promociones");
$query->equalTo("objectId", $dele);



$results = $query->find();


if (count($results) > 0) {
	# code...

for ($i = 0; $i < count($results); $i++) { 
  $object = $results[$i];
  $object->destroy();

}

header('Location: http://ofertaya.hostinazo.com/final/delete.html');
}
else{

echo '<script language="javascript">alert("Error 404 promotion not found");</script>'; 


}


header('refresh: 1; url=http://ofertaya.hostinazo.com/final/delete.html'); 



    ?>