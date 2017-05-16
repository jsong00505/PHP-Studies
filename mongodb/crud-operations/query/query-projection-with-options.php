<?php
/**
 * Created by PhpStorm.
 * User: jsong
 * Date: 15/05/2017
 * Time: 10:27 PM
 */

require_once "../../../vendor/autoload.php";

$collection = (new MongoDB\Client)->demo->zips;

$cursor = $collection->find(
  [],
  [
    'limit' => 5,
    'sort' => ['pop' => -1],
  ]
);

foreach ($cursor as $document) {
  printf("%s: %s, %s\n", $document['_id'], $document['city'], $document['state']);
};