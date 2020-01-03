<!-- edit popup template -->
<script id="admin-edit-popup-template" type="text/template">
	<div class="color-picker-holder"></div>
	<div class="ep-content">
		<div class="inner">
			<div class="handlebar"><div class="handlebar-inner"><!-- draggable handle --></div></div>
			<div class="ep-options-wrapper">
				<div class="regular-options">
					<nav class="ep-tabs-nav">
						<ul>
							{{tabsNav}}
							<li><a class='close-edit-popup'><!-- close ep --></a></li>
						</ul>
					</nav>
					<div class="edit-popup-help"><div class="close-popup-notice" data-mode="help"><?php echo get_svg('backend', '/icons/ep_close_help'); ?></div><div class="content"></div></div>
					<div class="ep-tabs">
					</div>
				</div>
				<div class="ep-expand-options"></div>
			</div>
		</div>
	</div>
</script>
<!-- expanded options template -->
<script id="expand-options-template" type="text/template">
	<div class="head">
		<div class="back">
			<a class="hide-expand-options"><?php echo get_svg('backend', '/icons/ep_back_arrow'); ?></a>
		</div>
		<div class="title">
			{{title}}
		</div>
		<div class="expand-save-button">
			<a class="close-edit-popup save-button" data-module="{{module}}" data-id="{{id}}"><!-- close ep options --></a>
		</div>
	</div>
	<div class="ep-expand-content">
		{{content}}
	</div>
</script>
<!-- ep posts -->
<script id="ep-post-template" type="text/template">
	<li class="ep-post" data-ep-post-id="{{postId}}">
		<div class="ep-post-inner">
			<div class="ep-post-meta ep-posts-expand">
				<div class="ep-posts-handle"></div>
				<div class="title">
					<p>{{postTitle}}</p>
				</div>
				<div class="ep-meta-right">
					<div class="ep-posts-remove ep-posts-icon admin-click-handler" data-handler="execute" data-action-type="epPosts" data-action="removePost" data-delete-id="{{postId}}" data-content-id="{{contentId}}"></div>
					<div class="ep-posts-icon ep-posts-expand-icon"></div>
				</div>
			</div>
			<div class="ep-post-options"></div>
		</div>
	</li>
</script>
<!-- ep add post dropdown -->
<script id="ep-add-post-dropdown-template" type="text/template">	
	<div class="ep-posts-dropdown">
		<div class="ep-posts-close admin-click-handler" data-handler="execute" data-action-type="epPosts" data-action="hideAddPostDropdown"><?php echo get_svg('backend', '/icons/ep_close_help'); ?></div>
		<div class="ep-posts-input"><input class="ep-posts-search" type="text" placeholder="Search for pages or projects"></div>
		<ul>{{content}}</ul>
	</div>
</script>
<!-- ep posts add -->
<script id="ep-add-post-template" type="text/template">
	<li class="ep-add-post" data-ep-post-id="{{postId}}" data-post-title="{{postTitleLowerCase}}" data-content-id="{{contentId}}">
		<div class="ap-add-meta">
			<div class="title">
				<p>{{postTitle}}</p>
			</div>
			<div class="ep-posts-add"></div>
		</div>
	</li>
</script>
<!-- ep posts options -->
<script id="ep-post-options-template" type="text/template">
	<div class="option">
		<div class="thumbnail option-inner">
			<div class="attribute span4">
				<h4>Custom Thumbnail</h4>
				<div class="media-upload-box ep-posts-upload-box" data-upload-box="{{contentId}}">
					<a class="semplice-button white-button admin-click-handler ep-thumb-upload" data-handler="execute" data-action="init" data-action-type="mediaLibrary" data-media-type="image" data-media-type="image" data-upload="epPostThumbnail" name="post_thumbnail" data-content-id="{{contentId}}" data-post-id="{{postId}}">{{imageSrc}}</a>
					<a class="admin-click-handler remove-media" data-handler="execute" data-action="image" data-action-type="delete" data-content-id="{{contentId}}" name="post_thumbnail" data-post-id="{{postId}}"><?php echo get_svg('backend', '/icons/icon_delete'); ?></a>
				</div>
			</div>
		</div>
	</div>
	<div class="option">
		<div class="option-inner">
			<div class="attribute span4">
				<h4>Classes</h4>
				<input type="text" name="post_custom_class" class="admin-listen-handler" data-handler="epPostOptions" value="{{custom_class}}" placeholder="Classes" data-content-id="{{contentId}}" data-post-id="{{postId}}">
			</div>
		</div>
	</div>
</script>