<?php

namespace fflnvb\admin\View\Components\Forms;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Checkbox extends Component
{
    /**
     * The input name.
     *
     * @var string
     */
    public $name;

    /**
     * The input label.
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
     * The input value.
     *
     * @var string
     */
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $value='', $id='')
    {
        $this->name = $name;
        $this->label = $label;
        $this->id = $id ?: Str::camel($label);
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('admin::components.forms.checkbox');
    }
}
