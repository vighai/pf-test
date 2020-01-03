<!-- webfont templates -->
<script id="webfonts-template" type="text/template">
	<div class="customize-sidebar">
			<div class="webfonts-ressources">
				<h3 class="sidebar-title">Resources</h3>
				<div class="sidebar-spacer-full"></div>
					<ul>
						{{ressource}}
					</ul>
				<a class="add-ressource-button admin-click-handler" data-handler="execute" data-action="addRessourcePopUp" data-setting-type="webfonts" data-action-type="customize" data-options="service" data-mode="add">+ Add Resource</a>
			</div>
	</div>
	<div class="customize-inner">
		<div class="customize-heading">
			<div class="inner">
				<div class="admin-row">
					<div class="sub-header admin-column">
						<h2 class="admin-title">Webfonts</h2>
						<a class="admin-click-handler semplice-button gray-button" data-handler="execute" data-action="addWebfontPopUp" data-setting-type="webfonts" data-action-type="customize" data-options="add-font" data-mode="add">Add webfont</a> 
					</div>
				</div>
			</div>
		</div>
		<div class="customize-content">
			<div class="webfonts">
				<ul>
					{{content}}
				</ul>
			</div>
		</div>
	</div>
</script>
<script id="webfonts-onboarding-template" type="text/template">
	<div class="customize-content">
		<div class="webfonts-onboarding">
			<div class="head"></div>
			<div class="content">
				<h2>Custom Webfonts</h2>
				<p>In Semplice you can add fonts from any external service (like Typekit, Fonts.com) or just add your own self hosted fonts.</p>
				<a class="semplice-button admin-click-handler" data-handler="execute" data-action="addRessourcePopUp" data-setting-type="webfonts" data-action-type="customize" data-options="service" data-mode="add">Add your first Webfont</a>
			</div>
			<div class="help-videos">
				<a href="https://vimeo.com/214124569/e1337fa720" target="_blank">Add serviced fonts</a>
				<a class="self-hosted" href="https://vimeo.com/214964290/5c4cc9f3aa" target="_blank">Add selfhosted fonts</a>
			</div>
		</div>
	</div>
</script>
<script id="webfonts-addfont-popup-template" type="text/template">
	<div id="webfonts-add-font" class="popup">
		<div class="popup-inner">
			<div class="popup-close admin-click-handler" data-handler="hidePopup">
				<?php echo get_svg('backend', '/icons/popup_close'); ?>
			</div>
			<div class="popup-content">
				<h3>{{title}}</h3>
				{{options}}
			</div>
			<div class="popup-footer">
				<a class="admin-click-handler cancel" data-handler="hidePopup">Cancel</a><a class="semplice-button admin-click-handler" data-handler="execute" data-action-type="customize" data-setting-type="webfonts" data-action="{{mode}}Webfont" data-font-id="{{id}}">{{mode}} Webfont</a>
			</div>
			<div class="webfonts-help">
				<div class="close-popup-notice" data-mode="webfonts">
					<?php echo get_svg('backend', '/icons/ep_close_help'); ?>
				</div>
				<div class="content">
					{{content}}
				</div>
			</div>
		</div>
	</div>
</script>
<script id="webfonts-addfont-list-template" type="text/template">
	<li id="{{fontId}}">
		<a class="admin-click-handler edit-font" data-handler="execute" data-action-type="customize" data-setting-type="webfonts" data-action="addWebfontPopUp" data-font-id="{{fontId}}" data-mode="edit" data-options="add-font">
			<p class="font-name">{{name}}</p>
			<h4 class="font-preview {{fontId}}">ABCabc0123 The quick brown fox</h4>
		</a>
		<div class="webfonts-actions">
			<ul>
				<li><a class="admin-click-handler edit" data-handler="execute" data-action-type="customize" data-setting-type="webfonts" data-action="addWebfontPopUp" data-font-id="{{fontId}}" data-mode="edit" data-options="add-font"><?php echo get_svg('backend', '/icons/icon_edit'); ?></a></li>
				<li><a class="admin-click-handler delete" data-handler="execute" data-action-type="popup" data-type="removeFont" data-action="deleteWebfont" data-delete-id="{{fontId}}"><?php echo get_svg('backend', '/icons/icon_delete'); ?></a></li>
			</ul>
		</div>
	</li>
</script>
<script id="webfonts-ressource-popup-template" type="text/template">
	<div id="webfonts-add-ressource" class="popup">
		<div class="popup-inner">
			<div class="popup-close admin-click-handler" data-handler="hidePopup">
				<?php echo get_svg('backend', '/icons/popup_close'); ?>
			</div>
			<div class="popup-content">
				<h3>Add new resource</h3>
				<div class="option">
					<div class="option-inner">
						<div class="attribute span4-popup">
							<h4>Resource type <span class="show-help">(?)<span><b>Webservice</b><br />Integrate any fonts you like from a webfont service such as Fonts.com, Typekit, Google Fonts etc. <a href="https://vimeo.com/214124569/e1337fa720" target="_blank">Here is a little video tutorial for you.</a><br /><br /><b>Self hosted</b><br />Integrate fonts that are hosted on your own web server. <a href="https://vimeo.com/214964290/5c4cc9f3aa" target="_blank">You can see how that works in this video.</a></span></span></h4>
							<div class="option-switch">
								<ul class="twoway webfonts-type-switch">
									<li><a class="admin-click-handler" data-handler="switchChange" data-callback="webfontsRessourceSwitch" data-name="ressource-type" data-switch-val="service" data-ressource-id="{{id}}">Service</a></li>
									<li><a class="admin-click-handler" data-handler="switchChange" data-name="ressource-type" data-callback="webfontsRessourceSwitch" data-switch-val="self-hosted" data-ressource-id="{{id}}">Self Hosted</a></li>
									<input type="hidden" name="ressource-type" value="service" class="is-webfonts-setting">
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="options">
					{{options}}
				</div>
			</div>
			<div class="popup-footer">
				<a class="admin-click-handler cancel" data-handler="hidePopup">Cancel</a><a class="semplice-button admin-click-handler" data-handler="execute" data-action-type="customize" data-setting-type="webfonts" data-action="{{mode}}Ressource" data-ressource-id="{{id}}">{{mode}}</a>
			</div>
			<div class="webfonts-help">
				<div class="close-popup-notice" data-mode="webfonts">
					<?php echo get_svg('backend', '/icons/ep_close_help'); ?>
				</div>
				<div class="content">
					{{content}}
				</div>
			</div>
		</div>
	</div>
</script>
<script id="webfonts-ressource-list-template" type="text/template">
	<li id="{{id}}" class="{{type}}"{{css}}>
		<h5 class="ressource-name">{{name}}</h5>
		<div class="webfonts-ressources-actions">
			<ul>
				<li><a class="admin-click-handler" data-handler="execute" data-action-type="customize" data-setting-type="webfonts" data-action="addRessourcePopUp" data-mode="edit" data-ressource-id="{{id}}" data-options="{{type}}"><?php echo get_svg('backend', '/icons/icon_edit'); ?></a></li>
				<li><a class="admin-click-handler" data-handler="execute" data-action-type="popup" data-type="removeRessource" data-action="deleteWebfont" data-delete-id="{{id}}"><?php echo get_svg('backend', '/icons/icon_delete'); ?></a></li>
			</ul>
		</div>
	</li>
</script>
<script id="webfonts-unassigned" type="text/template">
	<div class="webfonts-unassigned" {{css}}>
		<h2>You have unassigned webfonts</h2>
		<p>We've detected that you removed some of the fonts you are using in your posts. Feel free to<br />re-assign them to automatically replace the removed fonts in your posts.</p>
		<div class="unassigned-fonts-head">
			<div>Missing Fonts</div>
			<div>Replace With</div>
		</div>
		<div class="unassigned-fonts">
			{{fonts}}
		</div>
	</div>
</script>