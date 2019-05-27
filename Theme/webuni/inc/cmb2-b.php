<?php
   
//Course Category section start
add_action( 'cmb2_init', 'categories' );
function categories() {

$prefix = 'course_categories';
    $cmb = new_cmb2_box( array(
    'id' => $prefix . 'categories',
    'title' => __( 'Course Categories', 'webuni' ),
    'object_types' => array( 'course_categories' ),
    'context' => 'normal',
    'priority' => 'default',
    ) );
    
    
    $cmb->add_field( array(
        'name' => __( 'Course Count', 'webuni' ),
        'id'   => 'c-count',
        'type' => 'text',
    ) );
        $cmb->add_field( array(
		'name' => esc_html__( 'Course Picture ', 'webuni' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'webuni' ),
		'id'   => 'c-image',
		'type' => 'file',
	) );
}
//Course Category  section End
