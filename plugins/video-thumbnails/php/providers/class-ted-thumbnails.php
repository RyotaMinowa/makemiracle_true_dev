<?php

/*  Copyright 2014 Sutherland Boswell  (email : sutherland.boswell@gmail.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as 
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Require thumbnail provider class
require_once( VIDEO_THUMBNAILS_PATH . '/php/providers/class-video-thumbnails-providers.php' );

class TED_Thumbnails extends Video_Thumbnails_Providers {

	// Human-readable name of the video provider
	public $service_name = 'TED';
	const service_name = 'TED';
	// Slug for the video provider
	public $service_slug = 'ted';
	const service_slug = 'ted';

	public static function register_provider( $providers ) {
		$providers[self::service_slug] = new self;
		return $providers;
	}

	// Regex strings
	public $regexes = array(
		'#//embed\.ted\.com/talks/([A-Za-z0-9_-]+)\.html#', // iFrame SRC
	);

	// Thumbnail URL
	public function get_thumbnail_url( $id ) {
		$request = "http://www.ted.com/talks/oembed.json?url=http%3A%2F%2Fwww.ted.com%2Ftalks%2F$id";
		$response = wp_remote_get( $request, array( 'sslverify' => false ) );
		if( is_wp_error( $response ) ) {
			$result = $this->construct_info_retrieval_error( $request, $response );
		} else {
			$result = json_decode( $response['body'] );
			$result = $result->thumbnail_url;
		}
		return $result;
	}

	// Test cases
	public static function get_test_cases() {
		return array(
			array(
				'markup'        => '<iframe src="http://embed.ted.com/talks/kitra_cahana_stories_of_the_homeless_and_hidden.html" width="640" height="360" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>',
				'expected'      => 'http://images.ted.com/images/ted/341053090f8bac8c324c75be3114b673b4355e8a_480x360.jpg',
				'expected_hash' => 'f2a5f6af49e841b4f9c7b95d6ca0372a',
				'name'          => __( 'iFrame Embed', 'video-thumbnails' )
			),
		);
	}

}

// Add to provider array
add_filter( 'video_thumbnail_providers', array( 'TED_Thumbnails', 'register_provider' ) );

?>