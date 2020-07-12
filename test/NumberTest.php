<?php
/**
 * Created by PhpStorm.
 * User: pangchenxu
 * Date: 2020-07-12
 * Time: 14:44
 */

require_once "../src/numberApplication.php";
$leftOperate = "3.141";
$rightOperate = "1.7";


$oob = new \numberApplication\numberApplication();

echo $oob->bcDiv($leftOperate,$rightOperate).PHP_EOL;