<?php

// -----------------------------------------
// semplice
// admin/atts/modules/advancedportfoliogrid.php
// -----------------------------------------

$advancedportfoliogrid = array(
	// hidden options switch, will be controlled by the preset popup
	'options_switch' => array(
		'title'  	 => 'Preset',
		'break'		 => '1',
		'help'	     => 'Note that the options will adjust to the selected grid.',
		'style-class'=> 'hidden',
		'preset' => array(
			'data-input-type' => 'select-box',
			'hide-title' => true,
			'size'		 => 'span4',
			'class'     	=> 'editor-listen hidden apg-preset-select',
			'data-handler'  => 'save',
			'data-visibility-switch' 	=> true,
			'data-visibility-values' 	=> 'horizontal-fullscreen,text,splitscreen',
			'data-visibility-prefix'	=> 'ov-apg',
			'default' 	 => 'horizontal_fullscreen',
			'select-box-values' => array(
				'horizontal-fullscreen'	 => 'Horizontal Fullscreen',
				'text' 				 	 => 'Text Grid',
				'splitscreen'			 => 'Splitscreen'
			),
		),
	),
	'preset' => array(
		'title'  	 => 'Preset',
		'break'		 => '1',
		'help'	     => 'Note that the options will adjust to the selected grid.',
		'hide-title' => true,
		'data-hide-mobile' => true,
		'select_preset' => array(
			'data-input-type' 	=> 'button',
			'title'		 		=> 'Grid Preset',
			'hide-title'		=> true,
			'button-title'		=> 'Change Grid Preset',
			'size'		 		=> 'span4',
			'class'				=> 'semplice-button white-button expand-options',
			'data-expand-options' => 'apg-preset',
		),
	),
	'manage_posts' => array(
		'title'  	 => 'Content',
		'break'		 => '1',
		'help'	     => 'All changes you make here will only apply to this grid and will not be changed globally.',
		'data-hide-mobile' => true,
		'posts' => array(
			'data-input-type' 	=> 'button',
			'title'		 		=> 'Content',
			'hide-title'		=> true,
			'button-title'		=> 'Add Pages / Projects',
			'size'		 		=> 'span4',
			'class'				=> 'semplice-button expand-options',
			'data-expand-options' => 'posts',
		),
	),
	'hor_full_size_options' => array(
		'title'  	 => 'Options',
		'break'		 => '2,2,2',
		'style-class'	=> 'ov-apg-horizontal-fullscreen',
		'data-hide-mobile' => true,
		'hor_full_width' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Images per Row',
			'size'		 => 'span2',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'data-target'=> '.is-content',
			'default' 	 => '6',
			'select-box-values' => array(
				'12' => '1 Image',
				'6' => '2 Images',
				'4' => '3 Images',
				'3' => '4 Images',
			),
		),
		'hor_full_transition' => array(
			'data-input-type' => 'switch',
			'switch-type'	=> 'twoway',
			'title'		 => 'Page Transition',
			'size'		 => 'span2',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'default' 	 => 'disabled',
			'help'  => 'Note: To use transitions, you must enable page transitions in \'Customize › Page Transitions\'.<br /><br />This option will enable a custom page transition made specifically for this grid. Tip: For the best results, the grid should start straight on top as the first content on your page. To achieve this, click \'Branding\' in the top bar and set \'Display content\' to \'Straight on top\'.',
			'switch-values' => array(
				'disabled'	 => 'No',
				'enabled'	 => 'Yes',
			),
		),
		'hor_full_object_fit' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Image Size',
			'size'		 => 'span2',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'data-target'=> '.is-content',
			'default' 	 => 'cover',
			'select-box-values' => array(
				'cover' 	=> 'Cover',
				'inside' 	=> 'Original',
			),
		),
		'hor_full_object_position' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Alignment',
			'size'		 => 'span2',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'data-target'=> '.is-content',
			'default' 	 => 'top-center',
			'help'		 => 'Alignment only works if the \'Image Size\' is set to \'Cover\'.',
			'select-box-values' => array(
				'top-left' 		=> 'Top Left',
				'top-center' 	=> 'Top Center',
				'top-right' 	=> 'Top Right',
				'center-left' 	=> 'Middle Left',
				'center-center' => 'Middle Center',
				'center-right' 	=> 'Middle Right',
				'bottom-left' 	=> 'Bottom Left',
				'bottom-center' => 'Bottom Center',
				'bottom-right'  => 'Bottom Right'
			),
		),
		'hor_full_attraction' => array(
			'title'			=> 'Attraction',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 25,
			'min'			=> 0,
			'max'			=> 9999,
			'data-divider'  => 1000,
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'save',
			'help'			=> 'Attracts the position of the slider to the selected slide. Higher attraction makes the slider move faster. Lower makes it move slower.',
		),
		'hor_full_friction' => array(
			'title'			=> 'Friction',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 280,
			'min'			=> 0,
			'max'			=> 9999,
			'data-divider'  => 1000,
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'save',
			'help'			=> 'Slows the movement of slider. Higher friction makes the slider feel stickier and less bouncy. Lower friction makes the slider feel looser and more wobbly.',
		),
	),
	'hor_full_title_options' 	=> get_title_options('title-options', 'hor_full_', $fonts, 42, 20, 100),
	'hor_full_title_formatting' => get_title_options('title-formatting', 'hor_full_', $fonts, 42, 20, 100),
	'hor_full_type_formatting'  => get_title_options('type-formatting', 'hor_full_', $fonts, 42, 20, 100),
	'hor_full_arrow_options' => array(
		'title'  	 => 'Arrow Options',
		'break'		 => '1,2,2,2',
		'style-class'	=> 'ov-apg-horizontal-fullscreen ep-collapsed',
		'data-hide-mobile' => true,
		'hor_full_arrow_visibility' => array(
			'data-input-type' => 'switch',
			'switch-type'	=> 'twoway',
			'title'		 	=> 'Visibility',
			'size'		 	=> 'span4',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'default' 	 	=> 'visible',
			'switch-values' => array(
				'visible' 	=> 'Visible',
				'hidden' 	=> 'Hidden',
			),
		),
		'hor_full_arrow' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Shape',
			'size'		 => 'span2',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'data-visibility-switch' 	=> true,
			'data-visibility-values' 	=> 'default,alternative,custom',
			'data-visibility-prefix'	=> 'ov-apg-hor-full-arrow',
			'default' 	 => 'default',
			'select-box-values' => array(
				'default' 		=> 'Default',
				'alternative' 	=> 'Alternative',
				'custom'		=> 'Custom',
			),
		),
		'hor_full_arrow_custom' => array(
			'title'				=> 'Custom Shape',
			'help'				=> 'Set a custom shape by add your SVG path string. To make our sizing work make sure to draw the left arrow (right will be just mirrored) on a 100x100 canvas.<br /><br /><b>Help:</b><br />Once you edit your SVG in a text editor you have to copy and paste the \'d\' attribute of your path string. <a href="https://developer.mozilla.org/en-US/docs/Web/SVG/Attribute/d" target="_blank">More Details.</a>',
			'size'				=> 'span2',
			'data-input-type'	=> 'input-text',
			'default'			=> '',
			'class'				=> 'editor-listen',
			'placeholder'		=> 'SVG path string',
			'data-handler' 		=> 'apg',
			'style-class'		=> 'ov-apg-hor-full-arrow-custom',
		),
		'hor_full_arrow_color' => array(
			'data-css-attribute' => 'fill',
			'title'			=> 'Color',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.flickity-button-icon path',
			'default'		=> '#ffffff',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'apg',
		),
		'hor_full_arrow_size' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Size',
			'size'		 => 'span2',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'default' 	 => 'small',
			'select-box-values' => array(
				'small' 		=> 'Small',
				'medium' 		=> 'Medium',
				'large' 		=> 'Large',
				'insane' 		=> 'Insane',
			),
		),
		'hor_full_arrow_bg_color' => array(
			'data-css-attribute' => 'background-color',
			'title'			=> 'Background',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.flickity-button',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'apg',
		),
		'hor_full_arrow_bg_opacity' => array(
			'title'			=> 'BG Opacity',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' => 'range-slider',
			'default'		=> 0,
			'min'			=> 0,
			'max'			=> 100,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'data-range-slider' => 'apg',
		),
	),
	'hor_full_bg_options' => array(
		'title'  	 => 'Background',
		'break'		 => '2',
		'style-class'	=> 'ov-apg-horizontal-fullscreen ep-collapsed',
		'help' 			=> 'This is only visible if you set \'Image Size\' to \'Original\'.',
		'data-hide-mobile' => true,
		'hor_full_bg_even' => array(
			'data-css-attribute' => 'background-color',
			'title'			=> 'BG Even',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.even',
			'default'		=> '#000000',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'apg',
		),
		'hor_full_bg_odd' => array(
			'data-css-attribute' => 'background-color',
			'title'			=> 'BG Odd',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> '.odd',
			'default'		=> '#cccccc',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'apg',
		),
	),
	'hor_full_mouseover_options' => array(
		'title'  	 => 'Mouseover Effect',
		'break'		 => '1,2,2,1',
		'style-class'	=> 'ov-apg-horizontal-fullscreen ep-collapsed',
		'help' 			=> 'Please note that there is no preview for these mouseover effects.',
		'data-hide-mobile' => true,
		'hor_full_hover' => array(
			'data-input-type' => 'select-box',
			'title'			=> 'Effect',
			//'hide-title' => true,
			'size'		 => 'span4',
			'class'     	=> 'editor-listen',
			'data-handler'  => 'save',
			'data-visibility-switch' 	=> true,
			'data-visibility-values' 	=> 'scale-opacity,dim-down,border,none',
			'data-visibility-prefix'	=> 'ov-apg-hor-full-mouseover',
			'default' 	 => 'scale-opacity',
			'select-box-values' => array(
				'scale-opacity' => 'Scale hovered, dim down rest',
				'dim-down'		=> 'Dim down hovered',
				'border'	 => 'Border',
				'none'		 => 'None',
			),
		),
		'hor_full_hover_so_opacity' => array(
			'title'			=> 'Opacity',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' => 'range-slider',
			'default'		=> 40,
			'min'			=> 0,
			'max'			=> 100,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'data-range-slider' => 'apg',
			'data-target'		=> 'no-preview',
			'style-class'	=> 'ov-apg-hor-full-mouseover-scale-opacity'
		),
		'hor_full_hover_so_scale' => array(
			'title'			=> 'Scale in %',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' => 'range-slider',
			'default'		=> 7,
			'min'			=> 0,
			'max'			=> 70,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'data-range-slider' => 'apg',
			'data-target'		=> 'no-preview',
			'style-class'	=> 'ov-apg-hor-full-mouseover-scale-opacity'
		),
		'hor_full_hover_border_width' => array(
			'title'			=> 'Border Width',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' => 'range-slider',
			'default'		=> 15,
			'min'			=> 0,
			'max'			=> 9999,
			'data-has-unit'	=> true,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'data-range-slider' => 'apg',
			'data-target'		=> 'no-preview',
			'style-class'	=> 'ov-apg-hor-full-mouseover-border'
		),
		'hor_full_hover_border_color' => array(
			'title'			=> 'Border Color',
			'size'			=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'	=> 'no-preview',
			'default'		=> '#ffffff',
			'class'			=> 'color-picker admin-listen-handler',
			'data-handler'  => 'colorPicker',
			'data-picker'	=> 'apg',
			'style-class'	=> 'ov-apg-hor-full-mouseover-border'
		),
		'hor_full_hover_dimdown_opacity' => array(
			'title'			=> 'Opacity',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' => 'range-slider',
			'default'		=> 40,
			'min'			=> 0,
			'max'			=> 100,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'data-range-slider' => 'apg',
			'data-target'		=> 'no-preview',
			'style-class'	=> 'ov-apg-hor-full-mouseover-dim-down'
		),
		'hor_full_hover_title_fade' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Title Fade In / out',
			'size'		 => 'span4',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'help'  => 'If you want to fade in the title on mouseover, set the \'Title Visibility\' under Title Options to \'Hidden\'. If you want to hide the title on hover, set the \'Title Visibility\' to something other than \'Hidden\'.',
			'default' 	 => 'none',
			'select-box-values' => array(
				'none'				=> 'None',
				'fadein' 		  	=> 'Fade in only',
				'fadein-top' 		=> 'Fade in + move from top',
				'fadein-right' 		=> 'Fade in + move from right',
				'fadein-bottom' 	=> 'Fade in + move from bottom',
				'fadein-left' 		=> 'Fade in + move from left',
				'fadeout' 		  	=> 'Fade out only',
				'fadeout-top' 		=> 'Fade out + move to top',
				'fadeout-right' 	=> 'Fade out + move to right',
				'fadeout-bottom' 	=> 'Fade out + move to bottom',
				'fadeout-left' 		=> 'Fade out + move to left',
			),
		),
	),
	// mobile options
	'hor_full_responsive_lg' => get_apg_responsive('hor-full', 'lg'),
	'hor_full_responsive_md' => get_apg_responsive('hor-full', 'md'),
	'hor_full_responsive_sm' => get_apg_responsive('hor-full', 'sm'),
	'hor_full_responsive_xs' => get_apg_responsive('hor-full', 'xs'),
	'text_title_options' 	=> get_title_options('title-options-text', 'text_', $fonts, 90, 20, 100),
	'text_title_formatting' => get_title_options('title-formatting', 'text_', $fonts, 90, 20, 100),
	'text_seperator_formatting' => array(
		'title'  	 => 'Seperator Formatting',
		'break'		 => '1,2',
		'style-class'=> 'ov-apg-text ep-collapsed',
		'data-hide-mobile' => true,
		'text_seperator' => array(
			'title'				=> 'Seperator',
			'help'				=> 'Leave this input empty if you don\'t want a separator at all.<br /><br />Note: Separators are only visible for the horizontal Text Grid direction.',
			'size'				=> 'span4',
			'data-input-type'	=> 'input-text',
			'default'			=> '/',
			'class'				=> 'editor-listen',
			'placeholder'		=> 'Seperator',
			'data-handler' 		=> 'apg',
		),
		'text_seperator_color' => array(
			'title'				=> 'Color',
			'data-style-option' => true,
			'size'				=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'		=> '.spacer',
			'default'			=> 'transparent',
			'class'				=> 'color-picker admin-listen-handler',
			'data-handler' 		=> 'colorPicker',
			'data-picker'		=> 'apg',
			'data-target'		=> '.apg-text-seperator',
			'data-css-attribute'=> 'color',
		),
		'text_seperator_font_family' => array(
			'data-input-type' => 'select-fonts',
			'title'		 		=> 'Font Family',
			'size'		 		=> 'span2',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'default' 	 		=> 'bold',
			'select-box-values' => $fonts,
		),
	),
	'text_mouseover_options' => array(
		'title'  	 => 'Mouseover Options',
		'break'		 => '2,3,2',
		'style-class'=> 'ov-apg-text ep-collapsed',
		'data-hide-mobile' => true,
		'text_hover_image_mode' => array(
			'data-input-type'   => 'select-box',
			'title'		 		=> 'Image mode',
			'size'		 		=> 'span2',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'default' 	 		=> 'bold',
			'select-box-values' => array(
				'cover'			 => 'Cover',
				'original' 		 => 'Original (centered)',
				'original_mouse' => 'Original (Stick to mouse)',
			),
		),
		'text_hover_image_width' => array(
			'data-input-type'   => 'select-box',
			'title'		 		=> 'Max Image Width',
			'help'				=> 'Define the maximum image width in percent related to the viewport. If you set 60% for example, your image will be never bigger than 60% of your browser window.',
			'size'		 		=> 'span2',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'default' 	 		=> '60',
			'select-box-values' => array(
				'40'	=> '40% of Viewport',
				'50'	=> '50% of Viewport',
				'60'	=> '60% of Viewport',
				'70'	=> '70% of Viewport',
				'80'	=> '80% of Viewport',
				'90'	=> '90% of Viewport',
				'100'	=> '100% of Viewport',
			),
		),
		'text_hover_effect' => array(
			'data-input-type'   => 'select-box',
			'title'		 		=> 'Mouseover Effect',
			'size'		 		=> 'span2',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'default' 	 		=> 'fade',
			'help'				=> 'If a fade option is selected, the hovered title will remain at 100% opacity on mouseover while all other images and/or titles fade to your defined opacity.',
			'select-box-values' => array(
				'fade_both'	  	=> 'Fade Image and Title',
				'fade_image'	=> 'Fade Image Only',
				'fade_title'	=> 'Fade Title Only',
				'none'		 	=> 'None',
			),
		),
		'text_hover_title_color' => array(
			'title'				=> 'Hover',
			'data-style-option' => true,
			'size'				=> 'span1',
			'data-input-type'	=> 'color',
			'data-target'		=> '.spacer',
			'default'			=> 'transparent',
			'class'				=> 'color-picker admin-listen-handler',
			'data-handler' 		=> 'colorPicker',
			'data-picker'		=> 'apg',
			'help'				=> 'Define your title mouseover color.',
		),
		'text_hover_title_opacity' => array(
			'title'			=> 'Opacity',
			'help'			=> 'Define the opacity of your non-hovered titles.',
			'size'			=> 'span1',
			'offset'		=> false,
			'data-input-type' => 'range-slider',
			'default'		=> 20,
			'min'			=> 0,
			'max'			=> 100,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'data-range-slider' => 'apg',
			'data-target'=> 'no-preview',
			//'responsive'	=> true,
		),
		'text_hover_title_mask' => array(
			'data-input-type' => 'switch',
			'switch-type'	=> 'twoway',
			'title'		 => 'Title Mask',
			'size'		 => 'span2',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'default' 	 => 'disabled',
			'help'  => 'This option will override the mouseover effect option and only works if you set \'Image Mode\' to \'Original (Stick to Mouse)\' and the \'Direction\' to \'Vert\'.<br /><br />Once applied, the title will change color only where it overlaps the image. The rest of the title will remain its original link color.',
			'switch-values' => array(
				'disabled'	 => 'Hidden',
				'enabled'	 => 'Visible',
			),
		),
		'text_hover_title_mask_color' => array(
			'title'				=> 'Title Mask Color',
			'help'				=> 'Define the color for the part of the title that\'s above the image.',
			'data-style-option' => true,
			'size'				=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'		=> '.spacer',
			'default'			=> '#ffffff',
			'class'				=> 'color-picker admin-listen-handler',
			'data-handler' 		=> 'colorPicker',
			'data-picker'		=> 'apg',
		),
	),
	'text_responsive_lg' => get_apg_responsive('text', 'lg'),
	'text_responsive_md' => get_apg_responsive('text', 'md'),
	'text_responsive_sm' => get_apg_responsive('text', 'sm'),
	'text_responsive_xs' => get_apg_responsive('text', 'xs'),
	// splitscreen options
	'splitscreen_options' => array(
		'title'  	 => 'Options',
		'break'		 => '2,2,2',
		'style-class'=> 'ov-apg-splitscreen',
		'data-hide-mobile' => true,
		'splitscreen_layout' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Layout',
			'size'		 => 'span2',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'default' 	 => 'left',
			'select-box-values' => array(
				'left' 			=> 'Title left, image right',
				'right' 		=> 'Image left, title Right',
				'mixed_left' 	=> 'Mixed, title starts left',
				'mixed_right' 		=> 'Mixed, title starts right',
			),
		),
		'splitscreen_object_fit' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Image Size',
			'size'		 => 'span2',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'data-target'=> '.is-content',
			'default' 	 => 'cover',
			'select-box-values' => array(
				'cover' 	=> 'Cover',
				'inside' 	=> 'Original',
			),
		),
		'splitscreen_object_position' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Alignment',
			'size'		 => 'span2',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'data-target'=> '.is-content',
			'default' 	 => 'top-center',
			'help'		 => 'Alignment only works if the \'Image Size\' is set to \'Cover\'.',
			'select-box-values' => array(
				'top-left' 		=> 'Top Left',
				'top-center' 	=> 'Top Center',
				'top-right' 	=> 'Top Right',
				'center-left' 	=> 'Middle Left',
				'center-center' => 'Middle Center',
				'center-right' 	=> 'Middle Right',
				'bottom-left' 	=> 'Bottom Left',
				'bottom-center' => 'Bottom Center',
				'bottom-right'  => 'Bottom Right'
			),
		),
		'splitscreen_column_width' => array(
			'title'			=> 'Title Column Width',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' => 'range-slider',
			'default'		=> 40,
			'min'			=> 1,
			'max'			=> 99,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'data-range-slider' => 'apg',
			'data-target'		=> '.apg-post-meta',
		),
		'splitscreen_column_bg' => array(
			'title'				=> 'Title Column BG',
			'data-style-option' => true,
			'size'				=> 'span2',
			'data-input-type'	=> 'color',
			'default'			=> '#ffffff',
			'class'				=> 'color-picker admin-listen-handler',
			'data-handler' 		=> 'colorPicker',
			'data-picker'		=> 'apg',
			'data-target'		=> '.apg-post-meta',
			'data-css-attribute'=> 'background-color',
		),
		'splitscreen_image_bg' => array(
			'title'				=> 'Image Column BG',
			'data-style-option' => true,
			'size'				=> 'span2',
			'data-input-type'	=> 'color',
			'default'			=> '#dddddd',
			'class'				=> 'color-picker admin-listen-handler',
			'data-handler' 		=> 'colorPicker',
			'data-picker'		=> 'apg',
			'data-target'		=> '.apg-post',
			'data-css-attribute'=> 'background-color',
			'help'				=> 'You can also set an individual background color for each image column by hovering a project and select the background color option on the top.',
		),
	),
	'splitscreen_effect_options' => array(
		'title'  	 => 'Effects & Transitions',
		'break'		 => '1,2',
		'style-class'=> 'ov-apg-splitscreen ep-collapsed',
		'data-hide-mobile' => true,
		'splitscreen_transition' => array(
			'data-input-type' => 'switch',
			'switch-type'	=> 'twoway',
			'title'		 => 'Custom Page Transitions',
			'size'		 => 'span4',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'data-target'=> '.no-preview',
			'default' 	 => 'disabled',
			'help'  => 'Note: To use transitions, you must enable page transitions in \'Customize › Page Transitions\'.<br /><br />This option will enable a custom page transition made specifically for this grid.',
			'switch-values' => array(
				'disabled'	=> 'Disabled',
				'enabled'	=> 'Enabled',
			),
		),
		'splitscreen_scroll_reveal' => array(
			'data-input-type' => 'switch',
			'switch-type'	=> 'twoway',
			'title'		 => 'Reveal on scroll',
			'size'		 => 'span2',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'data-target'=> '.no-preview',
			'default' 	 => 'apg-reveal',
			'help'		 => 'If enabled the content of your grid will get revealed while scrolling.',
			'switch-values' => array(
				'apg-reveal'	=> 'Yes',
				'apg-no-reveal'	=> 'No',
			),
		),
		'splitscreen_parallax' => array(
			'data-input-type' => 'select-box',
			'title'		 => 'Parallax Intensity',
			'size'		 => 'span2',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'data-target'=> '.no-preview',
			'default' 	 => 'apg-reveal',
			'select-box-values' => array(
				'subtle'	=> 'Subtle',
				'medium'	=> 'Medium',
				'intense'   => 'Intense',
				'off'		=> 'Off',
			),
		),
	),
	'splitscreen_title_options' 	=> get_title_options('title-options', 'splitscreen_', $fonts, 42, 20, 120),
	'splitscreen_title_formatting' => get_title_options('title-formatting', 'splitscreen_', $fonts, 36, 36, 120),
	'splitscreen_type_formatting'  => get_title_options('type-formatting', 'splitscreen_', $fonts, 36, 36, 120),
	'splitscreen-vp-options' => array(
		'title'  	 => 'Button',
		'break'		 => '2,2,2,2,2,2',
		'style-class'=> 'ep-collapsed ov-apg-splitscreen',
		'data-hide-mobile' => true,
		'splitscreen_details_visibility' => array(
			'data-input-type' => 'switch',
			'switch-type'	=> 'twoway',
			'title'		 => 'Visibility',
			'size'		 => 'span2',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'default' 	 => 'visible',
			'switch-values' => array(
				'visible'	 => 'Visible',
				'hidden'	 => 'Hidden',
			),
		),
		'splitscreen_details_label' => array(
			'title'				=> 'Label',
			'size'				=> 'span2',
			'data-input-type'	=> 'input-text',
			'default'			=> '',
			'class'				=> 'editor-listen',
			'placeholder'		=> 'View Project',
			'data-handler' 		=> 'apg',
		),
		'splitscreen_details_type' => array(
			'data-input-type' => 'switch',
			'switch-type'	=> 'twoway',
			'title'		 => 'Type',
			'size'		 => 'span2',
			'class'      	=> 'editor-listen',
			'data-handler' 	=> 'apg',
			'default' 	 => 'button',
			'switch-values' => array(
				'button'	=> 'Button',
				'link'	 	=> 'Link',
			),
		),
		'splitscreen_details_padding_top' => array(
			'title'			=> 'Padding Top',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' => 'range-slider',
			'default'		=> 36,
			'min'			=> 0,
			'max'			=> 999,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'data-range-slider' => 'apg',
			'data-style-option' => true,
			'data-has-unit'	=> true,
			'data-css-attribute'=> 'margin-top',
			'data-target'		=> '.apg-post-title .details',
			//'responsive'	=> true,
		),
		'splitscreen_details_bg_color' => array(
			'title'				=> 'Background',
			'data-style-option' => true,
			'size'				=> 'span2',
			'data-input-type'	=> 'color',
			'default'			=> '#efefef',
			'class'				=> 'color-picker admin-listen-handler',
			'data-handler' 		=> 'colorPicker',
			'data-picker'		=> 'apg',
			'data-target'		=> '.apg-post-title .details',
			'data-css-attribute'=> 'background-color',
			'help'			=> 'Background only works if the type is set to \'Button\'.',
		),
		'splitscreen_details_color' => array(
			'title'				=> 'Text Color',
			'data-style-option' => true,
			'size'				=> 'span2',
			'data-input-type'	=> 'color',
			'default'			=> '#000000',
			'class'				=> 'color-picker admin-listen-handler',
			'data-handler' 		=> 'colorPicker',
			'data-picker'		=> 'apg',
			'data-target'		=> '.apg-post-title .details a',
			'data-css-attribute'=> 'color',
		),
		'splitscreen_details_border' => array(
			'title'			=> 'Border Width',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 1,
			'min'			=> 0,
			'max'			=> 999,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'data-target'		=> '.apg-post-title .details a',
			'data-has-unit'		=> true,
			'data-range-slider' => 'apg',
		),
		'splitscreen_details_border_color' => array(
			'title'				=> 'Border Color',
			'data-style-option' => true,
			'size'				=> 'span2',
			'data-input-type'	=> 'color',
			'default'			=> '#000000',
			'class'				=> 'color-picker admin-listen-handler',
			'data-handler' 		=> 'colorPicker',
			'data-picker'		=> 'apg',
			'data-target'		=> '.apg-post-title .details',
			'data-css-attribute'=> 'border-color',
		),
		'splitscreen_details_padding_ver' => array(
			'title'			=> 'Spacing Ver',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 30,
			'min'			=> 0,
			'max'			=> 999,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'data-target'		=> '.apg-post-title .details a',
			'data-has-unit'		=> true,
			'data-range-slider' => 'apg',
			'help'			=> 'Spacing only works if the type is set to \'Button\'.',
		),
		'splitscreen_details_padding_hor' => array(
			'title'			=> 'Spacing Hor',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 16,
			'min'			=> 0,
			'max'			=> 999,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'data-target'		=> '.apg-post-title .details a',
			'data-has-unit'		=> true,
			'data-range-slider' => 'apg',
			'help'			=> 'Spacing only works if the type is set to \'Button\'.',
		),
		'splitscreen_details_font_family' => array(
			'data-input-type' => 'select-fonts',
			'title'		 		=> 'Font Family',
			'size'		 		=> 'span2',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'default' 	 		=> 'regular',
			'select-box-values' => $fonts,
		),
		'splitscreen_details_fontsize' => array(
			'title'			=> 'Font Size',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 13,
			'min'			=> 0,
			'max'			=> 999,
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'data-target'		=> '.apg-post-title .details a',
			'data-style-option' => true,
			'data-has-unit'		=> true,
			'data-css-attribute'=> 'font-size',
			'data-range-slider' => 'apg',
			//'responsive'	=> true,
		),
		'splitscreen_details_text_transform' => array(
			'title'				=> 'Text Transform',
			'size'				=> 'span2',
			'data-input-type'	=> 'select-box',
			'class'				=> 'editor-listen',
			'data-handler'		=> 'apg',
			'default'			=> 'uppercase',
			'data-css-attribute'=> 'text-transform',
			'data-target'		=> '.apg-post-title .details a',
			'select-box-values' => array(
				'none'			=> 'None',
				'uppercase'		=> 'Uppercase',
			),
		),
		'splitscreen_details_letter_spacing' => array(
			'title'				=> 'Letter Spacing',
			'size'				=> 'span2',
			'data-input-type' 	=> 'range-slider',
			'data-css-attribute'=> 'letter-spacing',
			'data-style-option' => true,
			'data-target'		=> '.apg-post-title .details a',
			'default'			=> 20,
			'min'				=> 0,
			'max'				=> 9999,
			'data-negative' 	=> true,
			'data-has-unit'		=> true,
			'data-divider'		=> 10,
			'class' 	 		=> 'editor-listen',
			'data-handler'		=> 'apg',
			'data-range-slider' => 'apg',
			'help'				=> 'You will see the letter spacing also added to the last char on the right while editing. For the frontend this will get compensated with a negative margin to correctly align your button.',
		),
	),
	'splitscreen-details-hover-options' => array(
		'title'  	 => 'Button Mouseover',
		'break'		 => '3',
		'style-class'=> 'ep-collapsed ov-apg-splitscreen',
		'data-hide-mobile' => true,
		'splitscreen_details_mouseover_background_color' => array(
			'title'				=> 'BG',
			'size'				=> 'span1',
			'data-input-type'	=> 'color',
			'default'			=> '#000000',
			'class'				=> 'color-picker admin-listen-handler',
			'data-handler' 		=> 'colorPicker',
			'data-picker'		=> 'apg',
			'data-target'		=> '.apg-post-title .details a',
		),
		'splitscreen_details_mouseover_color' => array(
			'title'				=> 'Text',
			'size'				=> 'span1',
			'data-input-type'	=> 'color',
			'default'			=> '#ffffff',
			'class'				=> 'color-picker admin-listen-handler',
			'data-handler' 		=> 'colorPicker',
			'data-picker'		=> 'apg',
			'data-target'		=> '.apg-post-title .details a',
		),
		'splitscreen_details_mouseover_border_color' => array(
			'title'				=> 'Border',
			'size'				=> 'span1',
			'data-input-type'	=> 'color',
			'default'			=> 'transparent',
			'class'				=> 'color-picker admin-listen-handler',
			'data-handler' 		=> 'colorPicker',
			'data-picker'		=> 'apg',
			'data-target'		=> '.apg-post-title .details',
		),
	),
	'splitscreen_responsive_lg' => get_apg_responsive('splitscreen', 'lg'),
	'splitscreen_responsive_md' => get_apg_responsive('splitscreen', 'md'),
	'splitscreen_responsive_sm' => get_apg_responsive('splitscreen', 'sm'),
	'splitscreen_responsive_xs' => get_apg_responsive('splitscreen', 'xs'),
);

?>