<?php

/* Register Custom Post Types********************************************/

            add_action( 'init', 'create_post_type' );
function create_post_type() {
                    register_post_type( 'sliders',
array(
                                    'labels' => array(
                                            'name' => __( 'Slider','triangle' ),
                                            'singular_name' => __( 'Slide' ),
                                            'add_new' => __( 'Add New Slide' ),
                                            'add_new_item' => __( 'Add New Slide' ),
                                            'edit_item' => __( 'Edit Slide' ),
                                            'new_item' => __( 'New Slide' ),
                                            'view_item' => __( 'View Slide' ),
                                            'not_found' => __( 'Sorry, we couldn\'t find the Slide you are looking for.' )
                                    ),
                            'public' => true,
                            'publicly_queryable' => true,
                            'exclude_from_search' => true,
                            'menu_position' => 14,
                            'has_archive' => true,
                            'hierarchical' => false,
                            'capability_type' => 'page',
                            'rewrite' => array( 'slug' => 'slider' ),
                            'supports' => array('title','editor','custom-fields','thumbnail' ),
							'show_in_rest'=>true,//gutenberg support
							
							
                            )
                    );
    
    
    register_post_type( 'services',
array(
                                    'labels' => array(
                                                   'name' => __( 'Services' ),
                                            'singular_name' => __( 'Service' ),
                                            'add_new' => __( 'Add New' ),
                                            'add_new_item' => __( 'Add New Service' ),
                                            'edit_item' => __( 'Edit Service' ),
                                            'new_item' => __( 'New Service' ),
                                            'view_item' => __( 'View Service' ),
                                            'not_found' => __( 'Sorry, we couldn\'t find the Service you are looking for.' )
                                    ),
                            'public' => true,
                            'publicly_queryable' => true,
                            'exclude_from_search' => true,
                            'menu_position' => 14,
                            'has_archive' => true,
                            'hierarchical' => false,
                            'capability_type' => 'page',
                            'rewrite' => array( 'slug' => 'service' ),
                            'supports' => array('title','editor','custom-fields','thumbnail' ),
							'show_in_rest'=>true,//gutenberg support
							
							
                            )
                    );
            
			       register_post_type( 'clients',
array(
                                    'labels' => array(
                                            'name' => __( 'Clients' ),
                                            'singular_name' => __( 'Client' ),
                                            'add_new' => __( 'Add New' ),
                                            'add_new_item' => __( 'Add New Client' ),
                                            'edit_item' => __( 'Edit Client' ),
                                            'new_item' => __( 'New Client' ),
                                            'view_item' => __( 'View Client' ),
                                            'not_found' => __( 'Sorry, we couldn\'t find the Client you are looking for.' )
                                    ),
                            'public' => true,
                            'publicly_queryable' => true,
                            'exclude_from_search' => true,
                            'menu_position' => 15,
                            'has_archive' => true,
                            'hierarchical' => false,
                            'capability_type' => 'page',
                            'rewrite' => array( 'slug' => 'clients' ),
                            'supports' => array('title','thumbnail' ),
							'show_in_rest'=>true,//gutenberg support
							
							
                            )
                    );
					
	register_post_type( 'testimonials',
array(
                                    'labels' => array(
                                            'name' => __( 'Testimonials' ),
                                            'singular_name' => __( 'Testimonial' ),
                                            'add_new' => __( 'Add New' ),
                                            'add_new_item' => __( 'Add New' ),
                                            'edit_item' => __( 'Edit Testimonial' ),
                                            'new_item' => __( 'New Testimonial' ),
                                            'view_item' => __( 'View Testimonial' ),
                                            'not_found' => __( 'Sorry, we couldn\'t find the Testimonial you are looking for.' )
                                    ),
                            'public' => true,
                            'publicly_queryable' => true,
                            'exclude_from_search' => true,
                            'menu_position' => 14,
                            'has_archive' => true,
                            'hierarchical' => false,
                            'capability_type' => 'page',
                            'rewrite' => array( 'slug' => 'portfolio' ),
                            'supports' => array('title','editor','custom-fields','thumbnail' ),
							'show_in_rest'=>true,//gutenberg support
							
							
                            )
                    );
    
    register_post_type( 'portfolios',
array(
                                    'labels' => array(
                                            'name' => __( 'Portfolios' ),
                                            'singular_name' => __( 'Portfolio' ),
                                            'add_new' => __( 'Add New' ),
                                            'add_new_item' => __( 'Add New Portfolio' ),
                                            'edit_item' => __( 'Edit Portfolio' ),
                                            'new_item' => __( 'New Portfolio' ),
                                            'view_item' => __( 'View Portfolio' ),
                                            'not_found' => __( 'Sorry, we couldn\'t find the Portfolio you are looking for.' )
                                    ),
                            'public' => true,
                            'publicly_queryable' => true,
                            'exclude_from_search' => true,
                            'menu_position' => 14,
                            'has_archive' => true,
                            'hierarchical' => false,
                            'capability_type' => 'page',
                            'rewrite' => array( 'slug' => 'portfolio' ),
                            'supports' => array('title','editor','custom-fields','thumbnail' ),
							'show_in_rest'=>true,//gutenberg support
							
							
                            )
                    );    
    
register_post_type( 'team',
array(
                                    'labels' => array(
                                            'name' => __( 'Team' ),
                                            'singular_name' => __( 'Team' ),
                                            'add_new' => __( 'Add New' ),
                                            'add_new_item' => __( 'Add New Team Member' ),
                                            'edit_item' => __( 'Edit Team Member' ),
                                            'new_item' => __( 'New Team Member' ),
                                            'view_item' => __( 'View Team Member' ),
                                            'not_found' => __( 'Sorry, we couldn\'t find the Team Member you are looking for.' )
                                    ),
                            'public' => true,
                            'publicly_queryable' => true,
                            'exclude_from_search' => true,
                            'menu_position' => 14,
                            'has_archive' => true,
                            'hierarchical' => false,
                            'capability_type' => 'page',
                            'rewrite' => array( 'slug' => 'team' ),
                            'supports' => array('title','editor','custom-fields','thumbnail' ),
							'show_in_rest'=>true,//gutenberg support
							
							
                            )
                    );
    
    
            }
			
