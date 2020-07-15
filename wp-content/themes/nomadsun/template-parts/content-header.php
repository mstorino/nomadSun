<!-- here we have our header 
				make it flexbox at larger screens
			-->
<div class="flex-l">

<!-- here we have our header bg image -->			
    <div class="w-100 w-60-l vh-50 vh-100-l cover bg-center" style="<?php nice_background('hero_image'); ?>"></div>

<!-- here we have our header content -->
    <div class ="w-100 w-40-l flex items-center justify-center ph3 ph4-l relative">
        <div class="tc">
            <!-- here we use absolute positioning for larger screens
            to put the date in the top center -->
            <p class="f6 archivo mt0 mb5 mb0-l ttu tracked absolute-l top-0-l left-0-l w-100-l pt5">
                <?php 
                    // convert date to format php can
                    //work with and then format it to be nice + readable
                    // echo date("F Y", strtotime(get_field('date')));
                    nice_date(get_field('date'));
                ?>
                <span class="line mt4"></span>
            </p>
            
            <!-- standard wordpress data -->
            <!-- we change the typ scale for larger screens and 
            squish the line height because of bigger font size-->
            <h1 class="f2 f1-l archivo mt0 mb2 ttu ln-title">
                <?php the_title(); ?>
            </h1>

            <p class="f2 f1-l tenor mt0 mb4 mb5-l ttu ln-title">
                <?php the_field('subhead'); ?>
            </p>
            
            <!-- specific to this component -->
            <p class="cardo f4 i measure  center mv0">
                <?php the_sub_field('header_intro'); ?>
            </p>
        </div>
        
    </div>

</div>
