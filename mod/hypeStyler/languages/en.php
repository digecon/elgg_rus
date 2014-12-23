<?php

/* * * styler Theme language file */

$english = array(

	'menu:page:header:theme' => 'Theme',

	'hj:styler:admin:layout_editor_enable' => 'Enable Layout Editor',
	'hj:styler:admin:layout_editor_disable' => 'Disable Layout Editor',

	'hj:styler:admin:theme_editor_enable' => 'Enable Theme Editor',
	'hj:styler:admin:theme_editor_disable' => 'Disable Theme Editor',

	'admin:site' => 'Site',
	'admin:site:settings' => 'Site Settings',
	
	'admin:layout' => 'Theme Layout',
	'admin:layout:settings' => 'Layout Settings',
	'admin:layout:index' => 'Home Page Settings',

	'admin:styling' => 'Styling',
	'admin:styling:pallettes' => 'Color Scheme',

	'hj:styler:site:settings' => 'Site Settings',
	'hj:styler:layout:settings' => 'Layout Settings',
	'hj:styler:layout:index' => 'Home Page',
	'hj:styler:styling:pallettes' => 'Color Scheme',
	'hj:styler:styling:layout' => 'Layout Elements',
	'hj:styler:styling:typography' => 'Typography',
	'hj:styler:styling:modules' => 'Modules',
	'hj:styler:styling:forms' => 'Form Elements',
	'hj:styler:styling:navigation' => 'Navigation',

	'item:object:hjcustommoduleposition' => 'Layout Module Position',
	'item:object:hjcustommodule' => 'Custom Layout Module',

	'hj:styler:create:module' => 'New Module',

	'hj:styler:theme:custom' => 'Customized',
	'hj:styler:theme:seashells' => 'Seashells Theme',
	'hj:styler:theme:lagoon' => 'Lagoon Theme',
	'hj:styler:theme:faded_red' => 'Faded Red Theme',
	'hj:styler:theme:floral_lavender' => 'Floral Lavender Theme',
	'hj:styler:theme:faded_maroon' => 'Faded Maroon Theme',
	'hj:styler:theme:light_green_yellow' => 'Light Green Yellow Theme',
	'hj:styler:theme:natural_green' => 'Natural Green Theme',
	'hj:styler:theme:pink_salmon' => 'Pink Salmon Theme',
	'hj:styler:theme:ripe_apricot' => 'Ripe Apricot Theme',
	'hj:styler:theme:ripe_persimmon' => 'Ripe Persimmon Theme',
	'hj:styler:theme:royal_blue' => 'Royal Blue Theme',
	'hj:styler:theme:light' => 'Light Theme',
	'hj:styler:theme:ripple' => 'Ripple Theme',
	'hj:styler:theme:palms' => 'Palms Theme',
	'hj:styler:theme:silver' => 'Silver Theme',
	
	// Plugin Settings Forms
	'edit:plugin:hypestyler:site:name' => 'Name of your site',
	'edit:plugin:hypestyler:site:description' => 'Short site description',
	'edit:plugin:hypestyler:site:description:hint' => 'Site description to be used in <meta name="description"> tag',
	'edit:plugin:hypestyler:site:keywords' => 'Site keywords',
	'edit:plugin:hypestyler:site:keywords:hint' => 'Site keywords to be used in <meta name="keywords"> tag; comma-separated',
	'edit:plugin:hypestyler:site:email' => 'Site e-mail address',
	'edit:plugin:hypestyler:site:email:hint' => 'Site e-mail address to use when sending system e-mails',
	'edit:plugin:hypestyler:site:logo' => 'Site logo',
	'edit:plugin:hypestyler:site:logo:hint' => 'Site logo will be used in the site header and as an icon for your site entity(e.g. when displaying system messages); specify custom logo width and height below (in pixels)',
	'edit:plugin:hypestyler:site:logo_width' => 'Site logo width',
	'edit:plugin:hypestyler:site:logo_height' => 'Site logo height',
	'edit:plugin:hypestyler:site:favicon' => 'Site favicon',
	'edit:plugin:hypestyler:site:favicon:hint' => 'Shortcut icon to be used by browsers (user 16x16 or 32x32 *.ico, *.jpg, *.gif or *.png file)',

	'hj:styler:layout:instructions' => 'Live preview may be available on some items and may not be entirely accurate due to CSS stacking. For all changes to take effect, be sure to save the Settings and refresh the page',

	'edit:plugin:hypestyler:layout:params[responsive_layout]' => 'Responsive layout',
	'edit:plugin:hypestyler:layout:params[responsive_layout]:hint' => 'Enabling this feature will load responsive stylesheet (twitter bootstrap)',
	'edit:plugin:hypestyler:layout:params[canvas_style]' => 'Canvas type',
	'edit:plugin:hypestyler:layout:params[canvas_style]:hint' => 'Bordered canvas will have a more rigid, boxed look, whereas borderless canvas will be more airy ',
	'edit:plugin:hypestyler:layout:params[canvaswidth]' => 'Canvas width',
	'edit:plugin:hypestyler:layout:params[canvaswidth]:hint' => 'Width of the canvas container (this will be ignored on handheld devices). The value must be an integer, and represents the value in pixels',
	'edit:plugin:hypestyler:layout:params[layout_sidebar_alt]' => 'Left sidebar width',
	'edit:plugin:hypestyler:layout:params[layout_sidebar_alt]:hint' => 'Span width in a 12 column grid. Set to 0 to hide the sidebar and merge its content with the right sidebar',
	'edit:plugin:hypestyler:layout:params[layout_content]' => 'Content width',
	'edit:plugin:hypestyler:layout:params[layout_content]:hint' => 'Span width in a 12 column grid',
	'edit:plugin:hypestyler:layout:params[layout_sidebar]' => 'Right sidebar width',
	'edit:plugin:hypestyler:layout:params[layout_sidebar]:hint' => 'Span width in a 12 column grid. Set to 0 to hide the sidebar and merge its content with the left sidebar',
	'edit:plugin:hypestyler:layout:params[displaylogo]' => 'Site Logo',
	'edit:plugin:hypestyler:layout:params[displaylogo]:hint' => 'Display logo or sitename '	,
	'edit:plugin:hypestyler:layout:params[path_to_logo]' => 'Path to site logo',
	'edit:plugin:hypestyler:layout:params[path_to_logo]:hint' => 'Include the relative or absolute path to your logo',
	'edit:plugin:hypestyler:layout:params[layout_owner_block_position]' => 'Position of the owner block',
	'edit:plugin:hypestyler:layout:params[layout_owner_block_position]:hint' => 'Position of the owner block (group/user) in a 3-column layout',
	'edit:plugin:hypestyler:layout:params[layout_sidebar_content_position]' => 'Page sidebar content position',
	'edit:plugin:hypestyler:layout:params[layout_sidebar_content_position]:hint' => 'Sidebar, where sidebar content should be displayed. This content would include views passed to the sidebar by individual plugins',
	'edit:plugin:hypestyler:layout:params[show_elgg_topbar]'=> 'Show native Elgg topbar',
	'edit:plugin:hypestyler:layout:params[show_elgg_topbar]:hint' => 'Display Elgg\'s native topbar (restyled)',
	'edit:plugin:hypestyler:layout:params[show_styler_toolbar]' => 'Show vertical tools menu',
	'edit:plugin:hypestyler:layout:params[show_styler_toolbar]:hint' => 'Display vertical tools menu',
	'edit:plugin:hypestyler:layout:params[styler_toolbar_icons]' => 'Show tool icons in the vertical toolbar',
	'edit:plugin:hypestyler:layout:params[styler_toolbar_icons]:hint' => 'Show tool icons in the vertical toolbar (icon paths settings are available in the Color Scheme section)',
	'edit:plugin:hypestyler:layout:params[show_styler_header_menu]' => 'Show header menu',
	'edit:plugin:hypestyler:layout:params[show_styler_header_menu]:hint' => 'Display header menu (next to logo)',
	'edit:plugin:hypestyler:layout:params[show_userpanel]' => 'Show dropdown userpanel',
	'edit:plugin:hypestyler:layout:params[show_userpanel]:hint' => 'Display dropdown userpanel in the tools menu',
	'edit:plugin:hypestyler:layout:params[show_styler_toolbar_search]' => 'Toolbar search form',
	'edit:plugin:hypestyler:layout:params[show_styler_toolbar_search]:hint' => 'Show the search form on the toolbar',
	'edit:plugin:hypestyler:layout:params[show_breadcrumbs]' => 'Show breadcrumbs',
	'edit:plugin:hypestyler:layout:params[show_breadcrumbs]:hint' => 'Show or hide breadcrumbs',
	'edit:plugin:hypestyler:layout:params[footercontent]' => 'Footer text',
	
	'edit:plugin:hypestyler:styling:pallettes:params[chosen_theme]' => 'Theme Preset',
	'edit:plugin:hypestyler:styling:pallettes:params[chosen_theme]:hint' => 'Select a preset theme (save and refresh the page for changes to take effect)',
	'edit:plugin:hypestyler:styling:pallettes:params[pagebg]' => 'Page background color',
	'edit:plugin:hypestyler:styling:pallettes:params[pagebgurl]' => 'Page background image URL',
	'edit:plugin:hypestyler:styling:pallettes:params[pagebgattachment]' => 'Attachment of the background image',
	'edit:plugin:hypestyler:styling:pallettes:params[pagebgposition]' => 'Position of the background image',
	'edit:plugin:hypestyler:styling:pallettes:params[pagebgrepeat]' => 'Tiling of the background image',
	'edit:plugin:hypestyler:styling:pallettes:params[containerbg]' => 'Content container background color',
	'edit:plugin:hypestyler:styling:pallettes:params[containerborder]' => 'Container side border color',
	'edit:plugin:hypestyler:styling:pallettes:params[maincolor]' => 'Main (dark) color',
	'edit:plugin:hypestyler:styling:pallettes:params[maincolor2]' => 'Second main (hover over) color',
	'edit:plugin:hypestyler:styling:pallettes:params[canvasbg]' => 'Canvas background (light) color',
	'edit:plugin:hypestyler:styling:pallettes:params[midbg]' => 'Additional (accessory) color',
	'edit:plugin:hypestyler:styling:pallettes:params[borderradius]' => 'Border radius (for applicable UI elements)',
	'edit:plugin:hypestyler:styling:pallettes:params[styler_toolbar_icons_path]' => 'Path to toolbar icons folder',
	'edit:plugin:hypestyler:styling:pallettes:params[styler_toolbar_icons_path]:hint' => 'Absolute or relative path to a folder containing toolbar icons',
	'edit:plugin:hypestyler:styling:pallettes:params[styler_header_menu_icons_path]' => 'Path to header menu icons folder',
	'edit:plugin:hypestyler:styling:pallettes:params[styler_header_menu_icons_path]:hint' => 'Absolute or relative path to a folder containing header menu icons',
	'edit:plugin:hypestyler:styling:pallettes:params[custom_css_rules]' => 'Additional CSS Rules',
	'edit:plugin:hypestyler:styling:pallettes:params[custom_css_rules]:hint' => 'Custom CSS rules to be added to the end of the stylesheet',
	
	'edit:plugin:hypestyler:styling:typography:params[font_serif]' => 'Default font serif',

	'edit:plugin:hypestyler:index:params[indexdisplay]' => 'Home page (logged out)',
	'edit:plugin:hypestyler:index:params[indexdisplay_firstlogin]' => 'Home page (first login)',
	'edit:plugin:hypestyler:index:params[indexdisplay_loggedin]' => 'Home page (logged in)',
	'edit:plugin:hypestyler:index:params[indexdisplayurl]' => 'Forward URL (logged out)',
	'edit:plugin:hypestyler:index:params[indexdisplay_firstlogin_url]' => 'Forward URL (first login)',
	'edit:plugin:hypestyler:index:params[indexdisplay_loggedin_url]' => 'Forward URL (logged in)',
	'edit:plugin:hypestyler:index:custom_url:hint' => 'Relative url. Use [[username]] and [[userguid]] to dynamically replace url segments with actual user name and/or guid',
	'edit:plugin:hypestyler:index:params[indexdisplaycontent]' => 'Custom home page content (logged out)',
	'edit:plugin:hypestyler:index:params[indexdisplay_firstlogin_content]' => 'Custom home page content (first login)',
	'edit:plugin:hypestyler:index:params[indexdisplay_loggedin_content]' => 'Custom home page content (logged in)',

	'hj:styler:index:activity' => 'Forward to Activity',
	'hj:styler:index:custom_index' => 'Show custom_index plugin index',
	'hj:styler:index:custom' => 'Show custom HTML content (edit below)',
	'hj:styler:index:dashboard' => 'Forward to Dashboard',
	'hj:styler:index:profile' => 'Forward to Profile',
	'hj:styler:index:profile_edit' => 'Forward to Edit Profile page',
	'hj:styler:index:settings' => 'Forward to Settings page',
	'hj:styler:index:custom_url' => 'Forward to custom URL (edit below)',
	'hj:styler:index:user_preference' => 'Let user decide',


	'hj:styler:fonts:select' => 'Select...',
	
	'hj:styler:hjcustommodule:context' => 'Current context: %s',
	
	'hj:styler:logo:yes' => 'Logo',
	'hj:styler:logo:no' => 'Sitename',

	'hj:styler:left' => 'Left',
	'hj:styler:right' => 'Right',

	'hj:styler:enable' => 'Enable',
	'hj:styler:disable' => 'Disable',
	
	'hj:styler:topbar:on' => 'Display',
	'hj:styler:topbar:off' => 'Don\'t Display',
	'hj:styler:topbar:disable' => 'Disable',
	'hj:styler:topbar:enable' => 'Enable',

	'hj:styler:show' => 'Show',
	'hj:styler:hover' => 'Show as hover effect',
	'hj:styler:hide' => 'Hide',


	'hj:styler:bgrepeat:repeat' => 'Repeat',
	'hj:styler:bgrepeat:repeat-x' => 'Repeat only horizontally',
	'hj:styler:bgrepeat:repeat-y' => 'Repeat only vertically',
	'hj:styler:bgrepeat:no-repeat' => 'Do not repeat',

	'hj:styler:canvas_style:bordered' => 'Bordered',
	'hj:styler:canvas_style:borderless' => 'Borderless',

	// Sandbox
	'hj:styler:sandbox:introduction' => 'Sandbox',
	'hj:styler:sandbox:breakout' => 'Break out of iframe',
	'hj:styler:sandbox:buttons' => 'Buttons',
	'hj:styler:sandbox:components' => 'Components',
	'hj:styler:sandbox:forms' => 'Forms',
	'hj:styler:sandbox:grid' => 'Grid',
	'hj:styler:sandbox:icons' => 'Icons',
	'hj:styler:sandbox:modules' => 'Modules',
	'hj:styler:sandbox:navigation' => 'Navigation',
	'hj:styler:sandbox:typography' => 'Typography',
	'hj:styler:sandbox:miscellaneous' => 'Miscellaneous',

	'hj:styler:media_type:desktop' => 'Desktop',
	'hj:styler:media_type:tablet' => 'Tablet',
	'hj:styler:media_type:phone' => 'Phone',
	
	'hj:styler:typography:body' => 'body',
	'hj:styler:typography:link' => 'link',
	'hj:styler:typography:link-hover' => 'link hover',
	'hj:styler:typography:h1' => 'heading 1',
	'hj:styler:typography:h2' => 'heading 2',
	'hj:styler:typography:h3' => 'heading 3',
	'hj:styler:typography:h4' => 'heading 4',
	'hj:styler:typography:h5' => 'heading 5',
	'hj:styler:typography:h6' => 'heading 6',
	'hj:styler:typography:heading-site' => 'site title',
	'hj:styler:typography:heading-main' => 'page title',
	'hj:styler:typography:p' => 'paragraph',
	'hj:styler:typography:pre' => 'pre',
	'hj:styler:typography:code' => 'code',
	'hj:styler:typography:b' => 'bold',
	'hj:styler:typography:del' => 'del',
	'hj:styler:typography:i' => 'italic',
	'hj:styler:typography:strong' => 'strong',
	'hj:styler:typography:em' => 'em',
	'hj:styler:typography:abbr' => 'abbr',
	'hj:styler:typography:acronym' => 'acronym',
	'hj:styler:typography:blockquote' => 'quote',
	'hj:styler:typography:subtext' => 'subtext',
	'hj:styler:typography:text-help' => 'help text',
	'hj:styler:typography:quiet' => 'quiet',
	'hj:styler:typography:loud' => 'loud',

	'hj:styler:modules:dialog-container' => 'DIALOG > container',
	'hj:styler:modules:dialog-head' => 'DIALOG > header',
	'hj:styler:modules:dialog-body' => 'DIALOG > body',
	'hj:styler:modules:dialog-footer' => 'DIALOG > footer',
	'hj:styler:modules:info-container' => 'INFO > container',
	'hj:styler:modules:info-head' => 'INFO > header',
	'hj:styler:modules:info-body' => 'INFO > body',
	'hj:styler:modules:info-footer' => 'INFO > footer',
	'hj:styler:modules:aside-container' => 'ASIDE > container',
	'hj:styler:modules:aside-head' => 'ASIDE > header',
	'hj:styler:modules:aside-body' => 'ASIDE > body',
	'hj:styler:modules:aside-footer' => 'ASIDE > footer',
	'hj:styler:modules:widget-container' => 'WIDGET > container',
	'hj:styler:modules:widget-head' => 'WIDGET > header',
	'hj:styler:modules:widget-body' => 'WIDGET > body',
	'hj:styler:modules:widget-footer' => 'WIDGET > footer',
	'hj:styler:modules:group-container' => 'GROUP > container',
	'hj:styler:modules:group-head' => 'GROUP > header',
	'hj:styler:modules:group-body' => 'GROUP > body',
	'hj:styler:modules:group-footer' => 'GROUP > footer',
	'hj:styler:modules:featured-container' => 'FEATURED > container',
	'hj:styler:modules:featured-head' => 'FEATURED > header',
	'hj:styler:modules:featured-body' => 'FEATURED > body',
	'hj:styler:modules:featured-footer' => 'FEATURED > footer',

	'hj:styler:layout:page-container' => 'page container',
	'hj:styler:layout:page-wrapper' => 'page wrapper',
	'hj:styler:layout:header-wrapper' => 'header wrapper',
	'hj:styler:layout:logo-wrapper' => 'logo wrapper',
	'hj:styler:layout:toolbar-wrapper' => 'toolbar wrapper',
	'hj:styler:layout:canvas-wrapper' => 'canvas wrapper',
	'hj:styler:layout:footer-wrapper' => 'footer wrapper',

	'hj:styler:forms:fieldset' => 'fieldset',
	'hj:styler:forms:legend' => 'fieldset legend',
	'hj:styler:forms:inputall' => 'all inputs',
	'hj:styler:forms:inputall-focus' => 'all inputs > focus effect',
	'hj:styler:forms:inputall-text' => 'all text inputs',
	'hj:styler:forms:inputall-select' => 'all dropdown inputs',
	'hj:styler:forms:inputall-labeled' => 'checkbox and radio labels',
	'hj:styler:forms:inputall-file' => 'all file',
	'hj:styler:forms:elgginput-text' => 'singline line text input',
	'hj:styler:forms:elgginput-password' => 'password input',
	'hj:styler:forms:elgginput-radios' => 'radio input',
	'hj:styler:forms:elgginput-checkboxes' => 'checkbox input',
	'hj:styler:forms:elgginput-dropdown' => 'dropdown input',
	'hj:styler:forms:elgginput-access' => 'access input',
	'hj:styler:forms:elgginput-file' => 'file input',
	'hj:styler:forms:elgginput-url' => 'url input',
	'hj:styler:forms:elgginput-tags' => 'tags input',
	'hj:styler:forms:elgginput-email' => 'email input',
	'hj:styler:forms:elgginput-date' => 'date input',
	'hj:styler:forms:elgginput-autocomplete' => 'autocomplete input',
	'hj:styler:forms:elgguserpicker' => 'user picker',
	'hj:styler:forms:elgguserpicker-list' => 'user picker list',
	'hj:styler:forms:elgginput-plaintext' => 'multi line text',
	'hj:styler:forms:elgginput-longtext' => 'multi line text with editor',
	'hj:styler:forms:buttonbase' => 'button base',
	'hj:styler:forms:buttonbase-hover' => 'base base > hover',
	'hj:styler:forms:buttonaction' => 'aciton button',
	'hj:styler:forms:buttonaction-hover' => 'action button > hover',
	'hj:styler:forms:buttoncancel' => 'cancel button',
	'hj:styler:forms:buttoncancel-hover' => 'cancel button > hover',
	'hj:styler:forms:buttonsubmit' => 'submit button',
	'hj:styler:forms:buttonsubmit-hover' => 'submit button > hover',
	'hj:styler:forms:buttondelete' => 'delete button',
	'hj:styler:forms:buttondelete-hover' => 'delete button > hover',

	'hj:styler:navigation:pagination' => 'pagination',
	'hj:styler:navigation:pagination-list' => 'pagination container',
	'hj:styler:navigation:pagination-hover' => 'pagination > hover',
	'hj:styler:navigation:pagination-selected' => 'pagination > selected',
	'hj:styler:navigation:pagination-disabled' => 'pagination > disabled',
	'hj:styler:navigation:breadcrumbs' => 'breadcrumbs',
	'hj:styler:navigation:breadcrumbs-link' => 'breadcrumbs link',
	'hj:styler:navigation:breadcrumbs-hover' => 'breadcrumbs link > hover',
	'hj:styler:navigation:site-list' => 'tools menu container',
	'hj:styler:navigation:site' => 'tools menu',
	'hj:styler:navigation:site-hover' => 'tools menu > hover',
	'hj:styler:navigation:page-list' => 'page menu container',
	'hj:styler:navigation:page' => 'page menu',
	'hj:styler:navigation:page-hover' => 'page menu > hover',
	'hj:styler:navigation:filter-list' => 'tab container',
	'hj:styler:navigation:filter' => 'tab',
	'hj:styler:navigation:filter-text' => 'tab text',
	'hj:styler:navigation:filter-text-hover' => 'tab text > hover',
	'hj:styler:navigation:filter-selected' => 'active tab',
	'hj:styler:navigation:filter-selected-text' => 'active tab text',
	'hj:styler:navigation:filter-selected-hover' => 'active tab text hover',
	'hj:styler:navigation:owner-block-list' => 'owner block menu container',
	'hj:styler:navigation:owner-block' => 'owner block menu',
	'hj:styler:navigation:owner-block-hover' => 'owner block menu > hover',
	'hj:styler:navigation:topbar' => 'topbar menu',
	'hj:styler:navigation:topbar-hover' => 'topbar menu > hover',
	'hj:styler:navigation:footer-list' => 'footer menu container',
	'hj:styler:navigation:footer' => 'footer menu',
	'hj:styler:navigation:footer-hover' => 'footer menu > hover',
	'hj:styler:navigation:entity-list' => 'entity menu container',
	'hj:styler:navigation:entity' => 'entity menu',
	'hj:styler:navigation:entity-hover' => 'entity menu > hover',

	'item:object:hjcustommoduleposition' => 'Custom Layout Module',
	'items:object:hjcustommoduleposition' => 'Custom Layout Modules',
	'admin:hj:gallery' => 'Gallery',
	'hj:styler:getuserdropdown' => 'My Shorcuts',
	'styler:myprofile' => "My Profile",
	'styler:dashboard' => "Dashboard",
	'styler:activity' => "News Feed",
	'styler:addpost' => "Write a post",
	'styler:addfile' => "Upload a file",
	'styler:addbookmarks' => "Bookmark a site",
	'styler:addgroups' => "Create a group",
	'styler:addpages' => "Author a page",
	'styler:addphotos' => "Upload photos",
	'styler:addvideos' => "Add a video",
	'styler:addpolls' => "Create a poll",
	'styler:addevent' => "Promote an event",
	'styler:addquestion' => "Ask a question",
	'styler:onlineusers' => "Online now",
	'styler:noonlineusers' => "There are no online users at the moment",
	'styler:noonlineuser' => "There are no online users at the moment",
	'styler:upcomingevents' => "Events",
	'styler:index:blogs' => "Latest blog posts",
	'styler:index:files' => "Recently uploaded files",
	'styler:index:bookmarks' => "Recently bookmarked sites",
	'styler:index:members' => "Newest members of our community",
	'styler:index:groups' => "Newest groups",
	'styler:publish' => "Publish",
	'styler:new' => "new",
	'styler:emptyinbox' => "There are no messages in your inbox",
	'styler:status' => "My status",
	'styler:noevents' => "You do not have any upcoming events",
	'styler:menumore' => "More",

	//Custom Modules
	'hj:label:form:new:hypeStyler:custom_module:create' => 'Create New Module',
	'hj:label:form:edit:hypeStyler:custom_module:create' => 'Edit Module',
	'hj:label:hjcustommodule:title' => 'Module Title',
	'hj:label:hjcustommodule:show_title' => 'Show module title?',
	'hj:label:hjcustommodule:description' => 'Custom HTML Content',
	'hj:label:hjcustommodule:static' => 'Static Content (Elgg Layout Elements)',
	'hj:label:hjcustommodule:widget' => 'Preset Content (Elgg Widget)',
	'hj:label:hjcustommodule:context_show' => 'Module Display',
	'hj:label:hjcustommodule:context' => 'Module Display Criteria',
	'hj:label:hjcustommodule:predefined_css' => 'Preset CSS Classes',
	'hj:label:hjcustommodule:user_css' => 'Additional CSS Classes (e.g. elgg-module-featured)',
	'hj:label:hjcustommodule:span_css' => 'Width (span in a 12-column grid)',
	'hj:label:hjcustommodule:offset_css' => 'Offset (left offset in a 12-column grid)',
	'hj:label:hjcustommodule:access_id' => 'Visibility',

	'hj:styler:modules:static:empty' => 'None',
	'hj:styler:modules:static:menu_extras' => 'Extras menu (RSS, listtype toggle)',
	'hj:styler:modules:static:menu_owner_block' => 'Page owner block',
	'hj:styler:modules:static:menu_page' => 'Page menu',
	'hj:styler:modules:static:menu_header' => 'Header menu',
	'hj:styler:modules:static:menu_tools' => 'Tools menu',
	'hj:styler:modules:static:login' => 'Login box',
	'hj:styler:modules:static:register' => 'Registration box',
	'hj:styler:modules:static:header_logo' => 'Site logo',
	'hj:styler:modules:static:search' => 'Search',
	'hj:styler:modules:static:styler_topbar' => 'Horizontal Toolbar Container',

	'hj:styler:modules:widgets:empty' => 'None',

	'hj:styler:context:all' => 'Show on all pages',
	'hj:styler:context:show' => 'Show in the following contexts',
	'hj:styler:context:hide' => 'Hide in the following contexts',
	'hj:styler:context:url_show' => 'Show where URL starts with',
	'hj:styler:context:url_hide' => 'Hide where URL starts with',
	'hj:styler:context:url_contain' => 'Show where URL contains a keyword',

	'hj:label:hjcustommodule:context:hint' => 'Indicate additional criteria for displaying the module:<br />
	For "Show on all page" - leave empty<br />
	For "Show/Hide in the following contexts" - provide a comma-separated list of Elgg-contexts<br />
	For "Show/Hide where URL starts with" - provide a relative URL segment (e.g. styler/sandbox)<br />
	For "Show where URL contains a keyword" - provide a keyword
	',
	// Admin
	'admin:hj:layout' => 'Edit Custom Modules',
	'hj:styler:admin:emptymodule' => 'This module is empty in this context and will be hidden when Layout Editor is disabled',
	'hj:styler:warning:htmlawed' => 'htmlawed plugin is enabled and you might loose some of your html input. Disable it if you are trying to add html tags that are considered insecure',

	'hj:styler:footer:content' => '<p class=\"footer_legal_links\"><a href=\"http://www.elgg.org\" class=\"footer_elgg_img\" target=\"_blank\">Powered by Elgg</a></p>
                    <p class=\"footer_legal_links\">hypeStyler Theming Framework (c) 2011, GPU GNL v2 / Commercial Licences<br />
                    Theme by <a href=\"mailto:ismayil.khayredinov@gmail.com\">Ismayil Khayredinov</a></p>
                    <p class=\"footer_legal_links\">Background Patterns by http://backgrounds.mysitemyway.com/</p>',

	'edit:plugin:user:hypestyler:params[indexdisplay]' => 'After login, forward me to:',
	'hj:styler:index:user:activity' => 'my activity stream',
	'hj:styler:index:user:dashboard' => 'my dashboard',
	'hj:styler:index:user:profile' => 'my profile',
	
);

add_translation("en", $english);
?>