<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Innovation extends Block
{
    /**
     * The display name of the block.
     *
     * @var string
     */
    public $name = 'Innovation';

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
    public $mode = 'preview';

    /**
     * The block alignment class.
     *
     * @var string
     */
    public $align = '';

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
            'title' => get_field('Title'),
            'icon' => get_field('Icon'),
            'subtitle' => get_field('Subtitle'),
            'image' => get_field('Image'),
            'features' => get_field('Features')
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
        $innovation = new FieldsBuilder('innovation');

        $innovation
            ->addTab('Left')
                ->addText('Title')
                ->addImage('Icon')
                ->addText('Subtitle')
                ->addRepeater('Features', [
                    'layout' => 'block',
                ])
                    ->addImage('Icon')
                    ->addTextarea('Content')
                ->endRepeater()
            ->addTab('Right')
                ->addImage('Image');


        return $innovation->build();
    }

}
