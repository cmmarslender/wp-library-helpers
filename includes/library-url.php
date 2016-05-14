<?php

namespace Cmmarslender\WPLibraryHelpers;

if ( function_exists( __NAMESPACE__ . '\\library_url' ) ) {
	return;
}

/**
 * Kind of like plugins_url, but should work no matter where the library is (theme, plugin, etc)
 *
 * Probably doesn't work if there is a symlink involved at this point.
 *
 * @usage library_url( 'assets/js/main.js', __FILE__ );
 */
function library_url( $path, $file ) {
	$path = trailingslashit( str_replace( WP_CONTENT_DIR, '', dirname( $file ) ) ) . $path;

	$url = content_url( $path );

	return $url;
}
