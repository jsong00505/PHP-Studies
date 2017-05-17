<?php
/**
 * Created by PhpStorm.
 * User: jsong
 * Date: 16/05/2017
 * Time: 9:52 PM
 */

require_once "../../../vendor/autoload.php";

$collection = (new MongoDB\Client)->demo->users;
$collection->drop();

$collection->insertOne(['name' => 'Bob', 'state' => 'ny']);
$collection->insertOne(['name' => 'Alice', 'state' => 'ny']);
$updateResult = $collection->updateOne(
  ['state' => 'ny'],
  ['$set' => ['country' => 'us']]
);

printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
printf("Modified %d document(s)\n", $updateResult->getModifiedCount());