<?php

namespace fflnvb\admin\View\Components\Menu;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Config;

class Sidebar extends Component
{
    /**
     * The sidebar config.
     *
     * @var array
     */
    public $config;

    public function __construct()
    {
        $this->config = Config::get('admin.menus.sidebar');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('admin::components.menu.sidebar');
    }
}
