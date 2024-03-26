<?php 

add_action( 'bizberg_before_homepage_blog', 'epic_business_event_homepage_services' );
function epic_business_event_homepage_services(){

	$services_status = bizberg_get_theme_mod( 'services_status' );

	if( $services_status == false ){
		return;
	} 

	$services_title    = bizberg_get_theme_mod( 'services_title' );
	$services_subtitle = bizberg_get_theme_mod( 'services_subtitle' ); ?>

	<div class="homepage_services">
		
		<div class="container">
			
			<div class="title_wrapper">
				<h3>
					<?php echo esc_html( $services_title ); ?>
				</h3>
				<p>
					<?php echo esc_html( $services_subtitle ); ?>
				</p>
			</div>

			<?php 
			$epic_business_event_services = bizberg_get_theme_mod( 'epic_business_event_services' );
			$epic_business_event_services = json_decode( $epic_business_event_services, true );

			if( !empty( $epic_business_event_services ) ){ ?>

				<div class="items_wrapper">

					<?php 
					foreach( $epic_business_event_services as $service ){

						$icon    = !empty( $service['icon'] ) ? $service['icon'] : '';
						$page_id = !empty( $service['page_id'] ) ? $service['page_id'] : '';

						$service_obj = get_post( $page_id ); ?>
						
						<div class="item">
								
							<div class="icon">
								<i class="<?php echo esc_attr( $icon ); ?>"></i>
							</div>
		            		<div class="experience-info">
		            			<h4 class="experience-title">
		            				<?php echo esc_html( $service_obj->post_title ); ?>
		            			</h4>
		            			<p><?php echo esc_html( wp_trim_words( sanitize_text_field( $service_obj->post_content ), 20, ' [...]' )); ?></p>
		            		</div>

						</div>

						<?php 

					} ?>

				</div>

				<?php 

			} ?>

		</div>

	</div>

	<?php
}