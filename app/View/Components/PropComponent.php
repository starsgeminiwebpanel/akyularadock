<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PropComponent extends Component
{

    public $imageUrl;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($imageUrl)
    {
        //
        $this->imageUrl = $imageUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.prop-component');
    }
}
