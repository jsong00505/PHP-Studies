<?php
/**
 * Created by PhpStorm.
 * User: jsong
 * Date: 15/05/2017
 * Time: 10:31 PM
 */

require_once "../../../vendor/autoload.php";

$collection = (new MongoDB\Client)->demo->zips;

$cursor = $collection->find([
  'city' => new MongoDB\BSON\Regex('^garden', 'i'),
  'state' => 'TX',
]);

foreach ($cursor as $document) {
  printf("%s: %s, %s\n", $document['_id'], $document['city'], $document['state']);
}