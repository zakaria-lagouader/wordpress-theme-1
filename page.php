<?php get_header() ?>

<section class="page-header section-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="section-title h2 mb-3">
                    <span><?php the_title() ?></span>
                </h1>
                <ul class="list-inline breadcrumb-menu mb-3">
                    <li class="list-inline-item">
                        <a href="index.html"><i class="ti ti-home"></i> <span>Home</span></a>
                    </li>
                    <li class="list-inline-item">
                        • &nbsp; <a href="privacy.html"><span><?php the_title() ?></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="content">
                    <?php the_content() ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>