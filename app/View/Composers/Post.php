<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Post extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.page-header',
        'partials.content-post',
        'partials.content-single',
        // 'partials.content-*',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'title' => $this->title(),
            'image' => get_the_post_thumbnail_url(),
            'excerpt' => get_the_excerpt(),
            'posts' => $this->posts(),
            'icons' =>get_field('Icons', 'options'),
            'form' => get_field('Form Text', 'options'),

        ];
    }

    public function posts()
    {
        $args = array(
            // 'paged' => $paged,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => get_field('Post Count'),
            'post__not_in' => [get_the_ID()],
            // 'category_name' => $cat,
            //Here we can get more than one post type. Useful to a home page.
        );

        $posts = new \WP_Query($args);

        $post_data = [];
        while($posts->have_posts()): $posts->the_post();

        $post_data['posts'][] = [
            'title' => get_the_title(),
            'link' => get_permalink(),
            'excerpt' => get_the_excerpt(),
        ];

        endwhile;

        wp_reset_postdata();

        return $post_data;

    }

    /**
     * Returns the post title.
     *
     * @return string
     */

    public function title()
    {
        if ($this->view->name() !== 'partials.page-header') {
            return get_the_title();
        }

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'sage');
        }

        if (is_archive()) {
            return get_the_archive_title();
        }

        if (is_search()) {
            /* translators: %s is replaced with the search query */
            return sprintf(
                __('Search Results for %s', 'sage'),
                get_search_query()
            );
        }

        if (is_404()) {
            return __('Not Found', 'sage');
        }

        return get_the_title();
    }
  
}
