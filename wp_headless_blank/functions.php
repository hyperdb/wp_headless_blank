<?php
/**
 * functions.php
 * ---------------------------------------------------------------------
 * Copyright (c) 2024 Koichi Hoshi (hyperdb)
 * This software is released under the MIT License, see LICENSE.
 */
if(!function_exists('custom_auto_post_slug'))
{
	/**
	 * my_auto_slug
	 *
	 * @return string
	 */
	function my_auto_slug($_slug, $_post_id, $_post_status, $_post_type)
	{
		return md5(sprintf("%s-%d", strtolower(utf8_uri_encode($_post_type)), $_post_id));
	}
	add_filter('wp_unique_post_slug', 'my_auto_slug', 10, 4);
}