<?php
/**
 * Etherpads English language file
 * 
 * package ElggPad
 */

$russian = array(

	/**
	 * Menu items and titles
	 */
	 
	'etherpad' => "Совместное редактирование",
	'etherpad:owner' => "документы пользователя %s",
	'etherpad:friends' => "документы друзей",
	'etherpad:all' => "Все документы",
	'etherpad:add' => "Создать документ",
	'etherpad:timeslider' => 'История',
	'etherpad:fullscreen' => 'На весь экран',
	'etherpad:none' => 'Ни одного документа еще не создано',
	
	'etherpad:group' => 'Документы группы',
	'groups:enablepads' => 'Включить документы групп',
	
	/**
	 * River
	 */
	'river:create:object:etherpad' => '%s создал новый документ %s',
	'river:create:object:subpad' => '%s создал новый документ %s',
	'river:update:object:etherpad' => '%s обновил документ %s',
	'river:update:object:subpad' => '%s обновил документ %s',
	'river:comment:object:etherpad' => '%s оставил комментарий к документу %s',
	'river:comment:object:subpad' => '%s оставил комментарий к документу %s',
	
	'item:object:etherpad' => 'Документы',
	'item:object:subpad' => 'Поддокументы',

	/**
	 * Status messages
	 */

	'etherpad:saved' => "Документ был созранен.",
	'etherpad:delete:success' => "Документ был успешно удален.",
	'etherpad:delete:failure' => "Удаление документа не удалось. Попробуйте еще раз.",
	
	/**
	 * Edit page
	 */
	 
	 'etherpad:title' => "Заголовок",
	 'etherpad:tags' => "Тэги",
	 'etherpad:access_id' => "Доступ на чтение",
	 'etherpad:write_access_id' => "Доступ на запись",

	/**
	 * Admin settings
	 */

	'etherpad:etherpadhost' => "Etherpad lite host address:",
	'etherpad:etherpadkey' => "Etherpad lite api key:",
	'etherpad:showchat' => "Show chat?",
	'etherpad:linenumbers' => "Show line numbers?",
	'etherpad:showcontrols' => "Show controls?",
	'etherpad:monospace' => "Use monospace font?",
	'etherpad:showcomments' => "Show comments?",
	'etherpad:newpadtext' => "New pad text:",
	'etherpad:pad:message' => 'New pad created successfully.',
	'etherpad:integrateinpages' => "Integrate pads and pages? (Requires Pages plugin to be enabled)",
	
	/**
	 * Widget
	 */
	'etherpad:profile:numbertodisplay' => "Количество документов для отображения",
    'etherpad:profile:widgetdesc' => "Отображать ваш последний документ",
    
    /**
	 * Sidebar items
	 */
	'etherpad:newchild' => "Создать поддокумент",
);

add_translation('ru', $russian);
