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

session_start();

ParseClient::initialize('DLvMEIqJsYS4V2GVzxeKRpLRMs6BdK7n77s5lNbn', 'yLQD0VPy0AoClYv2uoVwQKZaKfuuVOy4qIKqdwzO', 'x2uxDPN7ANo9MatG49wah11vP6WZ556ttCauQJcG');

ParseUser::logOut();
 header('Location: http://ofertaya.hostinazo.com/final/index.html');


?>