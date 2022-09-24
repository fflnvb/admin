<?php

namespace fflnvb\admin\View\Components\Menu\Sidebar;

use Illuminate\View\Component;
use Illuminate\Support\Str;


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
        $this->active = $this->isCurrentRoute($this->subitem);
    }

    /**
     * Check if route and alias of given item is current route
     *
     * @return bool
     */
    public function isCurrentRoute($item)
    {
        $isCurrentRoute = false;

        // Check direct match
        if(request()->routeIs($item['route'])) {
            $isCurrentRoute = true;
        }
        // Check alias match
        if(isset($item['alias'])) {
            if(is_string($item['alias'])) {
                $item['alias'] = [$item['alias']];
            }
            foreach ($item['alias'] as $alias) {
                if(request()->routeIs($alias)) {
                    $isCurrentRoute = true;
                }
            }
        }
        // Check subitem for Resource Controllers being references
        if(isset($item['resource']) && $item['resource']) {
            $subRoute = Str::beforeLast($item['route'], '.');
            $isCurrentRoute = Str::contains(request()->route()->getName(), $subRoute);
        }

        return $isCurrentRoute;
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
