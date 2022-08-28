<?php get_header() ?>
<section class="page-header section-sm">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row g-4 g-lg-5 text-center text-lg-start justify-content-center justify-content-lg-start">
                    <div class="col-lg-3 col-md-4 col-sm-5 col-6">
                        <img class="img-fluid rounded" src="<?= get_avatar_url(get_the_author_meta('ID'), array('size' => 450)) ?>" alt="<?php the_author() ?>" width="250" height="250" />
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <p class="mb-2">
                            <span class="fw-bold text-black"><?= count_user_posts(get_the_author_meta('ID')) ?></span> Published
                            posts
                        </p>
                        <h1 class="h3 text-dark mb-3"><?php the_author() ?></h1>
                        <div class="content">
                            <p>
                                <?php the_author_meta("description") ?>
                            </p>
                            <p>
                                Follow him
                                <a target="_blank" href="https://twitter.com/thomas-macaulay">on Twitter</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- All Posts -->
<div class="container">
    <div class="row gy-5 gx-4 g-xl-5">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post() ?>
                <div class="col-lg-6">
                    <?php get_template_part("template-parts/post/content") ?>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <h3 class="text-center my-5">No Posts At The Momment</h3>
        <?php endif; ?>

        <div class="col-12">
            <!-- pagination -->
            <?php custom_numeric_posts_nav() ?>
        </div>
    </div>
</div>
<?php get_footer() ?>