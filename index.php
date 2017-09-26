<?php
header("Content-type:text/html;charset=utf-8");
require_once './vendor/createImg/ThinkImage.class.php';//图片处理插件

$img = new ThinkImage(THINKIMAGE_GD, './bg.png');
echo "<img src='./bg.png' />";



$CertificateNumber = '(253)4891668000111000001';
$IssueDate = "July  2017";
$extDate = "2017   7";

$img->writetext($CertificateNumber,'./fonts/ariali.ttf',12,'#000000',['center',70],0)
	->writetext('鲁溢顺','./fonts/simsun.ttc',30,'#000000',['center',255],0)
	->writetext($IssueDate,'./fonts/arial-unicode-ms.ttf',10.5,'#000000',[345,323],0)
	->writetext($extDate,'./fonts/arial-unicode-ms.ttf',10.5,'#000000',[341,340],0)
	->save('./img/ce1.jpg');
echo "<img src='./img/ce1.jpg'/>";
