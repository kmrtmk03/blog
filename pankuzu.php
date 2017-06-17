<ul class="pankuzu">
    <li><a href="<?php echo home_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
    <li>
        <?php if(has_category()): ?>
            <?php $postcat = get_the_category(); ?>
            <?php echo '<span>></span>'.get_category_parents($postcat[0],true,'</li><li><span>></span>'); ?>
        <?php endif; ?>
        <?php the_title(); ?>
</ul>
