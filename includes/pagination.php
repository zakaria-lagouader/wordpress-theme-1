<?php

function custom_numeric_posts_nav()
{

    if (is_singular())
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max   = intval($wp_query->max_num_pages);

    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<nav class="text-center mt-5"><ul class="pagination justify-content-center border border-white rounded d-inline-flex">' . "\n";

    /** Previous Post Link */
    if (get_previous_posts_link())
        printf('<li class="page-item"><a class="page-link rounded w-auto px-4" href="%s" aria-label="Pagination Arrow">Prev</a></li>' . "\n", get_previous_posts_page_link());

    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $li_class = "page-item";
        $li_class .= 1 == $paged ? ' active' : '';

        printf('<li class="%s"><a class="page-link rounded" href="%s">%s</a></li>' . "\n", $li_class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links))
            echo '<li class="page-item mt-2 mx-2">…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array) $links as $link) {
        $li_class = "page-item";
        $li_class .= $link == $paged ? ' active' : '';
        printf('<li class="%s"><a class="page-link rounded" href="%s">%s</a></li>' . "\n", $li_class, esc_url(get_pagenum_link($link)), $link);
    }

    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li class="page-item mt-2 mx-2">…</li>' . "\n";

        $li_class = "page-item";
        $li_class .= $max == $paged ? ' active' : '';
        printf('<li class="%s"><a class="page-link rounded" href="%s">%s</a></li>' . "\n", $li_class, esc_url(get_pagenum_link($max)), $max);
    }

    /** Next Post Link */
    if (get_next_posts_link())
        printf('<li class="page-item"><a class="page-link rounded w-auto px-4" href="%s" aria-label="Pagination Arrow">Next</a></li>' . "\n", get_next_posts_page_link());

    echo '</ul></nav>' . "\n";
}
