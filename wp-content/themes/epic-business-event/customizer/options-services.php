<?php 

add_action( 'init' , 'epic_business_event_services' );
function epic_business_event_services(){

	Kirki::add_section( 'epic_business_event_services_sections', array(
        'title'   => esc_html__( 'Services', 'epic-business-event' ),
        'section' => 'homepage'
    ) );

    Kirki::add_field( 'bizberg', [
		'type'        => 'checkbox',
		'settings'    => 'services_status',
		'label'       => esc_html__( 'Enable / Disable', 'epic-business-event' ),
		'section'     => 'epic_business_event_services_sections',
		'default'     => false,
	] );

    Kirki::add_field( 'bizberg', [
		'type'     => 'text',
		'settings' => 'services_title',
		'label'    => esc_html__( 'Title', 'epic-business-event' ),
		'section'  => 'epic_business_event_services_sections',
		'default'  => esc_html__( 'Make better decisions with Us', 'epic-business-event' ),
		'active_callback' => [
			[
				'setting'  => 'services_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

	Kirki::add_field( 'bizberg', [
		'type'     => 'text',
		'settings' => 'services_subtitle',
		'label'    => esc_html__( 'Subtitle', 'epic-business-event' ),
		'section'  => 'epic_business_event_services_sections',
		'default'  => esc_html__( 'Overcome challenges and grasp opportunities in this era of the transformation of the corporate business sector with us.', 'epic-business-event' ),
		'active_callback' => [
			[
				'setting'  => 'services_status',
				'operator' => '==',
				'value'    => true,
			]
		],
	] );

    Kirki::add_field( 'bizberg', array(
    	'type'        => 'advanced-repeater',
    	'label'       => esc_html__( 'Services', 'epic-business-event' ),
	    'section'     => 'epic_business_event_services_sections',
	    'settings'    => 'epic_business_event_services',
	    'choices' => [
	        'button_label' => esc_html__( 'Add Services', 'epic-business-event' ),
	        'row_label' => [
	            'value' => esc_html__( 'Services', 'epic-business-event' ),
	        ],
	        'fields' => [
	        	'icon'  => [
	                'type'        => 'fontawesome',
	                'label'       => esc_html__( 'Icon', 'epic-business-event' ),
	                'default'     => 'fab fa-accusoft',
	                'choices'     => bizberg_get_fontawesome_options(),
	            ],
	            'page_id' => [
	                'type'        => 'select',
	                'label'       => esc_html__( 'Page', 'epic-business-event' ),
	                'choices'     => bizberg_get_all_pages()
	            ],
	        ],
	    ],
	    'active_callback' => [
			[
				'setting'  => 'services_status',
				'operator' => '==',
				'value'    => true,
			]
		],
    ));

}