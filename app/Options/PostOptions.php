<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class PostOptions extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Settings';

    /**
     * The option page menu slug.
     *
     * @var string
     */
    public $slug = 'postoptions';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Posts | Settings';

    /**
     * The option page permission capability.
     *
     * @var string
     */
    public $capability = 'edit_theme_options';

    /**
     * The option page menu position.
     *
     * @var int
     */
    public $position = PHP_INT_MAX;

    /**
     * The slug of another admin page to be used as a parent.
     *
     * @var string
     */
    public $parent = 'edit.php';

    /**
     * The option page menu icon.
     *
     * @var string
     */
    public $icon = null;

    /**
     * Redirect to the first child page if one exists.
     *
     * @var boolean
     */
    public $redirect = true;

    /**
     * The post ID to save and load values from.
     *
     * @var string|int
     */
    public $post = 'options';

    /**
     * The option page autoload setting.
     *
     * @var bool
     */
    public $autoload = true;

    /**
     * Localized text displayed on the submit button.
     *
     * @return string
     */
    public function updateButton()
    {
        return __('Update', 'acf');
    }

    /**
     * Localized text displayed after form submission.
     *
     * @return string
     */
    public function updatedMessage()
    {
        return __('Settings Updated', 'acf');
    }

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $postOptions = new FieldsBuilder('post_options');

        $postOptions
            ->addTab('Social')
                ->addRepeater('Icons')
                    ->addImage('icon')
                ->endRepeater()
            ->addTab('Form')
                ->addText('Form Text');

        return $postOptions->build();
    }
}
