<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AvatarComponent extends Component
{

    public $avatarUrl;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.avatar-component');
    }
}
