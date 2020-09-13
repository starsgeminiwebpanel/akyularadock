<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Storage;
use Illuminate\View\Component;

class SliderComponent extends Component
{
    /**
     * Whether Carousel automatically runs at startup or not.
     *
     * @var boolean
     */
    public $isStartUp;

    /**
     * Carousel image list.
     *
     * @var array
     */
    public $images;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($isStartUp)
    {
        $this->isStartUp = $isStartUp;
       // $this->images = array();
    }

    /**
     * Fetch images automatically & insert thems
     * @return array
     */
    public function fetchImages(){
        $this->images = Storage::files(asset('assets/images/slider'));
        //if ($handle = $this->images = Storage::files(public_path('assets/images/slider'))) {
            /*while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != "..") {
                    echo $entry."<br>"; // NAME OF THE FILE
                }
            }
            closedir($handle);
            */
       // }
       // return $images ;
        if ($handle = opendir(public_path('assets/images/slider'))) {

            while ($entry = readdir($handle)) {
                if ($entry != "." && $entry != "..") {
                   // echo $entry."<br>"; // NAME OF THE FILE
                    $imagesList[] = $entry;
                }
            }
            if(isset($imagesList)){
                sort($imagesList);
                $this->images = $imagesList;

            }
           closedir($handle);
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $this->fetchImages();
        return view('components.slider-component');
    }
}
