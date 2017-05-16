<?php
/**
 * Created by PhpStorm.
 * User: jsong
 * Date: 15/05/2017
 * Time: 9:58 PM
 */

require_once "../../../vendor/autoload.php";

$collection = (new MongoDB\Client)->demo->zips;

$document = $collection->findOne(['_id' => '94301']);

var_dump($document);