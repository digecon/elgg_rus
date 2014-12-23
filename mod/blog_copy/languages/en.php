<?php
/**
 * Blog English language file.
 *
 */

$english = array(
	'blog_copy' => 'Blogs',
	'blog_copy:blog_copys' => 'Blogs',
	'blog_copy:revisions' => 'Revisions',
	'blog_copy:archives' => 'Archives',
	'blog_copy:blog_copy' => 'Blog',
	'item:object:blog_copy' => 'Blogs',

	'blog_copy:title:user_blog_copys' => '%s\'s blog_copys',
	'blog_copy:title:all_blog_copys' => 'All site blog_copys',
	'blog_copy:title:friends' => 'Friends\' blog_copys',

	'blog_copy:group' => 'Group blog_copy',
	'blog_copy:enableblog_copy' => 'Enable group blog_copy',
	'blog_copy:write' => 'Write a blog_copy post',

	// Editing
	'blog_copy:add' => 'Add blog_copy post',
	'blog_copy:edit' => 'Edit blog_copy post',
	'blog_copy:excerpt' => 'Excerpt',
	'blog_copy:body' => 'Body',
	'blog_copy:save_status' => 'Last saved: ',
	'blog_copy:never' => 'Never',

	// Statuses
	'blog_copy:status' => 'Status',
	'blog_copy:status:draft' => 'Draft',
	'blog_copy:status:published' => 'Published',
	'blog_copy:status:unsaved_draft' => 'Unsaved Draft',

	'blog_copy:revision' => 'Revision',
	'blog_copy:auto_saved_revision' => 'Auto Saved Revision',

	// messages
	'blog_copy:message:saved' => 'Blog post saved.',
	'blog_copy:error:cannot_save' => 'Cannot save blog_copy post.',
	'blog_copy:error:cannot_write_to_container' => 'Insufficient access to save blog_copy to group.',
	'blog_copy:messages:warning:draft' => 'There is an unsaved draft of this post!',
	'blog_copy:edit_revision_notice' => '(Old version)',
	'blog_copy:message:deleted_post' => 'Blog post deleted.',
	'blog_copy:error:cannot_delete_post' => 'Cannot delete blog_copy post.',
	'blog_copy:none' => 'No blog_copy posts',
	'blog_copy:error:missing:title' => 'Please enter a blog_copy title!',
	'blog_copy:error:missing:description' => 'Please enter the body of your blog_copy!',
	'blog_copy:error:cannot_edit_post' => 'This post may not exist or you may not have permissions to edit it.',
	'blog_copy:error:revision_not_found' => 'Cannot find this revision.',

	// river
	'river:create:object:blog_copy' => '%s published a blog_copy post %s',
	'river:comment:object:blog_copy' => '%s commented on the blog_copy %s',

	// notifications
	'blog_copy:newpost' => 'A new blog_copy post',
	'blog_copy:notification' =>
'
%s made a new blog_copy post.

%s
%s

View and comment on the new blog_copy post:
%s
',

	// widget
	'blog_copy:widget:description' => 'Display your latest blog_copy posts',
	'blog_copy:moreblog_copys' => 'More blog_copy posts',
	'blog_copy:numbertodisplay' => 'Number of blog_copy posts to display',
	'blog_copy:noblog_copys' => 'No blog_copy posts'
);

add_translation('en', $english);
