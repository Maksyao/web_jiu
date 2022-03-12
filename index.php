<?php get_header(); ?>
<main class="flex-main">
    <section class="flex-main-item flex-rating">
        <h3 class="sec-name">Рейтинг</h3>


        <?php
        $posts = get_posts(array(
            'numberposts' => 0,
            'category'    => 5,
            'meta_query' => array(
                'relation' => 'AND',
                'score_clause' => array(
                    'key' => 'score',
                    'type' => 'numeric',
                ),
            ),
            'orderby'    => 'score_clause',
            'order'       => 'DESC',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ));


        for ($i = 0; $i <= 4; $i++) {
            the_post();
            if (CFS()->get('score')) {
        ?>

                <div class="rating-block">
                    <h4 class="rating">
                        <?= $i + 1 ?>
                    </h4>
                    <a href="<?php the_permalink(); ?>">
                        <img class="rating-logo" src="<?= CFS()->get('uni_logo'); ?>" alt="Logo">

                        <h4 class="rating-name">
                            <?php the_title(); ?>
                        </h4>
                    </a>
                    <h4 class="rating-score">
                        <?= CFS()->get('score'); ?>
                    </h4>
                </div>

        <?php
            }
        }
        ?>




    </section>

    <section class="flex-main-item flex-news">
        <?php
        $posts = get_posts(array(
            'numberposts' => 4,
            'category'    => 4,
            'order'       => 'DESC',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ));

        // echo "<pre>";
        // print_r($posts);
        // echo "</pre>";

        ?>


        <h3 class="sec-name">
            Новости
        </h3>
        <div class="news-container">
            <div class="last-new">
                <?php
                $i = 1;
                foreach ($posts as $post) {

                    if ($i == 1) {
                ?>
                        <img id="n-1" src="<?= CFS()->get('image', $post->ID) ?>" alt="new-1" style="display: flex;">
                    <?php
                    } else {
                    ?>
                        <img id="n-<?= $i ?>" src="<?= CFS()->get('image', $post->ID) ?>" alt="new-<?= $i ?>" style="display: none;">
                <?php
                    }
                    $i++;
                } ?>
            </div>
            <div class="prev-news">
                <?php
                $k = 1;
                foreach ($posts as $post) {

                    if ($k == 1) {
                ?>
                        <div class="prev-n new-1 new-active">
                            <p><?= the_title(); ?></p>
                            <time class="new-date"><?= CFS()->get('date') ?></time>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="prev-n new-<?= $k ?>">
                            <p><?= the_title(); ?></p>
                            <time class="new-date"><?= CFS()->get('date') ?></time>
                        </div>
                <?php
                    }
                    $k++;
                } ?>
            </div>
        </div>
    </section>

    <section class="flex-main-item flex-media">
        <h3 class="sec-name">
            Медиа
        </h3>
        <div class="slider">
            <a href="">
                <img src="<?= get_template_directory_uri() . '/assets/images/Media/1.jpg' ?>" alt="">
            </a>
            <a href="">
                <img src="<?= get_template_directory_uri() . '/assets/images/Media/2.jpg' ?>" alt="">
            </a>
        </div>
    </section>
</main>
<?php get_footer(); ?>