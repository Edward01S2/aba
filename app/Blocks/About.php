<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class About extends Block
{
    /**
     * The display name of the block.
     *
     * @var string
     */
    public $name = 'About';

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
            'show' => get_field('Show'),
            'title' => get_field('Title'),
            'title_link' => $this->link_title(get_field('Title')),
            'image' => get_field('Image'),
            'text_left' => get_field('Text Left'),
            'text_right' => get_field('Text Right'),
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
        $about = new FieldsBuilder('about');

        $about
            ->addTrueFalse('Show')
            ->addText('Title')
            ->addImage('Image')
            ->addWysiwyg('Text Left')
            ->addWysiwyg('Text Right');


        return $about->build();
    }

    public function link_title($title) {
        $string = strtolower($title);
        $string = preg_replace("/<br\/>/", "-", $string);
        $string = preg_replace("/[\s_]/", "-", $string);

        return $string;
    }



}
