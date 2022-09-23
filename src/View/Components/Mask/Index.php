<?php

namespace fflnvb\admin\View\Components\Mask;

use Illuminate\View\Component;

class Index extends Component
{
    /**
    * Display name of the Model
    *
    * @var string
    */
    public $name;

    /**
    * Singular display name of the Model
    *
    * @var string
    */
    public $single;

    /**
    * Route name of Model
    *
    * @var string
    */
    public $routeName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $routeName, $single)
    {
        $this->name = $name;
        $this->routeName = $routeName;
        $this->single = $single;
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
