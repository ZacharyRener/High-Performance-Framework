<section class='clients-wrapper'>
@if(have_rows('select_clients'))

    @php
    $clients_bg = get_theme_mod('hpf_client_slider_background_color'); 
    $hpf_client_slider_headline_text = get_theme_mod('hpf_client_slider_headline_text');
    @endphp

    <section class="clients-section" style="background-color: {{ $clients_bg }}">
        
        <div class="container">

            <div class="section-wrapper">
                <p class="section-header">
                    @if( !empty($clients_title ) ) 
                        {{ $clients_title }}
                    @else 
                        {{ "Selected Clients" }}
                    @endif
                </p>
            </div>

            <div class="col-sm-12 client-slider">
                <div class="owl-carousel-clients" <?php if(get_field('title_border') == '2' ) { echo 'style="border-top: 0px !important;"'; } ?>>
					
					<?php while( have_rows('select_clients') ): the_row();?>
					<?php
						$clientimage = get_sub_field('client_logo');
						$padding_top = get_sub_field('client_logo_padding_top');
						$padding_bottom = get_sub_field('client_logo_padding_bottom');

					?>
						<div class="item">
							<img src="<?php echo $clientimage ?>" style="padding-top: <?php echo $padding_top; ?>; padding-bottom: <?php echo $padding_bottom; ?>;" />
						</div>
					<?php 
						 endwhile; ?>
						 
					</div>
            </div>
        </div>
    </section>
    
@endif


</section>