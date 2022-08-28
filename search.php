<?php get_header() ?>
<section class="page-header section-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="section-title h2 mb-3">
                    <span>Search Result For : <?php the_search_query() ?></span>
                </h1>
                <ul class="list-inline breadcrumb-menu mb-3">
                    <li class="list-inline-item">
                        <a href="<?php bloginfo("url") ?>"><i class="ti ti-home"></i> <span>Home</span></a>
                    </li>
                    <li class="list-inline-item">
                        • &nbsp; <a href="<?= site_url("/blog") ?>"><span>Search</span></a>
                    </li>
                </ul>
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