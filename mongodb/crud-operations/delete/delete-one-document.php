<?php
/**
 * Created by PhpStorm.
 * User: jsong
 * Date: 18/05/2017
 * Time: 10:11 PM
 */

require_once "../../../vendor/autoload.php";

$collection = (new MongoDB\Client)->demo->users;
$collection->drop();

$collection->insertOne(['name' => 'Bob', 'state' => 'ny']);
$collection->insertOne(['name' => 'Alice', 'state' => 'ny']);
$deleteResult = $collection->deleteOne(['state' => 'ny']);

printf("Deleted %d document(s)\n", $deleteResult->getDeletedCount());
