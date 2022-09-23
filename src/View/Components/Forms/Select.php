<?php

namespace fflnvb\admin\View\Components\Forms;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Select extends Component
{
    /**
    * The select name.
    *
    * @var string
    */
    public $name;

    /**
     * The select label.
     *
     * @var string
     */
    public $label;

    /**
     * ID for Connection between label and select.
     *
     * @var string
     */
    public $id;

    /**
     * The select list.
     *
     * @var array
     */
    public $list;

    /**
     * The select value.
     *
     * @var string
     */
    public $selected;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $list, $selected='', $id='')
    {
        $this->name = $name;
        $this->label = $label;
        $this->id = $id ?: Str::camel($label);
        $this->list = $list;
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('admin::components.forms.select');
    }
}
