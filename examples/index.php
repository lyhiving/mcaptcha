<?php
include __DIR__ . '/../autoload.php';

use lyhiving\mCaptcha\mCaptcha;

$captch = new mCaptcha();


$captch->init([
    'width' => 150,     // 宽度
    'height' => 50,     // 高度
    'line' => false,     // 直线
    'curve' => true,   // 曲线
    'noise' => 1,   // 噪点背景
    'fonts' => []       // 字体
]);

$captch->create()->output(1);

// var_dump($captch->create()->getText());



echo strtotime(date('Y-m-d H:i',strtotime('-1 Minute'))),'<br>';
echo strtotime(date('Y-m-d H:i',strtotime('-2 Minute'))),'<br/>';
echo 'sms.limit.rate.ip.'. ($_SERVER['REMOTE_ADDR']) . '.' . strtotime(date('Y-m-d H:i',strtotime('-1 Minute'))),'<br/>';
