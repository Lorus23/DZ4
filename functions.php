<?php
require_once __DIR__ . '\components\main.php';
require_once __DIR__ . '\components\base.php';
require_once __DIR__ . '\components\daily.php';
require_once __DIR__ . '\components\hourly.php';
require_once __DIR__ . '\components\student.php';


interface Calculation
{
    public function price($data);
}

$data = $_POST;
$gps = $data['gps'];
$driver = $data['driver'];

switch ($data['tarif']) {
    case '1':
        $result = new base($data);
        break;
    case '2':
        $result = new hourly($data);
        break;
    case '3':
        $result = new daily($data);
        break;
    case '4':
        $result = new student($data);
        break;
    default;
}

