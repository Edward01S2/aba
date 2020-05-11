<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class herosimple extends Block
{
    /**
     * The name of the block.
     *
     * @var string
     */
    public $name = 'Hero Simple';
    public $slug = 'herosimple';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Lorem ipsum...';

    /**
     * The block category.
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

    public $post_types = ['post', 'page', 'function'];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'content' => get_field('content'),
            'link' => get_field('link'),
            'image' => get_field('bg image'),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $herosimple = new FieldsBuilder('herosimple');

        $herosimple
            ->addTextarea('content')
            ->addLink('link')
            ->addImage('bg image');

        return $herosimple->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
}
