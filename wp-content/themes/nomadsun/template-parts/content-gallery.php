<!-- this tag wraps gallery and contains everything -->
<div class="gallery container flex flex-wrap center ph4-l">
    <?php $images = get_sub_field('gallery');?>
    <?php foreach($images as $image) : ?>
        <!-- prevent img squishing by putting img in div-->
        <!-- here we added custom fied to our attachments(images) whicch adds a class name to control image width -->
        <div class =  "gallery-image ph3 mb4 <?php the_field('image_width', $image['id']); ?>">
            <!-- here we get img by id and tell it we want full size -->
            <?php echo wp_get_attachment_image($image['id'], 'full');?>
            
            <!-- here we assign our caption to a var named
            caption, if caption is not empty  render onto  the page  -->

            <?php $caption = wp_get_attachment_caption($image['id']);?>
            
            <?php if (!empty($caption)) : ?>
                <p class="caption f5 o-50 pt3 mv0 archivo-regular">
                    <!-- grab caption by attachment id -->
                    <?php echo $caption; ?>
                </p>
            <?php endif; ?>

        </div>
    <?php endforeach;?>
</div>