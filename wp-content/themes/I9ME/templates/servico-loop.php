<?php 

$term_design = get_term_by('name', 'design', 'tipo-de-servico');
$term_web = get_term_by('name', 'web', 'tipo-de-servico');

	if( is_home() || is_front_page() ) {
		$limit_res = '4';
	} else {
		$limit_res = '8';
	}
 ?>

	<section class="servicos__web" id="web">
		<div class="container">
			<div class="boxes boxes--reverse boxes--paralax">
				<div class="boxes__box-left  boxes__box-left--paralax wow fadeInUp" data-wow-duration="1" data-wow-delay="1s" id="group5">
					<header class="header-section header-section--area-design header-section--area-web">
						<div class="bloco-title bloco-title--right  wow fadeInLeft">
			        		<h2 class="title-web  ">WEB</h2>
							<p class="subtitle-web">
								<?php echo $term_design->description; ?>
							</p>
						</div>
						<div class="header-section__box header-section__box--design wow fadeInDown">
			        		<span class="header-section__title header-section__title--web">
								<i class="icon-web"></i>
							</span>
						</div>
						
					</header> 
					<header class="title-servicos">
						<h2>Web</h2>
						<p class="subtitle-servicos">
						<?php 
							echo $term_design->description;
						 ?>
						</p>
					</header> 
					<figure class="box__smarthphone"></figure>
					<!-- <div class="boxes__layer boxes__layer--deep-right">
		        		<div class="boxes__bg-phone"></div>
		      		</div>
			      	<div class="boxes__layer boxes__layer--back-right">
			        	<div class="boxes__phone"></div>
			      	</div> -->

					
				</div>
			
				<div class="boxes__box-right">
					<ul class="lista lista--lista-web">
						<?php
							$tax_slug =  'tipo-de-servico';
	            			$args = array( 'post_type' => 'servico', 'posts_per_page' => $limit_res, 'order' => 'ASC', 'tax_query' => array(  array( 'taxonomy'  => $tax_slug, 'field' => 'slug','terms' => 'web',),), );
						 ?>
						<?php $loop = new WP_Query( $args );
	          				while ( $loop->have_posts() ) : $loop->the_post();
	          					
	          					//Variaveis do Pst
	          					$slug = basename(get_permalink());
	          					$resumo = get_post_custom_values('wpcf-resume');
	            				$resumo = $resumo[0];

	            				$icone = get_post_custom_values('wpcf-icone');
								$icone = $icone[0];

								$icone_hover = get_post_custom_values('wpcf-icone-hover');
								$icone_hover = $icone_hover[0];
	          			 ?>	
						<li class="lista__item">
							<figure>
								<a href="<?php echo get_permalink(); ?>">
									<div class="lista__bordas lista__bordas--white wow zoomIn" data-wow-duration="1" data-wow-delay="1s">
											<i class="lista__<?php echo $slug; ?>">
												<img class="icon" src="<?php echo $icone; ?>" alt="<?php echo the_title(); ?>" />
												<img class="icon-hover" src="<?php echo $icone_hover; ?>" alt="<?php echo the_title(); ?>" />
											</i>
									</div>
								</a>							
								<figcaption>
									<h5 class="lista__smalltitle"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h5>
									<p class="lista__smallcontent"><?php echo $resumo; ?></p>
								</figcaption>
							</figure>						
						</li>
						<?php endwhile; ?>
						<?php if( is_home() || is_front_page() ): ?>
							<div class="groupboxes__vermais groupboxes__vermais--servicos wow rotateIn" data-wow-duration="1" data-wow-delay="1s">
								<a href="<?php echo home_url(); ?>/servicos/#web" class="btn-plus"></a>
							</div>
						<?php endif; ?>
					</ul>
					
				</div>
			</div>
		</div>	
	</section>
	<section class="servicos__design" id="design">
	<div class="container">
		<div class="boxes boxes--paralax">

			<div class="boxes__box-left boxes__box-left--paralax wow fadeInUp" data-wow-duration="1" data-wow-delay="1s" id="group4">
				<header class="header-section header-section--area-design">
					<div class="header-section__box header-section__box--design wow fadeInDown">
						<span class="header-section__title header-section__title--design"  data-wow-duration="2s" data-wow-delay="0.1s">
							<i class="icon-design"></i>
						</span>
					</div>
					<div class="bloco-title wow fadeInRight">
		        		<h2 class="title-design">DESIGN</h2>
						<p class="subtitle-design">
							<?php echo $term_design->description; ?>
						</p>
					</div>
				</header>
				<header class="title-servicos">
					<h2>Design</h2>
					<p class="subtitle-servicos">
					<?php 
						echo $term_design->description;
					 ?>
					</p>
				</header>  
				<figure class="box__lapis"></figure>  
				
				<!-- <div class="boxes__layer boxes__layer--base">
		        	<div class="boxes__bg-lapis"></div>
		      	</div>
		      	<div class="boxes__layer boxes__layer--back">
		        	<div class="boxes__lapis"></div>
		      	</div>
		      	<div class="boxes__layer boxes__layer--deep">
		        	<div class="boxes__sombra"></div>
		      	</div> -->
			</div>

			<div class="boxes__box-right">

				<ul class="lista">
					<?php
						$tax_slug =  'tipo-de-servico';
		    			$args = array( 'post_type' => 'servico', 'posts_per_page' => $limit_res, 'order' => 'ASC', 'tax_query' => array(  array( 'taxonomy'  => $tax_slug, 'field' => 'slug','terms' => 'design',),), );
					 ?>
					<?php $loop = new WP_Query( $args );
		  				while ( $loop->have_posts() ) : $loop->the_post();
		  					
		  					//Variaveis do Pst
		  					$slug = basename(get_permalink());
		  					$resumo = get_post_custom_values('wpcf-resume');
		    				$resumo = $resumo[0];

		    				$icone = get_post_custom_values('wpcf-icone');
							$icone = $icone[0];

							$icone_hover = get_post_custom_values('wpcf-icone-hover');
							$icone_hover = $icone_hover[0];

		  			 ?>	
					<li class="lista__item">
						<figure>
							<a href="<?php echo get_permalink(); ?>">
								<div class="lista__bordas wow zoomIn" data-wow-duration="1" data-wow-delay="1s">
										<!-- Colocar um BG na tag <i> utilizando a classe correspondente ao icone-->
										<i class="servicos__<?php echo $slug; ?>">
											<img class="icon" src="<?php echo $icone; ?>" alt="<?php echo the_title(); ?>" />
											<img class="icon-hover" src="<?php echo $icone_hover; ?>" alt="<?php echo the_title(); ?>" />
										</i>
								</div>
							</a>							
							<figcaption>
								<h5 class="lista__smalltitle"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h5>
								<p class="lista__smallcontent"><?php echo $resumo; ?></p>
							</figcaption>
						</figure>						
					</li>
					 <?php endwhile; ?> 
					 <?php if( is_home() || is_front_page() ): ?>
						<div class="groupboxes__vermais groupboxes__vermais--servicos wow rotateIn" data-wow-duration="1" data-wow-delay="1s">
							<a href="<?php echo home_url(); ?>/servicos/#design" class="btn-plus"></a>
						</div>
					<?php endif; ?>
				</ul>	
			</div>
		</div>	
	</div>	
</section>  