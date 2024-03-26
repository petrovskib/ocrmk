<?php 

add_action( 'bizberg_before_homepage_blog', 'epic_business_event_homepage_why_choose_us' );
function epic_business_event_homepage_why_choose_us(){

	$epic_business_event_why_choose_us = bizberg_get_theme_mod( 'epic_business_event_why_choose_us' );
	$epic_business_event_why_choose_us = json_decode( $epic_business_event_why_choose_us, true );

	if( empty( $epic_business_event_why_choose_us ) ){
		return;
	} ?>

	<div class="why_choose_us">
		
		<div class="container">

			<div class="item_wrapper">

				<?php 

				foreach( $epic_business_event_why_choose_us as $value ){ 

					$page_id           = !empty( $value['page_id'] ) ? $value['page_id'] : '';
					$page_obj          = get_post( $page_id ); 
					$featured_image_id = get_post_thumbnail_id( $page_id );?>
			
					<div class="item">
						
						<div 
						class="left <?php echo empty( $featured_image_id ) ? 'no_image' : ''; ?>" 
						style="background-image:url(<?php echo esc_url( wp_get_attachment_url( $featured_image_id ) ); ?>)"></div>
						<div class="right">
							<h3><?php echo esc_html( $page_obj->post_title ); ?></h3>
							<p><?php echo esc_html( wp_trim_words( sanitize_text_field( $page_obj->post_content ), 40, ' [...]' )); ?></p>
							<a href="<?php echo esc_url( get_permalink( $page_id ) ); ?>"><?php esc_html_e( 'Read More', 'epic-business-event' ); ?></a>
						</div>

					</div>

					<?php 

				} ?>

			</div>

		</div>

	</div>

	<?php
}