<?php
// Подключаем скрипт с классом ConpayProxyModel, выполняющим бизнес-логику
require_once './ConpayProxyModel.php';
try
{
	// Создаем объект класса ConpayProxyModel
	$proxy = new ConpayProxyModel;
	// Устанавливаем свой идентификатор продавца
	$proxy->setMerchantId(555);
	// Устанавливаем свой API-ключ
	$proxy->setApiKey('XXXXXXXXXXXXXXXXXXXXXXXXXX');
	// Устанавливаем кодировку, используемую на сайте (по-умолчанию 'UTF-8')
	$proxy->setCharset('UTF-8');
	// Выполняем запрос, выводя его результат
	echo $proxy->sendRequest();
}
catch (Exception $e) {
	echo json_encode(array('error'=>$e->getMessage()));
}
