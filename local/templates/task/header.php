<?
use Bitrix\Main\Page\Asset;

$APPLICATION->ShowHead();
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/common.css");
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">');
    Asset::getInstance()->addString('<link rel="shortcut icon" href="'. SITE_TEMPLATE_PATH.'/images/favicon.604825ed.ico" type="image/x-icon">')
    ?>

</head>
<body>
<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>