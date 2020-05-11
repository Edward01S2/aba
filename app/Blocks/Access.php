<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Access extends Block
{
    /**
     * The display name of the block.
     *
     * @var string
     */
    public $name = 'Access';

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
            'title' => get_field('Title'),
            'icon' => get_field('Icon'),
            'info' => get_field('Info'),
            'image' => get_field('Image'),
            'caption' => get_field('Caption')
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
        $access = new FieldsBuilder('access');

        $access
            ->addTab('Top')
            ->addText('Title')
            ->addImage('Icon')
            ->addTab('Left')
            ->addRepeater('Info', [
                'layout' => 'block',
            ])
                ->addTrueFalse('Percent')
                ->addNumber('Percentage')
                    ->conditional('Percent', '==', '1')
                ->addText('Subtext')
                    ->conditional('Percent', '==', '1')
                ->addTextarea('Text')
                    ->conditional('Percent', '==', '1')
                ->addWysiwyg('Content')
                    ->conditional('Percent', '==', '0')
            ->endRepeater()
            ->addTab('Right')
            ->addImage('Image')
            ->addText('Caption');


        return $access->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */

}
