<?php
/** Language pack */

$russian = array(
	'admin:administer_utilities:diagnostics' => "Диагностика Системы", 
	'admin:utilities:diagnostics' => "Диагностика системы", 
	'diagnostics' => "Диагностика системы", 
	'diagnostics:description' => "Этот отчет о диагностике полезен для диагностирования проблем Elgg и должен быть приложен к любому сообщаемому багу.", 
	'diagnostics:download' => "Скачать .txt", 
	'diagnostics:header' => "========================================================================
Диагностический отчет Elgg
Сгенерирован %s %s
========================================================================

", 
	'diagnostics:report' => "Диагностические отчеты", 
	'diagnostics:report:basic' => "
Elgg релиз %s, версия %s
------------------------------------------------------------------------", 
	'diagnostics:report:globals' => "
Глобальные переменные:

%s
------------------------------------------------------------------------", 
	'diagnostics:report:md5' => "
Установленные файлы и их сумма:

%s
------------------------------------------------------------------------", 
	'diagnostics:report:php' => "
PHP-сведения:
%s
------------------------------------------------------------------------", 
	'diagnostics:report:plugins' => "
Установленные плагины и детали:

%s
------------------------------------------------------------------------", 
	'diagnostics:test:executeall' => "Запустить все", 
	'diagnostics:test:executetest' => "Запустить проверку", 
	'diagnostics:unittest:example' => "Образец проверки, доступно только в debug-режиме.", 
	'diagnostics:unittester' => "Диагностические проверки", 
	'diagnostics:unittester:debug' => "Вы должны включить режим отладки, чтобы запустить диагностическую проверку.", 
	'diagnostics:unittester:description' => "Unit tests check Elgg Core for broken or buggy APIs.", 
	'diagnostics:unittester:notests' => "Простите, для проверки нет установленных модулей.", 
	'diagnostics:unittester:report' => "Отчет о проверке для %s", 
	'diagnostics:unittester:testnotfound' => "Простите, отчет не может быть создан, т.к. эта проверка не была найдена.", 
	'diagnostics:unittester:testresult:fail' => "FAIL", 
	'diagnostics:unittester:testresult:nottestclass' => "FAIL - результат не является классом проверки", 
	'diagnostics:unittester:testresult:success' => "ГОТОВО", 
	'diagnostics:unittester:warning' => "WARNING: These tests can leave behind debugging objects in your database.<br />DO NOT USE ON A PRODUCTION SITE!", 
	);

add_translation("ru", $russian);
?>