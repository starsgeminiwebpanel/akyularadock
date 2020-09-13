<?php

namespace App\View\Components;

use Illuminate\View\Component;


class HeaderMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
       /*
        if(session()->has('bearerToken') && session()->has('refreshToken') && session()->has('expiresIn')){
            JavaScript::put([
                'bearerToken' =>  session()->get('bearerToken'),
                'refreshToken' => session()->get('refreshToken'),
                'expiresIn' => session()->get('expiresIn'),
            ]);
        }
        elseif (session()->has('bearerToken')){
            JavaScript::put([
                'bearerToken' =>  session()->get('bearerToken'),
            ]);
        }else{
            JavaScript::put([
                'bearerToken' => 'notFound',
            ]);
        }
       */
        // return function (array $data) {
            // $data['componentName'];
            // $data['attributes'];
            // $data['slot'];
            return view('components.header-menu');
        //};
    }
}
