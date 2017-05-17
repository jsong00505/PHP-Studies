<?php
/**
 * Created by PhpStorm.
 * User: jsong
 * Date: 16/05/2017
 * Time: 10:08 PM
 */

require_once "../../../vendor/autoload.php";

$collection = (new MongoDB\Client)->demo->users;
$collection->drop();

$collection->insertOne(['name' => 'Bob', 'state' => 'ny']);
$updateResult = $collection->replaceOne(
  ['name' => 'Bob'],
  ['name' => 'Robert', 'state' => 'ca']
);

printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
printf("Modified %d document(s)\n", $updateResult->getModifiedCount());