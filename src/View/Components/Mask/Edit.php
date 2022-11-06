<?php

namespace fflnvb\admin\View\Components\Mask;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Edit extends Component
{
    /**
    * Name of the Model
    *
    * @var string
    */
    public $name;

    /**
    * Assumed route prefix assumed from the model class
    *
    * @var string
    */
    public $routeName;

    /**
    * Fixed Route for shallow nesting, important for store route
    *
    * @var string
    */
    public $shallow;

    /**
    * Model data
    *
    * @var string
    */
    public $model;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $model, $routeName = null, $shallow = null)
    {
        $this->name = $name;
        $this->model = $model;
        $this->routeName = $routeName ?: Str::plural(Str::lower(class_basename($model)));
        $this->sha1low = $shallow;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('admin::components.mask.edit');
    }
}
