<?php
/**
 * Created by PhpStorm.
 * User: jsong
 * Date: 15/05/2017
 * Time: 10:11 PM
 */

require_once "../../../vendor/autoload.php";

$collection = (new MongoDB\Client)->example->restaurants;

$cursor = $collection->find(
  [
    'cuisine' => 'Italian',
    'borough' => 'Manhattan',
  ],
  [
    'projection' => [
      'name' => 1,
      'borough' => 1,
      'cuisine' => 1,
    ],
    'limit' => 4,
  ]
);

foreach ($cursor as $restaurant) {
  var_dump($restaurant);
};