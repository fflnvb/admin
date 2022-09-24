<?php

namespace fflnvb\admin\View\Components\Dashboard;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Item extends Component
{
    /**
    * Display name of the Model
    *
    * @var string
    */
    public $name;

    /**
    * route name of the Item
    *
    * @var string
    */
    public $route;

    /**
    * Model count
    *
    * @var string
    */
    public $count;

    /**
    * Model count
    *
    * @var string
    */
    public $lastEditItem;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $model)
    {
        $this->name = $name;
        $this->route = Str::of($model)->lower()->plural();

        $namespace = '\App\\Models\\'.$model;
        $tempModel = new $namespace;

        $lastEditItem = $tempModel::orderBy('updated_at','DESC')->first() ?? new $namespace;
        $this->lastEditItem = $lastEditItem;

        $this->count = $tempModel::count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('admin::components.dashboard.item');
    }
}
