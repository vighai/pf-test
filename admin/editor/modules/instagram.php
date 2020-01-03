<?php

// -----------------------------------------
// semplice
// admin/editor/modules/instagram/module.php
// -----------------------------------------

if(!class_exists('sm_instagram')) {

	class sm_instagram {

		public $output;
		public $is_editor;

		// constructor
		public function __construct() {
			// define output
			$this->output = array(
				'html' => '',
				'css'  => '',
			);
			// set is editor
			$this->is_editor = true;
		}

		// output frontend
		public function output_editor($values, $id) {
			// extract options
			extract( shortcode_atts(
				array(
					'count'				=> 20,
					'col'				=> 4,
					'target'			=> 'lightbox',
					'random'			=> 'disabled',
					'hor_gutter'		=> 30,
					'ver_gutter'		=> 30,
				), $values['options'] )
			);

			// lightbox
			$lightbox = false;
			if($target == 'lightbox') {
				$lightbox = true;
			}

			// get instagram token
			$instagram = json_decode(get_option('semplice_instagram_token'), true);

			// generate items
			$masonry_items = '';

			// get instagram json
			if(!function_exists('_isCurl')) {
				function _isCurl(){
				    return function_exists('curl_version');
				}
			}

			// if curl is installed get media
			if(_isCurl()) {
				$media = json_decode($this->exec_curl($instagram, $count), true);
				$meta = $media['meta'];
			} else {
				$media = 'curl';
			}

			// random
			if($random !== 'disabled') {
				$col_array = explode('.', $random);
				$small_col = $col_array[0];
				$big_col   = $col_array[1];
			}

			// index
			$index = 0;

			// get shots
			if(empty($instagram) && $media != 'curl' && true === $this->is_editor) {
				$this->output['html'] = semplice_module_placeholder('instagram', 'Once you connected your Instagram account your images will show up right here.', false, $this->is_editor);
			} else if(isset($meta['code']) && $meta['code'] == 200) {
				foreach ($media['data'] as $posts => $post) {
					if($post['type'] == 'image' || $post['type'] == 'carousel' || $post['type'] == 'video') {

						// if lightbox, link to lightbox with image
						if(true === $lightbox) {
							$href = $post['images']['standard_resolution']['url'];
							$href = explode('?', $href);
							$href = $href[0];
						} else {
							$href = $post['link'];
						}
						
						// random grid
						if($random !== 'disabled' && $index % 4 == 0 && $index > 0) {
							$col = $big_col;
						} elseif($random !== 'disabled') {
							$col = $small_col;
						}
						
						// add thumb to holder
						$masonry_items .= '
							<div class="masonry-item thumb masonry-' . $id . '-item" data-xl-width="' . $col . '" data-sm-width="6" data-xs-width="12">
								' . $this->wrap_hyperlink($post, $href, $lightbox, $post['type']) . '
							</div>
						';
					}
					
					// increment index
					$index ++;

				}

				// get masonry
				$this->output['html'] = semplice_masonry('instagram', $id, $values['options'], $masonry_items, $hor_gutter, $ver_gutter, $this->is_editor, $values['script_execution']);
				
			} else if($media === 'curl') {
				$this->output['html'] = '
					<div class="instagram-error">
						<img src="' . get_svg('backend', '/icons/module_instagram') . '">
						<div class="content">
							<p>cURL Extension not installed. Please advise your host to install / activate the cURL Extension for you.</p>
						</div>
					</div>
				';
			} else {
				// only show connect button in the backend
				$this->output['html'] = semplice_module_placeholder('instagram', 'Wrong or no access token.', false, $this->is_editor);
			}

			// output
			return $this->output;			
		}

		// output frontend
		public function output_frontend($values, $id) {
			// set is editor
			$this->is_editor = false;
			return $this->output_editor($values, $id);
		}

		// wrap hyperlink
		public function wrap_hyperlink($post, $link, $lightbox, $type) {
			if($type == 'image' || $type == 'carousel' || true === $this->is_editor) {
				if(true === $lightbox) {
					return '<a class="instagram-image semplice-lightbox"><img class="lightbox-item" src="' . $post['images']['standard_resolution']['url'] . '" width="' . $post['images']['standard_resolution']['width'] . '" height="' . $post['images']['standard_resolution']['height'] . '" alt="instagram-image"></a>';
				} else {
					return '<a class="instagram-image" href="' . $link . '" target="_blank"><img src="' . $post['images']['standard_resolution']['url'] . '" width="' . $post['images']['standard_resolution']['width'] . '" height="' . $post['images']['standard_resolution']['height'] . '" alt="instagram-image"></a>';
				}	
			} else {
				$output = '
					<img style="display:none;" src="' . $post['images']['standard_resolution']['url'] . '" width="' . $post['images']['standard_resolution']['width'] . '" height="' . $post['images']['standard_resolution']['height'] . '" alt="instagram-image">
					<div class="ce-video" data-hide-controls="on" data-transparent-controls="on">
						<video poster="' . $post['images']['standard_resolution']['url'] . '" preload="none" playsinline loop preload="none" width="' . $post['videos']['standard_resolution']['width'] . '" height="' . $post['videos']['standard_resolution']['height'] . '">
							<source src="' . $post['videos']['standard_resolution']['url'] . '" type="video/mp4">
							<p>If you are reading this, it is because your browser does not support the HTML5 video element.</p>
						</video>
					</div>
				';
				if(false === $lightbox) {
					$output = '<a class="instagram-video" href="' . $link . '" target="_blank">' . $output . '</a>';
				}
				// output
				return $output;
			}
			
		}

		// curl
		public function exec_curl($options, $count) {
			
			// curl init
			$ch = curl_init();

			// url
			curl_setopt($ch, CURLOPT_URL, 'https://api.instagram.com/v1/users/' . $options['user_id'] . '/media/recent/?access_token=' . $options['access_token'] . '&count=' . $count);
			
			// disable ssl
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			
			// accept json
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				"Accept: application/json",
				"Content-Type: application/json"
			));
			
			// return content
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			
			$response = curl_exec($ch);
			
			curl_close($ch);
			
			return $response;
		}
	}

	// instance
	$this->module['instagram'] = new sm_instagram;
}