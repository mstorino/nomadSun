
	<!-- using the_permalink gives us a link to a post -->
	<!-- <h1>
		
		<a href="<?php the_permalink();?>">
			Check out <?php the_title();?>!
		</a>
		
	</h1> -->
	
	<!-- needs background img -->
	<!-- here we use inline style attribute
	to attache our hero image
	as a css background directly onto the element -->

	<!-- section have min height 1--vh, cover, background, flex, center vert and horiz -->
	<a href="<?php the_permalink(); ?>" class="link db hero min-vh-100 cover bg-center flex items-center justify-center" style="<?php nice_background('hero_image'); ?>">

		<!-- make text white and center -->
		<div class="hero-content white tc ph3 ph4-l">
			<!-- title -->
			<!-- bold margin 0 white uppercase -->
			<h1 class="f2 f1-l hero-heading ma0 mb2 ttu archivo b lh-title">
				<?php the_title();?>
			</h1>

			<!-- subheading -->

			<?php if( get_field('subhead') ): ?>

			<!-- similar thing but big bottom margin -->
				<p class="hero-subhead f2 f1-l tenor mb5 mb6-l mt0 ttu lh-title">
					<?php the_field('subhead'); ?>
				</p>
			<?php endif; ?>

			<!-- formatted date -->
			<?php if( get_field('date') ): ?>
				
				<!-- small font f6, uppercase text, tracck date with subtle spacing -->
				<p class="f6 date archivo ttu ma0 tracked">
					<?php 
						// convert date to format php can
						//work with and then format it to be nice + readable
						// echo date("F Y", strtotime(get_field('date')));
						nice_date(get_field('date'));
					?>
				</p>
			<?php endif; ?>
		
		</div>
	</a>