<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextArea extends Component
{
    public $name,$title,$type,$value,$rows;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name="textarea",$title="Textarea Title",$type="text",$value=null,$rows=5)
    {
        $this->name = $name;
        $this->title = $title;
        $this->type = $type;
        $this->value = $value;
        $this->rows = $rows;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.text-area');
    }
}
