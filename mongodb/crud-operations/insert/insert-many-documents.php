<?php
/**
 * Created by PhpStorm.
 * User: jsong
 * Date: 15/05/2017
 * Time: 9:54 PM
 */

require_once "../../../vendor/autoload.php";

$collection = (new MongoDB\Client)->example->users;

$insertManyResult = $collection->insertMany([
  [
    'username' => 'admin',
    'email' => 'admin@example.com',
    'name' => 'Admin User',
  ],
  [
    'username' => 'test',
    'email' => 'test@example.com',
    'name' => 'Test User',
  ],
]);

printf("Inserted %d document(s)\n", $insertManyResult->getInsertedCount());

var_dump($insertManyResult->getInsertedIds());