<?php get_header() ?>
<section class="page-header section-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="section-title h2 mb-3">
                    <span>Tags</span>
                </h1>
                <ul class="list-inline breadcrumb-menu mb-3">
                    <li class="list-inline-item">
                        <a href="<?= site_url("/") ?>"><i class="ti ti-home"></i> <span>Home</span></a>
                    </li>
                    <li class="list-inline-item">
                        • &nbsp;
                        <a href="#"><span>Tags</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php
$tags = get_tags(array(
    'orderby' => 'date',
    'order' => 'DESC',
));

?>

<div class="container">
    <div class="row g-4 justify-content-center text-center">
        <?php foreach ($tags as $tag) : ?>
            <div class="col-lg-4 col-sm-6">
                <a class="p-4 rounded bg-white d-block is-hoverable" href="<?= get_tag_link($tag->term_id) ?>">
                    <span class="h3"><i class="ti ti-color-swatch mb-2"></i></span>
                    <span class="h4 mt-2 mb-3 d-block"><?= $tag->name ?></span>
                    Total <?= $tag->count ?> posts
                </a>
            </div>
        <?php endforeach ?>

    </div>
</div>
<?php get_footer() ?>