<?php
require_once __DIR__ . '\components\main.php';
require_once __DIR__ . '\components\additional.php';
require_once __DIR__ . '\components\base.php';
require_once __DIR__ . '\components\daily.php';
require_once __DIR__ . '\components\hourly.php';
require_once __DIR__ . '\components\student.php';

interface I_Calculation
{
    public function ageRatio($price);
}

$data = $_POST;
$cron = explode(":", $_POST['cron']);
$data['timeHour'] = $cron[0];
$data['timeMin'] = $cron[1];
$gps = $data['gps'];
$driver = $data['driver'];

switch ($data['tarif']) {
    case '1':
        $object = new base($data);
        $result = $object->calc($data);
        break;
    case '2':
        $object = new hourly($data);
        $result = $object->calc($data);
        break;
    case '3':
        $object = new daily($data);
        $result = $object->calc($data);
        break;
    case '4':
        $object = new student($data);
        $result = $object->calc($data);
        break;
    default;
}

echo 'Оплата: ' . $result . ' $';

