
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
                <div class="workout-plan__img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/workout-plan-img.jpg">
                </div>
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
                                    <use href="images/sprite.svg#arrow"></use>
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
                                    <use href="images/sprite.svg#arrow"></use>
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
                    <div class="training__item">
                        <picture class="training__item-img">
                            <source type="image/avif" srcset="images/trainings/1.avif" />
                            <source type="image/webp" srcset="images/trainings/1.webp" />
                            <img src="images/trainings/1.jpg">
                        </picture>
                        <h4 class="training__item-title">running</h4>
                        <p class="text training__item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas fringilla, lacus eget consequat</p>
                        <a href="#" target="_blank" class="btn-small training__item-link">SEE MORE</a>
                    </div>
                    <div class="training__item">
                        <picture class="training__item-img">
                            <source type="image/avif" srcset="images/trainings/2.avif" />
                            <source type="image/webp" srcset="images/trainings/2.webp" />
                            <img src="images/trainings/2.jpg">
                        </picture>
                        <h4 class="training__item-title">lifting</h4>
                        <p class="text training__item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas fringilla, lacus eget consequat</p>
                        <a href="#" target="_blank" class="btn-small training__item-link">SEE MORE</a>
                    </div>
                    <div class="training__item">
                        <picture class="training__item-img">
                            <source type="image/avif" srcset="images/trainings/3.avif" />
                            <source type="image/webp" srcset="images/trainings/3.webp" />
                            <img src="images/trainings/3.jpg">
                        </picture>
                        <h4 class="training__item-title">yoga</h4>
                        <p class="text training__item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Maecenas fringilla, lacus eget consequat</p>
                        <a href="#" target="_blank" class="btn-small training__item-link">SEE MORE</a>
                    </div>
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
                <div class="team__item">
                    <picture class="team__item-img">
                        <source type="image/avif" srcset="images/team/1.avif" />
                        <source type="image/webp" srcset="images/team/1.webp" />
                        <img src="images/team/1.jpg">
                    </picture>
                    <div class="team__item-info">
                        <h5 class="team__item-title">jamies ford</h5>
                        <p class="team__item-subtitle">trainer</p>
                        <p class="team__item-text">
                            The text is on the left because I think it's more correct
                        </p>
                    </div>
                    <a href="#" class="btn-small team__item-link">SEE MORE</a>
                </div>
                <div class="team__item">
                    <picture class="team__item-img">
                        <source type="image/avif" srcset="images/team/2.avif" />
                        <source type="image/webp" srcset="images/team/2.webp" />
                        <img src="images/team/2.jpg">
                    </picture>
                    <div class="team__item-info">
                        <h5 class="team__item-title">eddie smith</h5>
                        <p class="team__item-subtitle">trainer</p>
                        <p class="team__item-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fringilla, lacus eget
                            consequat
                        </p>
                    </div>
                    <a href="#" target="_blank" class="btn-small team__item-link">SEE MORE</a>
                </div>
                <div class="team__item">
                    <picture class="team__item-img">
                        <source type="image/avif" srcset="images/team/3.avif" />
                        <source type="image/webp" srcset="images/team/3.webp" />
                        <img src="images/team/3.jpg">
                    </picture>
                    <div class="team__item-info">
                        <h5 class="team__item-title">annie summer</h5>
                        <p class="team__item-subtitle">trainer</p>
                        <p class="team__item-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fringilla, lacus eget
                            consequat
                        </p>
                    </div>
                    <a href="#" target="_blank" class="btn-small team__item-link">SEE MORE</a>
                </div>
                <div class="team__item">
                    <picture class="team__item-img">
                        <source type="image/avif" srcset="images/team/4.avif" />
                        <source type="image/webp" srcset="images/team/4.webp" />
                        <img src="images/team/4.jpg">
                    </picture>
                    <div class="team__item-info">
                        <h5 class="team__item-title">emily sea</h5>
                        <p class="team__item-subtitle">trainer</p>
                        <p class="team__item-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fringilla, lacus eget consequat
                        </p>
                    </div>
                    <a href="#" target="_blank" class="btn-small team__item-link">SEE MORE</a>
                </div>
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