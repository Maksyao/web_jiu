<?php
get_header(); ?>

<main class="uni-container">
    <h2 class="university-name"><?= the_title(); ?>
        <img class="single-logo" src="<?= CFS()->get('uni_logo'); ?>" alt="Logo">
    </h2>
    <h5 class="sec-name">Контакты</h5>
    <div class="university-contacts">
        <p class="contacts-text"><?= CFS()->get('contacts_info'); ?></p>
    </div>
    <h5 class="sec-name">О вузе</h5>
    <div class="university-about">
        <p class="about-text"><?= CFS()->get('about_info'); ?></p>
    </div>

    <?php

    $leads = get_posts(array(
        'numberposts' => 0,
        'category' => 6,
        'tag' => get_the_title(),
        'post_type' => 'post',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ));
    ?>


    <h5 class="sec-name">Руководители</h5>

    <div class="university-leads">
        <?php
        foreach ($leads as $lead) {
        ?>
            <div class="lead-card">
                <img src="<?= CFS()->get('photo', $lead->ID); ?>" alt="Фото" class="lead-photo">
                <div class="lead-info">
                    <p class="lead-name">
                        <?= CFS()->get('name', $lead->ID); ?>
                    </p>
                    <p class="lead-status">
                        <?= CFS()->get('status', $lead->ID); ?>
                    </p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>



    <?php

    $trainers = get_posts(array(
        'numberposts' => 0,
        'category' => 12,
        'tag' => get_the_title(),
        'post_type' => 'post',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ));
    ?>
    <h5 class="sec-name">Тренеры</h5>
    <div class="university-leads">
        <?php
        foreach ($trainers as $trainer) {
        ?>
            <div class="lead-card">
                <img src="<?= CFS()->get('photo', $trainer->ID); ?>" alt="Фото" class="lead-photo">
                <div class="lead-info">
                    <p class="lead-name">
                        <?= CFS()->get('name', $trainer->ID); ?>
                    </p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <?php
    $team = get_posts(array(
        'numberposts' => 0,
        'category' => 7,
        'tag' => get_the_title(),
        'post_type' => 'post',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ));
    ?>


    <h5 class="sec-name">Команда</h5>
    <div class="university-team">


        <?php
        foreach ($team as $member) {
        ?>
            <div class="filter-modal" id="filter<?= $member->ID ?>" onclick="show(<?= $member->ID ?>)"></div>
            <div onclick="show(<?= $member->ID ?>)" class="team-card">
                <img src="<?= CFS()->get('photo', $member->ID); ?>" alt="Фото" class="team-photo">
                <div class="team-info">
                    <p class="team-name">
                        <?= CFS()->get('name', $member->ID); ?>
                    </p>
                    <p>Разряд:</p>
                    <p class="team-property">
                        <?= CFS()->get('weight', $member->ID); ?>
                    </p>
                </div>
            </div>

            <div class="modal-window" id="modal<?= $member->ID ?>">
                <div class="modal-card">
                    <img src="<?= CFS()->get('photo', $member->ID); ?>" alt="Фото" class="modal-photo">
                    <div class="modal-info">
                        <p class="team-name">
                            <?= CFS()->get('name', $member->ID); ?>
                        </p>
                        <p>Разряд:</p>
                        <p class="team-property">
                            <?= CFS()->get('weight', $member->ID); ?>
                        </p>
                    </div>
                </div>
                <div class="achivements">
                    <?php
                    $loop = CFS()->get('achivements', $member->ID);
                    if($loop){
                    ?>
                    <p>Достижения:</p>
                    <ul>
                        <?php
                        foreach($loop as $ach){
                        ?>
                        <li><?= $ach['ach'];?></li>
                        <?php
                        }
                        ?>
                    </ul>
                    <?php
                    }
                    ?>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</main>

<?php
get_footer();
?>