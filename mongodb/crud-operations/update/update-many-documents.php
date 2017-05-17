<?php
/**
 * Created by PhpStorm.
 * User: jsong
 * Date: 16/05/2017
 * Time: 10:02 PM
 */

require_once "../../../vendor/autoload.php";

$collection = (new MongoDB\Client)->demo->users;
$collection->drop();

$collection->insertOne(['name' => 'Bob', 'state' => 'ny', 'country' => 'us']);
$collection->insertOne(['name' => 'Alice', 'state' => 'ny']);
$collection->insertOne(['name' => 'Sam', 'state' => 'ny']);
$updateResult = $collection->updateMany(
  ['state' => 'ny'],
  ['$set' => ['country' => 'us']]
);

printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
printf("Modified %d document(s)\n", $updateResult->getModifiedCount());