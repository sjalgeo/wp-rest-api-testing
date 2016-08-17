<?php

namespace SJAlgeo\WP_REST_API_Testing;

class Required_Scripts{

	public function run() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_required_wp_api_scripts' ) );
	}

	public function enqueue_required_wp_api_scripts(){
		wp_localize_script(
			'wp-api',
			'wpApiSettings',
			array(
				'root' => esc_url_raw( rest_url() ),
				'nonce' => wp_create_nonce( 'wp_rest' )
			)
		);

		wp_enqueue_script( 'wp-api' );
	}
}