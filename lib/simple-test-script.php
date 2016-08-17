<?php

namespace SJAlgeo\WP_REST_API_Testing;

class Simple_Test_Script {

	public function run() {
		add_action( 'wp_footer', array( $this, 'embed_js' ) );
	}

	/**
	 * @param $content
	 *
	 * Enqueues a simple script to get the first post via the API on load.
	 * This is a very quick and dirty way to test the cookie authentication
	 * of an endpoint.
	 */
	public function embed_js() {

		$script = "<script type='text/javascript'>
	
		jQuery( document ).ready(function() {
		    jQuery.ajax( {
			    url: wpApiSettings.root + 'wp/v2/posts/1',
			    method: 'GET',
			    beforeSend: function ( xhr ) {
					xhr.setRequestHeader( 'X-WP-Nonce', wpApiSettings.nonce );
				},
		        data:{
					'title' : 'Hello Moon'
		        }
			} ).done( function ( response ) {
				console.log( response );
			} );
			});
		</script>";

		echo $script;
	}
}