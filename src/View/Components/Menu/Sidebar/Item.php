<?php

namespace fflnvb\admin\View\Components\Menu\Sidebar;

use Illuminate\View\Component;
use Illuminate\Support\Str;


class Item extends Component
{
    /**
     * The sidebar menu item.
     *
     * @var string
     */
    public $item;

    /**
     * The checking if menu item should be declared as active.
     *
     * @var string
     */
    public $active;

    /**
     * The checking if subitems should be visible.
     *
     * @var string
     */
    public $extended;

    /**
     * Badge content.
     *
     * @var string
     */
    public $badge;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($item)
    {
        $this->item = $item;
        $this->active = $this->isCurrentRoute([$item]);
        $this->extended = !isset($item['subitems']) ?: ($this->isCurrentRoute($item['subitems']) || $this->active);
        if(isset($item['badge'])){
            $controller = 'App\Models\\' . $item['badge'];
            $this->badge = $controller::getBadgeContent();
        }
    }

    /**
     * Check if route and alias of given item is current route
     *
     * @return bool
     */
    public function isCurrentRoute($items)
    {
        $isCurrentRoute = false;
        foreach($items as $item) {
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
        return view('admin::components.menu.sidebar.item');
    }
}
