<?php

namespace fflnvb\admin\View\Components\Menu\Sidebar;

use Illuminate\View\Component;


class Subitem extends Component
{
    /**
     * The sidebar menu subitem.
     *
     * @var string
     */
    public $subitem;

    /**
     * The checking if menu item should be declared as active.
     *
     * @var string
     */
    public $active;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($subitem)
    {
        $this->subitem = $subitem;
        $this->active = false;
        // Check if route qualifies subitem to be displayed as active
        if(request()->routeIs($subitem['route'])) {
            $this->active = true;
        }
        if(is_string($subitem['alias'])) {
            $subitem['alias'] = [$subitem['alias']];
        }
        foreach ($subitem['alias'] as $alias) {
            if(request()->routeIs($alias)) {
                $this->active = true;
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('admin::components.menu.sidebar.subitem');
    }
}
