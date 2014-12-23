<?php
/** Language pack */

$russian = array(
	'forum' => "Форум", 
	'forums' => "Форумы", 
	'hj:forum:siteforums' => "Общие форумы сайта", 
	'item:object:hjforum' => "Форумы", 
	'item:object:hjforumtopic' => "Темы Форума", 
	'item:object:hjforumpost' => "Сообщения Форума", 
	'item:object:hjforumcategory' => "Категория Форума", 
	'items:object:hjforum' => "форумы", 
	'items:object:hjforumtopic' => "темы форума", 
	'items:object:hjforumpost' => "сообщения форума", 
	'items:object:hjforumcategory' => "категории форума", 
	'edit:object:hjforum:cover' => "Титульное изображение", 
	'edit:object:hjforum:title' => "Название Форума", 
	'edit:object:hjforum:description' => "Подзаголовок", 
	'edit:object:hjforum:access_id' => "Уровень доступа", 
	'edit:object:hjforum:category' => "Категория", 
	'edit:object:hjforum:enable_subcategories' => "Включить подкатегории", 
	'edit:object:hjforumtopic:cover' => "Обложка", 
	'edit:object:hjforumtopic:icon' => "Значок", 
	'edit:object:hjforumtopic:title' => "Название", 
	'edit:object:hjforumtopic:description' => "Описание", 
	'edit:object:hjforumtopic:category' => "Категория", 
	'edit:object:hjforumtopic:access_id' => "Уровень доступа", 
	'hj:forum:tablecol:forum' => "Форум", 
	'hj:forum:tablecol:topics' => "Темы", 
	'hj:forum:tablecol:posts' => "Посты", 
	'hj:forum:tablecol:last_post' => "Последнее Сообщение", 
	'river:in:forum' => " в %s", 
	'river:create:object:hjforum' => "%s создал новый форум | %s", 
	'river:create:object:hjforumtopic' => "%s начал новую тему в форуме | %s", 
	'river:create:object:hjforumpost' => "%s отправил ответ в тему %s", 
	'edit:object:hjforumcategory:title' => "Название Категории", 
	'edit:object:hjforumcategory:description' => "Краткое Описание", 
	'edit:object:hjforumpost:description' => "Ответ", 
	'hj:forum:nocategories' => "Вы еще не настроили ни одной категории. Пожалуйста, сделайте это, используя форму ниже", 
	'hj:forum:notsetup' => "Этот форум еще не был настроен", 
	'hj:forum:create:forum' => "Новый форум", 
	'hj:forum:create:subforum' => "Новый подфорум", 
	'hj:forum:create:topic' => "Новая тема в форуме", 
	'hj:forum:create:post' => "Ответ", 
	'hj:forum:create:post:quote' => "Цитата И Ответ", 
	'hj:forum:create:category' => "Новая категория форума", 
	'hj:forum:dashboard:site' => "Общие форумы сайта", 
	'hj:forum:dashboard:groups' => "Группа Форумов", 
	'hj:forum:dashboard:bookmarks' => "Темы Форума в закладках", 
	'hj:forum:dashboard:subscriptions' => "Подписки Форума", 
	'hj:forum:dashboard:tabs:site' => "Общие форумы сайта", 
	'hj:forum:dashboard:tabs:groups' => "Форумы группы", 
	'hj:forum:dashboard:tabs:bookmarks' => "Закладки", 
	'hj:forum:dashboard:tabs:subscriptions' => "Подписка", 
	'edit:plugin:hypeforum:params[categories_top]' => "Включить категории сайта верхнего уровня и групповых форумов", 
	'edit:plugin:hypeforum:hint:categories_top' => "Включение этой опции позволит вам создать несколько категорий верхнего уровня, и форумы будут сгруппированы по категориям", 
	'edit:plugin:hypeforum:params[categories]' => "Включить категории для вложенных форумов и тем", 
	'edit:plugin:hypeforum:hint:categories' => "Включение этой опции позволит вам переключаться в пределах отдельных категорий форумов; подфорумы и темы будут сгруппированы по категориям", 
	'edit:plugin:hypeforum:params[subforums]' => "Включить подфорумы", 
	'edit:plugin:hypeforum:hint:subforums' => "Включение этой опции позволит вам создать форумы в рамках различных форумов; по умолчанию элементы будет упорядочены следующим образом: подфорумы с прилепленными темами следуют за регулярными темами по последним постам)", 
	'edit:plugin:hypeforum:params[forum_cover]' => "Включить изображение с обложки для форумов", 
	'edit:plugin:hypeforum:hint:forum_cover' => "Если включено, авторы форумов смогут добавлять изображения, которые будут использоваться в виде иконок и в качестве обложки при полном просмотре форума", 
	'edit:plugin:hypeforum:params[forum_sticky]' => "Включить прилепленные темы", 
	'edit:plugin:hypeforum:hint:forum_sticky' => "В упорядочении списка по умолчанию прилепленные темы будут отображаться в первую очередь; кроме того, они будут помечены значком", 
	'edit:plugin:hypeforum:params[forum_topic_cover]' => "Включить изображение обложки для темы", 
	'edit:plugin:hypeforum:hint:forum_topic_cover' => "Если включено, темы, авторы будут иметь право добавлять изображения обложки для своих темах", 
	'edit:plugin:hypeforum:params[forum_topic_icon]' => "Включить значки тем", 
	'edit:plugin:hypeforum:hint:forum_topic_icon' => "Если включено, авторы тем смогут выбрать значок для своих тем (см. параметры ниже для списка значков)", 
	'edit:plugin:hypeforum:params[forum_topic_icon_types]' => "Список типов значков для тем", 
	'edit:plugin:hypeforum:topic_icon_hint' => "Через запятую. Иконки должны быть загружены в mod/hypeForum/graphics/forumtopic/", 
	'edit:plugin:hypeforum:params[forum_forum_river]' => "Добавить новые форумы в поток", 
	'edit:plugin:hypeforum:hint:forum_forum_river' => "Добавить информацию о новых постах на форуме в поток деятельности", 
	'edit:plugin:hypeforum:params[forum_topic_river]' => "Добавить новые темы в поток", 
	'edit:plugin:hypeforum:params[forum_post_river]' => "Добавить новые посты в поток", 
	'edit:plugin:hypeforum:params[forum_subscriptions]' => "Включить подписки на уведомления", 
	'edit:plugin:hypeforum:hint:forum_subscriptions' => "Включение этого параметра позволит пользователям подписаться/отписаться от форума в разделе уведомлений", 
	'edit:plugin:hypeforum:params[forum_bookmarks]' => "Включить закладки", 
	'edit:plugin:hypeforum:hint:forum_bookmarks' => "Включение этого параметра позволит пользователям темы форума в закладки и отображать их в отдельной вкладке на панели мониторинга", 
	'edit:plugin:hypeforum:params[forum_group_forums]' => "Включить групповые форумы", 
	'edit:plugin:hypeforum:hint:forum_group_forums' => "Добавить функциональность форумов в группы", 
	'edit:plugin:hypeforum:params[forum_user_signature]' => "Включить подписи пользователей в сообщениях форума", 
	'edit:plugin:hypeforum:hint:forum_user_signature' => "Позволяет пользователям создавать автоматические подписи и добавлять их ко всем своим постам; форма для добавления подписи будет доступна пользователям в разделе настроек", 
	'hj:forum:filter' => "Фильтры Форумов", 
	'hj:forum:quote:author' => "%s написал:", 
	'hj:forum:groups:notamember' => "Вы еще не был членом какой-либо группы, но", 
	'hj:forum:groupoption:enableforum' => "Включить форумы группы", 
	'hj:forum:group' => "Форумы групп", 
	'hj:forum:dashboard:group' => "Форумы %s", 
	'edit:object:hjforum:sticky' => "Прикрепленная Тема", 
	'hj:forum:sticky' => "Прикрепленная Тема", 
	'hj:forum:new:hjforum' => "Новый подфорум", 
	'hj:forum:new:hjforumtopic' => "Новая тема в форуме", 
	'hj:forum:new:hjforumpost' => "Новый пост на форуме", 
	'hj:forum:user:settings' => "Настройки Форума", 
	'edit:plugin:user:hypeforum:params[hypeforum_signature]' => "Добавить подпись в свои сообщения на форуме:", 
	'hj:forum:bookmark:create' => "Закладки", 
	'hj:forum:bookmark:remove' => "Удалить Закладку", 
	'hj:forum:bookmark:create:error' => "Тема не может быть добавлена в закладки", 
	'hj:forum:bookmark:create:success' => "Тема успешно добавлена в закладки", 
	'hj:forum:bookmark:remove:error' => "Закладка не может быть удалена", 
	'hj:forum:bookmark:remove:success' => "Закладка успешно удалена", 
	'hj:forum:subscription:create' => "Подписаться", 
	'hj:forum:subscription:remove' => "Отписаться", 
	'hj:forum:subscription:create:error' => "Вы не сможете подписаться на эту тему", 
	'hj:forum:subscription:create:success' => "Теперь вы подписаны на эту тему", 
	'hj:forum:subscription:remove:error' => "Вы не можете отписаться от этой темы", 
	'hj:forum:subscription:remove:success' => "Вы больше не подписаны на эту тему", 
	);

add_translation("ru", $russian);
?>