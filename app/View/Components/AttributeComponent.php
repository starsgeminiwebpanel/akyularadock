<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AttributeComponent extends Component
{
    public $attributeUrl;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($attributeUrl)
    {
        $this->attributeUrl=$attributeUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.attribute-component');
    }
}
