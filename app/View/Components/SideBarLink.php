<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SideBarLink extends Component
{
    public $name,$icon,$link;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name="Page Name",$icon="fa-page",$link="#")
    {
        $this->name = $name;
        $this->icon = $icon;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.side-bar-link');
    }
}
