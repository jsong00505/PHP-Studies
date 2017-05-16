<?php
/**
 * Created by PhpStorm.
 * User: jsong
 * Date: 15/05/2017
 * Time: 9:15 PM
 */

require_once "../../vendor/autoload.php";

$collection = (new MongoDB\Client)->example->users;

$insertOneResult = $collection->insertOne([
  'username' => 'admin',
  'email' => 'admin@example/com',
  'name' => 'Admin User',
]);

printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

var_dump($insertOneResult->getInsertedId());