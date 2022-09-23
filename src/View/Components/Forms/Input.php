<?php

namespace fflnvb\admin\View\Components\Forms;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Input extends Component
{
    /**
     * The input name.
     *
     * @var string
     */
    public $name;

    /**
     * The input type.
     *
     * @var string
     */
    public $type;

    /**
     * Indicating wether Input is mandatory
     *
     * @var bool
     */
    public $mandatory;

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
     * The input placeholder.
     *
     * @var string
     */
    public $placeholder;

    /**
     * The input value.
     *
     * @var string
     */
    public $value;

    /**
     * The input currency unit.
     *
     * @var string
     */
    public $currency;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $placeholder='', $value='', $id='', $type='input', $mandatory=false, $currency = 'USD')
    {
        $this->name = $name;
        $this->type = $type;
        $this->mandatory = $mandatory;
        $this->label = $label;
        $this->id = $id ?: Str::camel($label);
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->currency = $currency;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('admin::components.forms.input');
    }
}
