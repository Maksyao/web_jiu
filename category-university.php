<?php
get_header(); ?>

<main class="uni-flex">
    <?php
    while (have_posts()) {
        the_post();
    ?>
        <a href="<?php the_permalink(); ?>" class="uni-card-a">
            <div class="uni-card">
                <div class="uni-logo">
                    <img src="<?= CFS()->get('uni_logo'); ?>" alt="logo" class="uni-logo-img">
                </div>
                
                <div class="uni-info">
                    <h3 class="uni-name"><?= the_title();?></h3>
                </div>
            </div>
        </a>
    <?php
    }
    ?>
</main>

<?php get_footer(); ?>