<form action="<?= site_url("/") ?>">
    <div class="search-block">
        <div data-toggle="search-close">
            <span class="ti ti-x text-primary"></span>
        </div>
        <input type="text" id="js-search-input" placeholder="Type to search blog.." aria-label="search-query" value="<?= get_search_query() ?>" name="s" />

        <?php
        $tags = array_slice(get_tags(array(
            'orderby' => 'date',
            'order' => 'DESC',
        )), 0, 6);

        ?>

        <div class="mt-4 card-meta">
            <p class="h4 mb-3">See posts by tags</p>
            <ul class="card-meta-tag list-inline">
                <?php foreach ($tags as $tag) : ?>
                    <li class="list-inline-item me-1 mb-2">
                        <a class="small" href="<?= get_tag_link($tag->term_id) ?>"><?= $tag->name ?></a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        <?php
        $categories = array_slice(get_categories(array(
            'orderby' => 'date',
            'order' => 'DESC',
        )), 0, 3);

        ?>
        <div class="mt-4 card-meta">
            <p class="h4 mb-3">See posts by categories</p>
            <ul class="card-meta-tag list-inline">
                <?php foreach ($categories as $category) : ?>
                    <li class="list-inline-item me-1 mb-2">
                        <a class="small" href="<?= get_category_link($category->term_id) ?>"><?= $category->name ?></a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</form>