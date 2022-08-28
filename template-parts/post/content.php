<article class="card post-card h-100 border-0 bg-transparent">
    <div class="card-body">
        <a class="d-block" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
            <div class="post-image position-relative">
                <?php if (has_post_thumbnail()) : ?>
                    <img class="w-100 h-auto rounded" src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>" width="970" height="500" />
                <?php else : ?>
                    <img class="w-100 h-auto rounded" src="<?php asset("assets/images/blog/07.jpg") ?>" alt="<?php the_title() ?>" width="970" height="500" />
                <?php endif ?>
            </div>
        </a>
        <ul class="card-meta list-inline mb-3">
            <li class="list-inline-item mt-2">
                <i class="ti ti-calendar-event"></i>
                <span><?php the_date("m M, Y") ?></span>
            </li>
            <li class="list-inline-item mt-2">—</li>
            <li class="list-inline-item mt-2">
                <i class="ti ti-clock"></i>
                <span>03 min read</span>
            </li>
        </ul>
        <a class="d-block" href="<?php the_permalink() ?>" title="I work 5 hours a day, and I’ve never been more productive">
            <h3 class="mb-3 post-title">
                <?php the_title() ?>
            </h3>
        </a>
        <p>
            <?php the_excerpt() ?>
        </p>
    </div>
    <div class="card-footer border-top-0 bg-transparent p-0">
        <ul class="card-meta list-inline">
            <li class="list-inline-item mt-2">
                <a href="<?= get_author_posts_url(get_the_author_meta('ID')) ?>" class="card-meta-author" title="Read all posts by - <?php the_author() ?>">
                    <img class="w-auto" src="<?= get_avatar_url(get_the_author_meta('ID'), array('size' => 450)) ?>" alt="<?php the_author() ?>" width="26" height="26" />
                    by <span><?php the_author() ?></span>
                </a>
            </li>
            <li class="list-inline-item mt-2">•</li>
            <li class="list-inline-item mt-2">
                <ul class="card-meta-tag list-inline">
                    <?php foreach (array_slice(get_the_category(), 0, 2) as $category) : ?>
                        <li class="list-inline-item small">
                            <a href="<?= get_category_link($category->cat_ID) ?>"><?= $category->name ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </li>
        </ul>
    </div>
</article>