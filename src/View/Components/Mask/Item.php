<?php

namespace fflnvb\admin\View\Components\Mask;

use Illuminate\View\Component;

class Item extends Component
{
    /**
    * Background color
    *
    * @var string
    */
    public $color;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = '')
    {
        if(!empty($color)){
            $this->color = 'bg-' . $color;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('admin::components.mask.index');
    }
}
