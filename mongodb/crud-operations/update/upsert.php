<?php
/**
 * Created by PhpStorm.
 * User: jsong
 * Date: 16/05/2017
 * Time: 10:45 PM
 */

require_once "../../../vendor/autoload.php";

$collection = (new MongoDB\Client)->demo->users;
$collection->drop();

$updatResult = $collection->updateOne(
  ['name' => 'Bob'],
  ['$set' => ['state' => 'ny']],
  ['upsert' => true]
);

printf("Matched %d document(s)\n", $updatResult->getMatchedCount());
printf("Modified %d document(s)\n", $updatResult->getModifiedCount());
printf("Upserted %d document(s)\n", $updatResult->getUpsertedCount());

$upsertedDocument = $collection->findOne([
  '_id' => $updatResult->getUpsertedId(),
]);

var_dump($upsertedDocument);