<?php
/**
 * Plugin Name:     Spaces Rest Reactions
 * Plugin URI:      https://github.com/dol-lab/spaces-rest-reactions
 * Description:     Add-on for the wearerequired/rest-likes plugin.
 * Author:          Silvan Hagen
 * Author URI:      https://silvanhagen.com
 * Text Domain:     spaces-rest-reactions
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Spaces_Rest_Reactions
 */

// Your code starts here.

namespace Spaces\Spaces_REST_Reactions;

add_filter(
	'the_content',
	function( $content ) {
		return $content . get_rest_post_like_button();
	}
);

add_filter(
	'comment_text',
	function( $content ) {
		return $content . get_rest_comment_like_button();
	}
);
