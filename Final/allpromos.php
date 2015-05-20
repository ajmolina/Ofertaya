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

ParseClient::initialize('1meX4eoaUmA1quVUqVWN8TW0JtGaQLUip4xylIdW', 'RAkvuwFDpoYO7kqqpj7Rp0HvaLRyezz97GhBLIFc', 'nmx58yZNVlbAEcSqd2oJptcOLdPXD3R2f8qdGE6E');

$query = new ParseQuery("Promociones");
$results = $query->find();

$reportes = array();

foreach ( $results as $result ) {

 $sucu =$result->get('idSucursal');
 $emp =$result->get('idEmpresa');
 $ffinal =$result->get('FechaFinal');
 $finicial =$result->get('FechaInicio');
 $np =$result->get('NombreProducto');
 $desc =$result->get('Descripcion');
 $descu =$result->get('Descuento');
 $imag =$result->get('Imagen');

 $reportes['Promociones'][] = array('IdSucursal'=> $sucu, 'IdEmpresa'=> $emp, 'Fechafinal'=> $ffinal, 'Fechainicial'=>$finicial, 'Producto'=> $np,'Descripcion'=> $desc,'Descuento'=> $descu,'Imagen'=> $imag);
}


$json_ = json_encode($reportes);
echo $json_;


     ?>