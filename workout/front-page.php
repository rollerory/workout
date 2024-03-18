<?php
/*
Template Name: front-page
Template Post Type: post, page, product
*/

?>


<?php get_header(); ?>

<main class="main">

    <section class="workout-plan">
        <div class="container">
            <div class="workout-plan__inner">
                <div class="workout-plan__content">
                    <h1 class="title workout-plan__content-title">
                        4 WEEK <p>Workout Plan</p>
                    </h1>
                    <p class="text workout-plan__content-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fringilla, lacus eget
                        consequat tincidunt, lectus ex
                        bibendum libero, eget iaculis quam arcu quis mauris. Donec ex neque, egestas in faucibus.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    </p>
                    <div class="workout-plan__content-links">
                        <a href="#" target="_blank" class="btn workout-plan__content-link">TRY FOR FREE</a>
                        <a href="#" target="_blank" class="btn workout-plan__content-link">TRY FOR FREE</a>
                    </div>
                </div>
                <picture class="workout-plan__img">
                    <source type="image/avif"
                        srcset="<?php bloginfo('template_url'); ?>/assets/images/workout-plan-img.avif" />
                    <source type="image/webp"
                        srcset="<?php bloginfo('template_url'); ?>/assets/images/workout-plan-img.webp" />
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/workout-plan-img.jpg">
                </picture>
                <div class="workout-plan__add">
                    <div class="workout-plan__add-item">
                        <h3 class="workout-plan__add-title">GET INSPIRED</h3>
                        <p class="text workout-plan__add-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit.
                            Maecenas fringil. lacus eget consequat tincidunt, lectus ex.Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Maecenas fringil. lacus eget consequat tincidunt, lectus
                            ex.
                        </p>
                        <a href="#" target="_blank" class="workout-plan__add-link">
                            <div>
                                <svg width="12" height="12">
                                    <use href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#arrow"></use>
                                </svg>
                            </div>
                            Explore More
                        </a>
                    </div>
                    <div class="workout-plan__add-item">
                        <h3 class="workout-plan__add-title">CHALLENGE YOURSELF</h3>
                        <p class="text workout-plan__add-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit.
                            Maecenas fringil. lacus eget consequat tincidunt, lectus ex.</p>
                        <a href="#" target="_blank" class="workout-plan__add-link">
                            <div>
                                <svg width="12" height="12">
                                    <use href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#arrow"></use>
                                </svg>
                            </div>
                            Explore More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="training" id="training">
        <div class="container">
            <div class="training__inner">
                <h3 class="title">latest training</h3>
                <div class="training__items">

                    <?php
                    global $post;

                    $myposts = get_posts([
                        'numberposts' => 3,
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                        'category' => 'trainings'
                    ]);

                    if ($myposts) {
                        foreach ($myposts as $post) {
                            setup_postdata($post);
                            ?>
                            <div class="training__item">
                                <?php the_post_thumbnail(
                                    array(368, 209),
                                    array(
                                        'class' => 'training__item-img'
                                    )
                                ); ?>
                                <h4 class="training__item-title">
                                    <?php echo get_the_title(); ?>
                                </h4>
                                <p class="text training__item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas fringilla, lacus eget consequat</p>
                                <a href="#" target="_blank" class="btn-small training__item-link">SEE MORE</a>
                            </div>

                            <?php
                        }
                    }

                    wp_reset_postdata();
                    ?>

                </div>

                <button class="training__item-more">SEE MORE HERE</button>
                <button class="btn-small training__item-mobile">SEE MORE</button>
            </div>
        </div>
    </section>

    <section class="team" id="team">
        <div class="container">
            <h3 class="title">Our team</h3>
            <div class="team__items">

                <?php

                $teamPosts = new WP_Query([
                    'posts_per_page' => 4,
                    'post_type' => 'team',
                    'order' => 'ASC',
                ]);

                if ($teamPosts->have_posts()) {
                    while ($teamPosts->have_posts()) {
                        $teamPosts->the_post();
                        ?>
                        <div class="team__item">
                            <div class="team__item-img">
                                <?php the_post_thumbnail(
                                    array(260, 173)
                                ); ?>
                            </div>
                            <div class="team__item-info">
                                <h4 class="team__item-title">
                                    <?php echo get_the_title(); ?>
                                </h4>
                                <p class="team__item-subtitle">trainer</p>
                                <p class="text team__item-text">
                                    <?php echo wp_strip_all_tags(get_the_content()); ?>
                                </p>
                            </div>
                            <a href="#" target="_blank" class="btn-small team__item-link">SEE MORE</a>
                        </div>
                        <?php
                    }
                }

                wp_reset_postdata();
                ?>

            </div>
            <button class="btn-small team__more">SEE MORE</button>
        </div>
    </section>

    <section class="plans" id="discover">
        <div class="container">
            <div class="plans__inner">
                <h2 class="plans__title">DISCOVER YOUR POTENCIAL</h2>
                <p class="plans__subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry.
                    Lorem
                    Ipsum. text of the printing and
                    typesetting</p>
                <div class="plans__links">
                    <a href="#" target="_blank" class="btn plans__link view-plans">VIEW PLANS</a>
                    <a href="#" target="_blank" class="btn plans__link learn-more">LEARN MORE</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>