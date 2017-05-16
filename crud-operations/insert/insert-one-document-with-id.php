<?php
/**
 * Created by PhpStorm.
 * User: jsong
 * Date: 15/05/2017
 * Time: 9:27 PM
 */

require_once "../../vendor/autoload.php";

$collection = (new MongoDB\Client)->demo->users;

$insertOneResult = $collection->insertOne(['_id' => 1, 'name' => 'Alice']);

printf("Inserted %d docuemnt(s)\n", $insertOneResult->getInsertedCount());

var_dump($insertOneResult->getInsertedId());