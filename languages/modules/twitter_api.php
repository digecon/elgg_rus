<?php
/** Language pack */

$russian = array(
	'twitter_api' => "Twitter Услуги", 
	'twitter_api:requires_oauth' => "Службы Twitter требует OAuth Библиотек плагин включен.", 
	'twitter_api:consumer_key' => "Ключ Потребителя", 
	'twitter_api:consumer_secret' => "Секрет Потребителя", 
	'twitter_api:settings:instructions' => "Вы должны получить ключ потребителя и в тайне от <a href=\"https://dev.twitter.com/apps/новый\" target=\"_blank\">Twitter</a>. Заполните новое приложение приложение. Выберите \"Обозревателя\" в качестве типа приложения и \"Чтение и Запись\" для типа доступа. Обратного вызова url %stwitter_api/авторизации", 
	'twitter_api:usersettings:description' => "Ссылку вашу\"% s \" учетную запись на Twitter.", 
	'twitter_api:usersettings:request' => "Вы должны <a href=\"%s\">авторизации</a> %s для доступа к вашей учетной записи на Twitter.", 
	'twitter_api:usersettings:cannot_revoke' => "Вы не можете отсоединить ваш аккаунт Twitter, потому что вы не предоставили адрес электронной почты или пароль. <a href=\"%s\">Предоставить их сейчас</a>.", 
	'twitter_api:authorize:error' => "Не разрешать Twitter.", 
	'twitter_api:authorize:success' => "Twitter доступ был авторизован.", 
	'twitter_api:usersettings:authorized' => "Вы уполномочили %s для доступа к вашей учетной записи на Twitter: @%s.", 
	'twitter_api:usersettings:revoke' => "Нажмите кнопку <a href=\"%s\">здесь</a> для отмены доступа.", 
	'twitter_api:revoke:success' => "Twitter доступ был отозван.", 
	'twitter_api:login' => "Позволяют на существующих пользователей, которые решили связать свою учетную запись Twitter, чтобы войти в Twitter?", 
	'twitter_api:new_users' => "Разрешить новые пользователи должны зарегистрироваться с использованием своей учетной записи на Twitter, даже если регистрация пользователя отключен?", 
	'twitter_api:login:success' => "Вы уже вошли в систему.", 
	'twitter_api:login:error' => "Не удается войти с помощью Twitter.", 
	'twitter_api:login:email' => "Вы должны ввести действительный адрес электронной почты новой %s счета.", 
	'twitter_api:invalid_page' => "При обращении к странице", 
	'twitter_api:deprecated_callback_url' => "Обратного вызова URL-адрес изменился с Twitter API для %s. Пожалуйста, обратитесь к администратору, чтобы изменить его.", 
	'twitter_api:interstitial:settings' => "Настроить параметры", 
	'twitter_api:interstitial:description' => "Вы уже почти готовы для использования %s! Нам нужны кое-какие подробности, прежде чем вы сможете продолжить. Они не являются обязательными, но позволит вам войти, если Twitter падает или вы решили отменить связь аккаунтов.", 
	'twitter_api:interstitial:username' => "Это ваш username. Оно не может быть изменено. Если вы установили пароль, вы можете использовать имя пользователя или адрес электронной почты для входа.", 
	'twitter_api:interstitial:name' => "Это имя, люди будут видеть, что при взаимодействии с вами.", 
	'twitter_api:interstitial:email' => "Ваш адрес электронной почты. Пользователи не могут видеть это по умолчанию.", 
	'twitter_api:interstitial:password' => "Пароль для входа в систему, если Twitter вниз или вы решили отменить связь аккаунтов.", 
	'twitter_api:interstitial:password2' => "Тот же пароль снова.", 
	'twitter_api:interstitial:no_thanks' => "Нет, спасибо!", 
	'twitter_api:interstitial:no_display_name' => "Вы, должно быть, отображаемое имя.", 
	'twitter_api:interstitial:invalid_email' => "Вы должны ввести действительный адрес электронной почты или ничего.", 
	'twitter_api:interstitial:existing_email' => "Этот адрес электронной почты уже зарегистрирован на этом сайте.", 
	'twitter_api:interstitial:password_mismatch' => "Пароли не совпадают.", 
	'twitter_api:interstitial:cannot_save' => "Не удается сохранить данные учетной записи.", 
	'twitter_api:interstitial:saved' => "Реквизиты спасен!", 
	);

add_translation("ru", $russian);
?>