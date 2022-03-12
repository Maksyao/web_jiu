<?php
/*
Template Name: Новости
*/
get_header(); ?>

<main class="news-list">

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            $date = CFS()->get('date');
    ?>
            <div class="new-block">
                <img class="new-image" src="<?= CFS()->get('image'); ?>" alt="">
                <div class="new-line">
                    <h5 class="new-title"><?php the_title(); ?></h5>
                    <p class="new-content"><?= CFS()->get('new_content'); ?></p>
                    <a href="<?= CFS()->get('new_url'); ?>" class="new-url" target="_blank">Ссылка</a>
                    <time class="new-date"><?= $date ?></time>
                </div>
            </div>


    <?php
        }
    }
    ?>


</main>

<?php get_footer(); ?>