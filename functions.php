<?php
/**
 * Force URLs in srcset attributes into HTTPS scheme.
 * @link https://wordpress.org/support/topic/responsive-images-src-url-is-https-srcset-url-is-http-no-images-loaded?replies=19#post-7767555
 */
function ssl_srcset( $sources ) {
	foreach ( $sources as &$source ) {
		$source['url'] = set_url_scheme( $source['url'], 'https' );
	}

	return $sources;
}
add_filter( 'wp_calculate_image_srcset', 'ssl_srcset' );

?>
