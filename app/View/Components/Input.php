<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */


     public $label;
     public $value;
     public $required;
     public $place;
     public $type;
     public $name;



    public function __construct($label, $value, $required, $place, $type, $name)
    {
        $this->label = $label;
        $this->value = $value;
        $this->required = $required;
        $this->place = $place;
        $this->type = $type;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
