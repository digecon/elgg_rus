<?php
/** Language pack */

$russian = array(
	'admin:developers' => "Разработчики", 
	'admin:developers:inspect' => "Проверить", 
	'admin:developers:preview' => "Предварительный просмотр оформления", 
	'admin:developers:settings' => "Настройки Разработчика", 
	'developers:debug:error' => "Ошибка", 
	'developers:debug:notice' => "Уведомление", 
	'developers:debug:off' => "Выкл.", 
	'developers:debug:warning' => "Предупреждение", 
	'developers:event_log_msg' => "%s: %s, %s в %s", 
	'developers:help:debug_level' => "Это контролирует объем записываемой информации. См. elgg_log() для получения дополнительной информации.", 
	'developers:help:display_errors' => "По умолчанию, файл .htaccess в Elgg подавляет отображение фатальных ошибок.", 
	'developers:help:log_events' => "Запись перехватчиков событий и плагинов в журнал. Предупреждение: их много на каждой странице.", 
	'developers:help:screen_log' => "Отображение вывода elgg_log() и elgg_dump() на веб-странице.", 
	'developers:help:show_strings' => "Отображение строк перевода, используемых в elgg_echo().", 
	'developers:help:simple_cache' => "Отключить кэш файлов при разработке. В противном случае, изменения ваших видов (включая css) будут игнорироваться.", 
	'developers:help:view_path_cache' => "Отключите это в режиме разработки. В противном случае, новые виды в ваших плагинах не будут зарегистрированы.", 
	'developers:help:wrap_views' => "Оборачивает практически каждый вид HTML-комментариями. Полезна для поиска вида при создании особого HTML.", 
	'developers:inspect:help' => "Проверить конфигурацию фреймворка Elgg.", 
	'developers:label:debug_level' => "Уровень трассировки", 
	'developers:label:display_errors' => "Отображение фатальной ошибки PHP", 
	'developers:label:log_events' => "Журнал событий и перехватчиков плагинов", 
	'developers:label:screen_log' => "Высести лог на экран", 
	'developers:label:show_strings' => "Отображение строк перевода в чистом виде", 
	'developers:label:simple_cache' => "Использовать простой кэш", 
	'developers:label:view_path_cache' => "Использовать кэш путей к видам", 
	'developers:label:wrap_views' => "Обернуть виды", 
	'developers:settings:success' => "Настройки сохранены", 
	'elgg_dev_tools:settings:explanation' => "Управляйте настройками разработки и отладки ниже. Некоторые из этих параметров доступны также на других страницах администратора.", 
	'theme_preview:breakout' => "Вырваться из iframe", 
	'theme_preview:buttons' => "Кнопки", 
	'theme_preview:components' => "Компоненты", 
	'theme_preview:forms' => "Формы", 
	'theme_preview:general' => "Введение", 
	'theme_preview:grid' => "Сетки", 
	'theme_preview:icons' => "Значки", 
	'theme_preview:modules' => "Модули", 
	'theme_preview:navigation' => "Навигация", 
	'theme_preview:typography' => "Оформление", 
	);

add_translation("ru", $russian);
?>