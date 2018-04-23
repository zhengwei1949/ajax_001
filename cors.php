<?php
header('content-type:text/html;charset=utf-8');
header('Access-Control-Allow-Origin: *');
$arr = ["name"=>"小明","age"=>20];
echo json_encode($arr,true);