 <?php
 /*
 * Define shortcodes
 * https://codex.wordpress.org/Shortcode_API
 */

// Create the new shortcode [fastfood_head] with the callback fastfoodBtnFunc
add_shortcode("fastfood_headings", "fastfoodHeadingsFunc");

// Add parameters to function
function fastfoodHeadingsFunc($atts, $content = null) {
	return "<" . $atts['type'] . " class='" . $atts['class'] . "'>" . $content . "</" . $atts['type'] . ">";
}

// Create the new shortcode [fastfood_btn] with the callback fastfoodBtnFunc
add_shortcode("fastfood_btn", "fastfoodBtnFunc");

// Add parameters to function
function fastfoodBtnFunc($atts, $content = null) {
	return "<" . $atts['type'] . " class='" . $atts['class'] . "' href='" . $atts['link'] . "'>" . $content . "</" . $atts['type'] . ">";
}