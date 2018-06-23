<?php
require_once realpath(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'additional.php';
require_once realpath(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'main.php';
require_once realpath(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'base.php';
require_once realpath(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'daily.php';
require_once realpath(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'hourly.php';
require_once realpath(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'student.php';

interface iCalculation
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