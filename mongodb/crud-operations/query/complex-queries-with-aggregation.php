<?php
/**
 * Created by PhpStorm.
 * User: jsong
 * Date: 15/05/2017
 * Time: 10:35 PM
 */

require_once "../../../vendor/autoload.php";

$collection = (new MongoDB\Client)->demo->zips;

$cursor = $collection->aggregate([
  ['$group' => ['_id' => '$state', 'count' => ['$sum' => 1]]],
  ['$sort' => ['count' => -1]],
  ['$limit' => 5],
]);

foreach ($cursor as $state) {
  printf("%s has %d zip codes\n", $state['_id'], $state['count']);
};