<?php
/**
 * Created by PhpStorm.
 * User: jsong
 * Date: 15/05/2017
 * Time: 10:04 PM
 */

require_once "../../../vendor/autoload.php";

$collection = (new MongoDB\Client)->demo->zips;

$cursor = $collection->find(['city' => 'JERSEY CITY', 'state' => 'NJ']);

foreach ($cursor as $document) {
  echo $document['_id'], "\n";
}