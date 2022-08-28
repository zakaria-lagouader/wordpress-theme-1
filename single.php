<?php get_header() ?>
<section class="section-sm pb-0">
    <div class="container">
        <?php while (have_posts()) : the_post() ?>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="mb-5">
                        <h3 class="h1 mb-4 post-title">
                            <?php the_title() ?>
                        </h3>

                        <ul class="card-meta list-inline mb-2">
                            <li class="list-inline-item mt-2">
                                <a href="<?= get_author_posts_url(get_the_author_meta('ID')) ?>" class="card-meta-author" title="Read all posts by - <?php the_author() ?>">
                                    <img class="w-auto" src="<?= get_avatar_url(get_the_author_meta('ID'), array('size' => 450)) ?>" alt="<?php the_author() ?>" width="26" height="26" />
                                    by <span><?php the_author() ?></span>
                                </a>
                            </li>
                            <li class="list-inline-item mt-2">—</li>
                            <li class="list-inline-item mt-2">
                                <i class="ti ti-clock"></i>
                                <span>02 min read</span>
                            </li>
                            <li class="list-inline-item mt-2">—</li>
                            <li class="list-inline-item mt-2">
                                <i class="ti ti-calendar-event"></i>
                                <span><?php the_date("m M, Y") ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mb-5 text-center">
                        <?php if (has_post_thumbnail()) : ?>
                            <img class="w-100 h-auto rounded" src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>" width="970" height="500" />
                        <?php endif ?>
                    </div>
                </div>
                <div class="col-lg-2 post-share-block order-1 order-lg-0 mt-5 mt-lg-0">
                    <div class="position-sticky" style="top: 150px">
                        <span class="d-inline-block mb-3 small">SHARE</span>
                        <ul class="social-share icon-box">
                            <li class="d-inline-block d-lg-block me-2 mb-2" onclick="return tbs_click()">
                                <i class="ti ti-brand-twitter"></i>
                            </li>
                            <li class="d-inline-block d-lg-block me-2 mb-2" onclick="return fbs_click()">
                                <i class="ti ti-brand-facebook"></i>
                            </li>
                            <li class="d-inline-block d-lg-block me-2 mb-2" onclick="return ins_click()">
                                <i class="ti ti-brand-linkedin"></i>
                            </li>
                            <li class="d-inline-block d-lg-block me-2 mb-2" onclick="return red_click()">
                                <i class="ti ti-brand-reddit"></i>
                            </li>
                            <li class="d-inline-block d-lg-block me-2 mb-2" onclick="return pin_click()">
                                <i class="ti ti-brand-pinterest"></i>
                            </li>
                        </ul>
                    </div>
                    <script type="text/javascript">
                        var pageLink = window.location.href;
                        var pageTitle = String(document.title).replace(/\&/g, "%26");

                        function tbs_click() {
                            pageLink =
                                "https://twitter.com/intent/tweet?text=${pageTitle}&url=${pageLink}";
                            socialWindow(pageLink, 570, 570);
                        }

                        function fbs_click() {
                            pageLink =
                                "https://www.facebook.com/sharer.php?u=${pageLink}&quote=${pageTitle}";
                            socialWindow(pageLink, 570, 570);
                        }

                        function ins_click() {
                            pageLink =
                                "https://www.linkedin.com/sharing/share-offsite/?url=${pageLink}";
                            socialWindow(pageLink, 570, 570);
                        }

                        function red_click() {
                            pageLink = "https://www.reddit.com/submit?url=${pageLink}";
                            socialWindow(pageLink, 570, 570);
                        }

                        function pin_click() {
                            pageLink =
                                "https://www.pinterest.com/pin/create/button/?&text=${pageTitle}&url=${pageLink}&description=${pageTitle}";
                            socialWindow(pageLink, 570, 570);
                        }

                        function socialWindow(pageLink, width, height) {
                            var left = (screen.width - width) / 2;
                            var top = (screen.height - height) / 2;
                            var params =
                                "menubar=no,toolbar=no,status=no,width=" +
                                width +
                                ",height=" +
                                height +
                                ",top=" +
                                top +
                                ",left=" +
                                left;
                            window.open(pageLink, "", params);
                        }
                    </script>
                </div>
                <div class="col-lg-8 post-content-block order-0 order-lg-2">
                    <div class="content">
                        <?php the_content() ?>
                    </div>
                    <ul class="post-meta-tag list-unstyled list-inline mt-5">
                        <li class="list-inline-item">Tags:</li>
                        <?php foreach (get_tags() as $tag) : ?>
                            <li class="list-inline-item mb-3">
                                <a class="bg-white" href="<?= get_tag_link($tag->term_id) ?>"><?= $tag->name ?></a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        <?php endwhile ?>

        <div class="single-post-author">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="d-block d-md-flex">
                        <a href="<?= get_author_posts_url(get_the_author_meta('ID')) ?>">
                            <img class="rounded mr-4" src="<?= get_avatar_url(get_the_author_meta('ID'), array('size' => 450)) ?>" alt="<?php the_author() ?>" width="155" height="155" />
                        </a>
                        <div class="ms-0 ms-md-4 ps-0 ps-md-3 mt-4 mt-md-0">
                            <h3 class="h4 mb-3">
                                <a href="<?= get_author_posts_url(get_the_author_meta('ID')) ?>" class="text-dark"><?php the_author() ?></a>
                            </h3>
                            <p>
                                <?php the_author_meta("description") ?>
                            </p>
                            <div class="content">
                                <a href="<?= get_author_posts_url(get_the_author_meta('ID')) ?>">See all posts by this author
                                    <i class="ti ti-arrow-up-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <?php
            // if (comments_open() || get_comments_number()) :
            //     comments_template();
            // endif;
            ?>
        </div>


        <div class="single-post-similer">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="section-title">
                            <span>Related Posts</span>
                        </h2>
                    </div>
                    <div class="row gy-5 gx-4 g-xl-5">
                        <div class="col-lg-6">
                            <article class="card post-card h-100 border-0 bg-transparent">
                                <div class="card-body">
                                    <a class="d-block" href="blog-single.html" title="Everything you wanted to know about the metaverse">
                                        <div class="post-image position-relative">
                                            <img class="w-100 h-auto rounded" src="assets/images/blog/04.jpg" alt="Everything you wanted to know about the metaverse" width="970" height="500" />
                                        </div>
                                    </a>
                                    <ul class="card-meta list-inline mb-3">
                                        <li class="list-inline-item mt-2">
                                            <i class="ti ti-calendar-event"></i>
                                            <span>16 Nov, 2021</span>
                                        </li>
                                        <li class="list-inline-item mt-2">—</li>
                                        <li class="list-inline-item mt-2">
                                            <i class="ti ti-clock"></i>
                                            <span>01 min read</span>
                                        </li>
                                    </ul>
                                    <a class="d-block" href="blog-single.html" title="Everything you wanted to know about the metaverse">
                                        <h3 class="mb-3 post-title">
                                            Everything you wanted to know about
                                            the metaverse
                                        </h3>
                                    </a>
                                    <p>
                                        In the wake of Facebook rebranding as
                                        Meta, reflecting its focus on the
                                        “metaverse”, Microsoft has now announced
                                        it, too, will launch into this space. …
                                    </p>
                                </div>
                                <div class="card-footer border-top-0 bg-transparent p-0">
                                    <ul class="card-meta list-inline">
                                        <li class="list-inline-item mt-2">
                                            <a href="author-single.html" class="card-meta-author" title="Read all posts by - Emma Hazel">
                                                <img class="w-auto" src="assets/images/author/emma-hazel.jpg" alt="Emma Hazel" width="26" height="26" />
                                                by <span>Emma</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item mt-2">•</li>
                                        <li class="list-inline-item mt-2">
                                            <ul class="card-meta-tag list-inline">
                                                <li class="list-inline-item small">
                                                    <a href="tag-single.html">Life</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>

                        <div class="col-lg-6">
                            <article class="card post-card h-100 border-0 bg-transparent">
                                <div class="card-body">
                                    <a class="d-block" href="blog-single.html" title="The AGI hype train is running out of steam">
                                        <div class="post-image position-relative">
                                            <img class="w-100 h-auto rounded" src="assets/images/blog/02.jpg" alt="The AGI hype train is running out of steam" width="970" height="500" />
                                        </div>
                                    </a>
                                    <ul class="card-meta list-inline mb-3">
                                        <li class="list-inline-item mt-2">
                                            <i class="ti ti-calendar-event"></i>
                                            <span>05 Dec, 2021</span>
                                        </li>
                                        <li class="list-inline-item mt-2">—</li>
                                        <li class="list-inline-item mt-2">
                                            <i class="ti ti-clock"></i>
                                            <span>02 min read</span>
                                        </li>
                                    </ul>
                                    <a class="d-block" href="blog-single.html" title="The AGI hype train is running out of steam">
                                        <h3 class="mb-3 post-title">
                                            The AGI hype train is running out
                                            of steam
                                        </h3>
                                    </a>
                                    <p>
                                        The AGI hype train has hit some heavy
                                        traffic. While futurists and fundraisers
                                        used to make bullish predictions about
                                        artificial general intelligence, …
                                    </p>
                                </div>
                                <div class="card-footer border-top-0 bg-transparent p-0">
                                    <ul class="card-meta list-inline">
                                        <li class="list-inline-item mt-2">
                                            <a href="author-single.html" class="card-meta-author" title="Read all posts by - Thomas Macaulay">
                                                <img class="w-auto" src="assets/images/author/thomas-macaulay.jpg" alt="Thomas Macaulay" width="26" height="26" />
                                                by <span>Thomas</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item mt-2">•</li>
                                        <li class="list-inline-item mt-2">
                                            <ul class="card-meta-tag list-inline">
                                                <li class="list-inline-item small">
                                                    <a href="tag-single.html">Machine</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>