<?php
//include the class
require_once('DistanceCalculator.Class.php');
//initiate class
$dc = new DistanceCalculator();

//latitude and logtitude of point 1
$dc->lat1 = 33.6437323;
$dc->long1 = 72.9585014;

//latitude and logtitude of point 2
$dc->lat2 = 33.6655587;
$dc->long2 = 73.0022321;

//define the unit of distance you want to get get data, default is 'miles'
$dc->type = 'km';

//choose if you want to display the selected unit type with the distance value, default is 'true'
$dc->show_type = false;

//calculate and get the distance
$distance = $dc->getDistance();

//show the calculated distance
echo $distance;
