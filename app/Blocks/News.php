<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class News extends Block
{
    /**
     * The display name of the block.
     *
     * @var string
     */
    public $name = 'News';

    /**
     * The description of the block.
     *
     * @var string
     */
    public $description = 'Lorem ipsum...';

    /**
     * The category this block belongs to.
     *
     * @var string
     */
    public $category = 'common';

    /**
     * The icon of this block.
     *
     * @var string|array
     */
    public $icon = 'screenoptions';

    /**
     * An array of block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * An array of post types the block will be available to.
     *
     * @var array
     */
    public $post_types = ['post', 'page'];

    /**
     * The default display mode of the block that is shown to the user.
     *
     * @var string
     */
    public $mode = 'edit';

    /**
     * The block alignment class.
     *
     * @var string
     */
    public $align = 'wide';

    /**
     * Features supported by the block.
     *
     * @var array
     */
    public $supports = [];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'title' => get_field('title'),
            'link' => get_field('Link Title'),
            'page_link' => $this->link_title(get_field('title')),
            'posts' => $this->posts(),
        ];
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $news = new FieldsBuilder('news');

        $news
            ->addText('title')
            ->addText('Link Title')
            ->addNumber('Post Count');

        return $news->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function posts()
    {
        $args = array(
            // 'paged' => $paged,
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => get_field('Post Count'),
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

    public function link_title($title) {
        $string = strtolower($title);
        $string = preg_replace("/<br\/>/", "-", $string);
        $string = preg_replace("/[\s_]/", "-", $string);

        return $string;
    }
}
