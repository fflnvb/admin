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
    public function __construct($name, $model)
    {
        $this->name = $name;
        $this->model = $model;
        $this->routeName = Str::plural(Str::lower(class_basename($model)));
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
