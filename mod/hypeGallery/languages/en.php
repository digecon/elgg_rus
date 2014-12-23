<?php

$english = array(

    /**
     *  Gallery UI elements
     */
    'gallery' => 'Gallery',
    'hj:gallery:menu:owner_block' => 'Gallery',

	'item:object:hjalbum' => 'Album',
	'items:object:hjalbum' => 'Albums',
	'hj:gallery:albums' => 'Albums',
	
	'item:object:hjalbumimage' => 'Media',
	'items:object:hjalbumimage' => 'Media',

    'hj:gallery:album:owner' => "%s's Album",
    'hj:gallery:albums:owner' => "%s's Albums",
	'hj:gallery:albums:friends' => "Friends' Albums",
	'hj:gallery:albums:friends:owner' => "%s\s Friends' Albums",
	'hj:gallery:album:author' => 'by %s',
	'hj:gallery:albums:all' => 'Site Albums',
	'hj:gallery:albums:group' => '%s\'s Albums',
	'hj:gallery:albums:groups' => 'Group albums',
    'hj:gallery:addnew' => 'Create Album',
    'hj:gallery:addimage' => 'Upload Files',
    'hj:gallery:noalbums' => 'There are no albums yet',
	'hj:gallery:allalbums' => 'All Site Albums',
	'hj:gallery:albums:mine' => 'My Albums',
	'hj:gallery:album:edit' => 'Edit %s',
	'hj:gallery:albums:favorites' => 'Favorites',
	'hj:gallery:albums:favorites:mine' => 'My Favorites',
	'hj:gallery:albums:favorites:owner' => '%s\'s Favorites',

	'hj:gallery:albums:friends:none' => 'You do not have any friends yet',

	'gallery:add' => 'Create an album',
	'hj:gallery:edit:object:hjalbum' => 'Edit album',
	'hj:gallery:edit:details' => 'Add other details',

	'hj:gallery:create:album' => 'Create an album',
	'hj:gallery:manage:album' => 'Manage Album',
	'hj:gallery:manage:instructions' => 'This is a collaborative album and you are allows upload images to it. Below you will only see files uploaded by you',
	
    /**
     * Labels
     */
    'hj:label:form:new:hypeGallery:gallery:create' => 'Create New Gallery',
    'hj:label:form:edit:hypeGallery:gallery:create' => 'Edit Your Gallery',
    'hj:label:form:new:hypeGallery:album' => 'Add New Album',
    'hj:label:form:edit:hypeGallery:album' => 'Edit Album',
    'hj:label:form:new:hypeGallery:album:image' => 'Add Image',
    'hj:label:form:edit:hypeGallery:album:image' => 'Edit Image',

    'hj:label:hjalbum:title' => 'Album Name',
    'hj:label:hjalbum:description' => 'Description',
    'hj:label:hjalbum:location' => 'Album Location',
    'hj:label:hjalbum:date' => 'Album Date',
    'hj:label:hjalbum:friend_tags' => 'Friends in this album',
    'hj:framework:relationship_tags:notagged_in' => 'You do not yet have any friends',
    'hj:label:hjalbum:tags' => 'Tags',
    'hj:label:hjalbum:copyright' => 'Copyright Notices',
    'hj:label:hjalbum:access_id' => 'Visibility',
	'hj:label:hjalbum:upload' => 'Upload Images',
	'hj:label:hjalbum:category' => 'Categories',
	'hj:label:hjalbum:permissions' => 'Who can add photos to this album?',
	'hj:label:hjalbum:time_created' => 'Date Created',
	'hj:label:hjalbum:last_action' => 'Last Updated',
	'hj:label:hjalbum:owner' => 'Creator',

    'hj:label:hjalbumimage:image' => 'Upload Image',
    'hj:label:hjalbumimage:title' => 'Title',
    'hj:label:hjalbumimage:description' => 'Description',
    'hj:label:hjalbumimage:location' => 'Location',
    'hj:label:hjalbumimage:date' => 'Date',
    'hj:label:hjalbumimage:friend_tags' => 'Friends in this photo',
    'hj:label:hjalbumimage:tags' => 'Tags',
    'hj:label:hjalbumimage:copyright' => 'Copyright Notices',
    'hj:label:hjalbumimage:access_id' => 'Visibility',
	'hj:label:hjalbumimage:time_created' => 'Uploaded',
	'hj:label:hjalbumimage:owner' => 'Added by',
	'hj:label:hjalbumimage:category' => 'Categories',
	
	'permission:value:private' => 'Just me',
	'permission:value:friends' => 'Me and my friends',
	'permission:value:public' => 'Everyone',
	'permission:value:group' => 'Group Members',

	'hj:gallery:image:makeavatar' => 'Make Profile Picture',
	'hj:gallery:image:makecover' => 'Make Album Cover',
	'hj:gallery:image:download' => 'Download',
	'hj:gallery:image:cropper' => 'Crop New Thumbnails',
	'hj:gallery:image:reorder' => 'Drag & Drop to reorder',
	'hj:gallery:image:priority' => 'Ordering position',
	'hj:gallery:image:tag' => 'Tag',

	'hj:gallery:tools:crop:success' => 'Thumbnails were successfully created',
	'hj:gallery:tools:crop:error' => 'Thumbnails could not be created created',
	'hj:gallery:tools:crop' => 'Create a thumbnail',
	'hj:gallery:tools:crop:preview' => 'New Thumbnail',
	'hj:gallery:tools:crop:current' => 'Current Thumbnail',
	'hj:gallery:tools:crop:instructions' => '<b>&larr;</b>Click and drag a square on the left to match how you want the thumb cropped. A preview will appear in the box below. It may take some time for the changes to propogate, until browser cache is cleared',
	'hj:gallery:tools:crop:loading' => 'Loading cropping tool...',
	'hj:gallery:tools:crop:ready' => 'Cropping Tool',
	
	'hj:gallery:byline' => 'Published by %s %s',
	'hj:gallery:published' => 'Published on %s',

    /**
     * Actions
     */
    'hj:gallery:save:success' => 'Item was successfully saved',
    'hj:gallery:save:error' => 'Item could not be saved',
    'hj:gallery:delete:success' => 'Item was successfully deleted',
    'hj:gallery:delete:error' => 'Item could not be deleted',

	'hj:gallery:upload:error:noalbum' => 'Album does not exist or you do not have permissions to add new files to it',
	
	/**
     * River
     */
	'river:create:object:hjalbumimage' => '%s uploaded a new image %s',
	'river:update:object:hjalbumimage' => '%s updated their image %s',

	'river:create:object:hjalbum' => '%s created a new album %s [%s images]',
	'river:update:object:hjalbum' => '%s uploaded %s images to an album %s [%s images]',
	'hj:gallery:new' => 'new',

	'hj:gallery:tools:cover:success' => 'New album cover was successfully set',
	'hj:gallery:tools:cover:error' => 'There was a problem with setting an album cover',

	'hj:gallery:tools:tagger:start' => 'Start Tagging',
	'hj:gallery:tools:tagger:stop' => 'Stop Tagging',
	'hj:gallery:phototag:success' => 'Tag added successfully',
	'hj:gallery:phototag:error' => 'Tag could not be added',

	'hj:gallery:menu:owner_block' => 'Albums',

	'hj:gallery:enablegallery' => 'Enable group gallery',
	'gallery:group' => 'Group Albums',

	'hj:gallery:image:container' => ' in %s',

	'hj:gallery:switch:photostream' => 'Photostream',
	'hj:gallery:switch:albums' => 'Album View',
	'hj:gallery:switch:thumbs' => 'Thumbnails',
	'hj:gallery:switch:details' => 'Summary',
	'hj:gallery:switch:detail_full' => 'Full',
	'hj:gallery:goto:full' => 'View Image Profile',

	'hj:gallery:list_type_toggle:table' => 'Table',
	'hj:gallery:list_type_toggle:gallery' => 'Gallery',
	'hj:gallery:list_type_toggle:map' => 'Map',

	'hj:gallery:upload:toalbum' => 'Upload',
	'hj:gallery:upload' => 'Add images',

	'hj:gallery:filter' => 'Filter Albums & Images',

	'hj:gallery:upload:imagesuploaded' => '%s files were successfully uploaded',
	'hj:gallery:upload:error' => 'An error occurred while uploading your files',
	'hj:gallery:upload:unsupportedtype' => '%s files could not be uploaded (unsupported type or other errors)',
	'hj:gallery:upload:pending' => '%s files are pending approval',
	'hj:gallery:upload:pending:message' => '
		%s images were uploaded to your album %s and are pending approval. <br />
		You can approve them in by following this link: <br />%s
	',

	'hj:gallery:nofriends' => 'You do not have any friends yet',
	'hj:gallery:nogroups' => 'You do not belong to any groups yet',

	'hj:gallery:groupoption:enable' => 'Enable group albums',

	'hj:gallery:approve' => 'Approve',
	'hj:gallery:approve:error' => 'An error occurred while try to approve this image',
	'hj:gallery:approve:success' => 'Image successfully approved',
	'hj:gallery:upload:approved' => 'Images have been approved',
	'hj:gallery:upload:approved:message' => 'One or more images you uploaded to %s have been approved',

	'hj:gallery:image:thumb:reset' => 'Reset Thumbnails',
	'hj:gallery:thumb:reset:success' => 'Thumbnail was successfully reset',
	'hj:gallery:thumb:reset:error' => 'There was an error resetting the thumbnail',

	'hj:gallery:tagger:instructions' => 'To create a tag, select an area on the photo',

	'edit:plugin:hypegallery:params[album_river]' => 'Add album updates to the activity stream',
	'edit:plugin:hypegallery:hint:album_river' => 'Enabling this option will add entries about newly uploaded images to the activity stream',

	'edit:plugin:hypegallery:params[favorites]' => 'Enable favorites tab on the dashboard',
	'edit:plugin:hypegallery:hint:favorites' => 'Enabling this option will add a favorites tab and display a list of liked images',

	'edit:plugin:hypegallery:params[interface_location]' => 'Enable location interface',
	'edit:plugin:hypegallery:hint:interface_location' => 'Enabling this option will add a required location field to images, and add a map view (should the map interface be enabled)',

	'edit:plugin:hypegallery:params[interface_calendar]' => 'Enable dates for albums and images',
	'edit:plugin:hypegallery:hint:interface_calendar' => 'Enabling this option will add a required date field to images, and add a calendar view (should the calendar interface be enabled)',

	'edit:plugin:hypegallery:params[copyrights]' => 'Add copyright information to albums and images',
	'edit:plugin:hypegallery:hint:copyrights' => 'Enabling this option will add a required copyright field to images',

	'edit:plugin:hypegallery:params[categories]' => 'Enable categories',
	'edit:plugin:hypegallery:hint:categories' => 'Enablighs this option will add a categories field to images',

	'edit:plugin:hypegallery:params[collaborative_albums]' => 'Enable collaborative albums',
	'edit:plugin:hypegallery:hint:collaborative_albums' => 'Enabling this option will allows users to create collaborative albums; other users will be given an opportunity to add images to collaborative albums, pending original creator\'s approval',

	'edit:plugin:hypegallery:params[group_albums]' => 'Enable group albums',
	'edit:plugin:hypegallery:hint:group_albums' => 'Enabling this option will add gallery interface to groups',

	'edit:plugin:hypegallery:params[avatars]' => 'Users can use uploaded images as avatars',
	'edit:plugin:hypegallery:hint:avatars' => 'Enabling this option will allow users to use uploaded images as their avatars',

	'edit:plugin:hypegallery:params[tagging]' => 'Enable image area tagging',
	'edit:plugin:hypegallery:hint:tagging' => 'Enabligh this option will allow users to add image area tags to images',

	'edit:plugin:hypegallery:params[downloads]' => 'Enable downloads',
	'edit:plugin:hypegallery:hint:downloads' => 'Enabling this option will allow users to download images',

	'hj:album:untitled' => 'Untitled',
	'hj:gallery:filedrop:instructions' => 'Drag and Drop your files into this area or %s them from your computer',
	'hj:gallery:filedrop:fallback' => 'select',
	'hj:gallery:filedrop:browsernotsupported' => 'Your browser does not support drag&drop functionality',
	'hj:gallery:filedrop:filetoolarge' => 'One or more files exceed allowed maximum file size',
	'hj:gallery:filedrop:filetypenotallowed' => 'One or more files do not have an allowed file type',

	'hj:gallery:slideshow' => 'Start Slideshow',
	
	'hj:gallery:slideshow:loading' => 'Loading Slideshow...',
	'hj:gallery:slideshow:pager' => '%s of %s',

	'hj:gallery:list:empty' => 'There are no items to show',
	'hj:gallery:inthisphoto' => 'In this photo:',

	'hj:gallery:user:tagged' => 'You have been tagged in a photo',
	'hj:gallery:user:tagged:message' => 'You have been tagged in a photo. You can see the photo and remove it here: %s',
	'hj:gallery:phototag:river' => '%s tagged %s in %s',
	
);

add_translation("en", $english);
?>