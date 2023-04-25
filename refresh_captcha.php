<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';

use Gregwar\Captcha\CaptchaBuilder;

$builder = new CaptchaBuilder;
$builder->setDistortion(true);
$builder->setInterpolation(true);
$builder->setBackgroundColor(255, 255, 255);
$builder->setTextColor(0, 0, 0);
$builder->build(150, 40);
$_SESSION['phrase'] = $builder->getPhrase();

header('Content-type: image/jpeg');
$builder->output();
