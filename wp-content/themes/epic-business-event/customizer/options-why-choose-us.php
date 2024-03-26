<?php 

add_action( 'init' , 'epic_business_event_why_choose_us' );
function epic_business_event_why_choose_us(){

	Kirki::add_section( 'epic_business_event_why_choose_us_section', array(
        'title'   => esc_html__( 'Why Choose Us', 'epic-business-event' ),
        'section' => 'homepage'
    ) );

    Kirki::add_field( 'bizberg', array(
    	'type'        => 'advanced-repeater',
    	'label'       => esc_html__( 'Why Choose Us', 'epic-business-event' ),
	    'section'     => 'epic_business_event_why_choose_us_section',
	    'settings'    => 'epic_business_event_why_choose_us',
	    'choices' => [
	        'button_label' => esc_html__( 'Add Why Choose Us', 'epic-business-event' ),
	        'row_label' => [
	            'value' => esc_html__( 'Why Choose Us', 'epic-business-event' ),
	        ],
	        'fields' => [
	            'page_id' => [
	                'type'        => 'select',
	                'label'       => esc_html__( 'Page', 'epic-business-event' ),
	                'choices'     => bizberg_get_all_pages()
	            ],
	        ],
	    ],
    ));

}