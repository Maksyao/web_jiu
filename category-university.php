<?php
get_header(); ?>

<main class="uni-flex">
    <?php
    while (have_posts()) {
        the_post();
    ?>
        <a href="<?php the_permalink(); ?>" class="uni-card-a">
            <div class="uni-card">
                <img src="<?= CFS()->get('uni_logo'); ?>" alt="logo" class="uni-logo">
                <div class="uni-info">
                    <h3 class="uni-name"><?= the_title();?></h3>
                    <p class="uni-text"><?= the_title();?></p>
                </div>
            </div>
        </a>
    <?php
    }
    ?>
</main>

<?php get_footer(); ?>