<ul class="pankuzu">
    <li><a href="<?php echo home_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a><span>></span></li>
    <li>
        <?php if(has_category()): ?>
            <?php $postcat = get_the_category(); ?>
            <?php echo get_category_parents($postcat[0],true,'<span>></span></li><li>'); ?>
        <?php endif; ?>
        <a><?php the_title(); ?></a>
</ul>
