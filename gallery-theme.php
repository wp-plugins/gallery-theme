<?php
/*
Plugin Name: Gallery Theme
Description: You will be able to deeply style wordpress galleries using this plugin.
Version: 1.4.1
Author: Massoud-Mx
Author URI: http://mmx.name/
License: GPL2
*/

/*
Copyright 2013 Gallery Theme (email: mmx@mmx.name)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

function gt_image($attachment_id) {
	$attachment = get_post($attachment_id);
	$image_thumb = wp_get_attachment_image_src($attachment_id, 'thumbnail');
	$image_medium = wp_get_attachment_image_src($attachment_id, 'medium');
	$image_large = wp_get_attachment_image_src($attachment_id, 'large');
	$image_full = wp_get_attachment_image_src($attachment_id, 'full');
	return array(
		'title' => $attachment->post_title,
		'caption' => $attachment->post_excerpt,
		'alt' => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
		'description' => $attachment->post_content,
		'link' => get_permalink($attachment->ID),
		'thumb' => $image_thumb[0],
		'medium' => $image_medium[0],
		'large' => $image_large[0],
		'full' => $image_full[0],
		'width' => $image_full[1],
		'height' => $image_full[2],
	);
}

remove_shortcode('gallery');
add_shortcode('gallery', 'gallery_theme');

function gallery_theme($atts) {
	extract(shortcode_atts(array(
		'ids' => 'none',
		'theme' => 'default',
		'link' => 'file',
		'columns' => '3',
		'orderby' => 'default'
		), $atts));
	if($theme == '') {
		$theme = 'default';
	}
	$settings[link] = $link;
	$settings[columns] = $columns;
	$settings[orderby] = $orderby;
	if($ids !== "none") {
		$init_ids = array_map('intval', explode(",", $ids));
		foreach($init_ids as $init_id) {
			if(is_array(wp_get_attachment_image_src($init_id))) {
				$images[] = $init_id;
			}
		}
	}
	else {
		$all_post_images = array(
			'post_parent' => get_the_ID(),
			'post_type' => 'attachment',
			'numberposts' => -1,
			'post_mime_type' => 'image',
			'orderby' => 'post_date',
			'order' => 'ASC'
		);
		$init_ids = get_posts($all_post_images);
		foreach($init_ids as $init_id) {
			$images[] = $init_id->ID;
		}
	}
	if($orderby == 'rand') {
		shuffle($images);
	}
	if(count($images) > 0) {
		if(file_exists(TEMPLATEPATH.'/gallery-theme-'.$theme.'.php')) {
			ob_start();
			include(TEMPLATEPATH.'/gallery-theme-'.$theme.'.php');
			$file_content = ob_get_clean();
			return $file_content;
		}
		elseif(file_exists(ABSPATH.'/wp-content/plugins/gallery-theme/themes/gallery-theme-'.$theme.'.php')) {
			ob_start();
			include(ABSPATH.'/wp-content/plugins/gallery-theme/themes/gallery-theme-'.$theme.'.php');
			$file_content = ob_get_clean();
			return $file_content;
		}
		else {
			return '[Gallery theme not found]';
		}
	}
	else {
		return '[Images not found]';
	}
}
?>