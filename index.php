<?php

include 'src/Stalk.php';

# bad IP
$stalk = new Stalk(function ($error) {
    var_dump($error);
}, '88.163.183.16');


$stalk = new Stalk(function ($error) {
    var_dump($error);
}, '88.163.183.16');

var_dump($stalk->city . ' ' . $stalk->country);
