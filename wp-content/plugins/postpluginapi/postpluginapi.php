<?php
/**
 * Plugin Name: Custom API
 * Plugin URI: http://chrushingit.com
 * Description: Crushing it!
 * Version: 1.0
 * Author: Art Vandelay
 * Author URI: http://watch-learn.com
 */


function wl_posts() {
	$args = [
		'numberposts' => 99999,
		'post_type' => 'flexslider'
	];

	$posts = get_posts($args);

	$data = [];
	$i = 0;

	foreach($posts as $post) {
		$data[$i]['id'] = $post->ID;
		$data[$i]['title'] = $post->post_title;
		$data[$i]['content'] = $post->post_content;
		$data[$i]['slug'] = $post->post_name;
		$data[$i]['featured_image']['thumbnail'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');
		$data[$i]['featured_image']['medium'] = get_the_post_thumbnail_url($post->ID, 'medium');
		$data[$i]['featured_image']['large'] = get_the_post_thumbnail_url($post->ID, 'large');
		$i++;
	}

	return $data;
}

function wl_post( $slug ) {

	// $price = json_decode($params->get_param('price'));
	$args = [
		'name' => $slug['slug'],
		'post_type' => 'flexslider'
	];

	$post = get_posts($args);


	$data['id'] = $post[0]->ID;
	$data['title'] = $post[0]->post_title;
	$data['content'] = $post[0]->post_content;
	$data['slug'] = $post[0]->post_name;
	$data['featured_image']['thumbnail'] = get_the_post_thumbnail_url($post[0]->ID, 'thumbnail');
	$data['featured_image']['medium'] = get_the_post_thumbnail_url($post[0]->ID, 'medium');
	$data['featured_image']['large'] = get_the_post_thumbnail_url($post[0]->ID, 'large');

	return $data;
}

// Used in this video https://www.youtube.com/watch?v=76sJL9fd12Y
function wl_products() {
	$args = [
		'numberposts' => 99999,
		'post_type' => 'products'
	];

	$posts = get_posts($args);

	$data = [];
	$i = 0;

	foreach($posts as $post) {
		$data[$i]['id'] = $post->ID;
		$data[$i]['title'] = $post->post_title;
        $data[$i]['slug'] = $post->post_name;
        $data[$i]['price'] = get_field('price', $post->ID);
        $data[$i]['delivery'] = get_field('delivery', $post->ID);
		$i++;
	}

	return $data;
}

add_action('rest_api_init', function() {
	register_rest_route('wl/v1', 'flexslider', [
		'methods' => 'GET',
		'callback' => 'wl_posts',
	]);

	register_rest_route( 'wl/v1', 'flexslider/(?P<slug>[a-zA-Z0-9-]+)', array(
		'methods' => 'GET',
		'callback' => 'wl_post',
    ) );
    
    // Used in this video: https://www.youtube.com/watch?v=76sJL9fd12Y	
    register_rest_route('wl/v1', 'products', [
		'methods' => 'GET',
		'callback' => 'wl_products',
	]);
});







function wl1_products($params) {
    $price = json_decode($params->get_param('price'));

    function queryArgument($param, $key) {
        if(is_object($param)) {
            if($param->lt && $param->gt) {
                return [
                    [
                        'key' => $key,
                        'value' => [$param->gt, $param->lt],
                        'type'  => 'NUMERIC',
                        'compare' => 'BETWEEN'
                    ]
                ];
            }

            if($param->lt) {
                return [
                    [
                        'key' => $key,
                        'value' => $param->lt,
                        'type'  => 'NUMERIC',
                        'compare' => '<'
                    ]
                ];
            }

            if($param->gt) {
                return [
                    [
                        'key' => $key,
                        'value' => $param->gt,
                        'type'  => 'NUMERIC',
                        'compare' => '>'
                    ]
                ];
            }
        }


        if($param) {
            return [
                [
                    'key' => $key,
                    'value' => $param,
                    'type'  => 'NUMERIC'
                ]
            ];
        }

        return null;
    }

	$args = [
		'posts_per_page' => 99999,
        'post_type' => 'product',
        'meta_query' => queryArgument($price, 'price')
	];

    $posts = new WP_Query($args);

	$data = [];
	$i = 0;

	foreach($posts->posts as $post) {
		$data[$i]['id'] = $post->ID;
		$data[$i]['title'] = $post->post_title;
        $data[$i]['slug'] = $post->post_name;
        $data[$i]['price'] = intval(get_field('price', $post->ID));
        $data[$i]['delivery'] = get_field('delivery', $post->ID);
		$i++;
	}

	return $data;
}

add_action('rest_api_init', function() {
    register_rest_route('wl/v1', 'products', [
		'methods' => 'GET',
		'callback' => 'wl1_products',
	]);
});

