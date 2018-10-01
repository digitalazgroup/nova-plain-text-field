<?php

namespace Digitalazgroup\PlainText;

use Laravel\Nova\Fields\Field;

class PlainText extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'plain-text';

    /**
     * Display the field as raw HTML using Vue.
     *
     * @return $this
     */
    public function asHtml()
    {
        return $this->withMeta(['asHtml' => true]);
    }
}
