<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardInfo extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */


     public $bgColor;
     public $cardIcon;
     public $cardTitle;
     public $cardDescription;


    public function __construct($bgColor, $cardIcon, $cardTitle, $cardDescription)
    {
        $this->bgColor = $bgColor;
        $this->cardIcon = $cardIcon;
        $this->cardTitle = $cardTitle;
        $this->cardDescription = $cardDescription;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-info');
    }
}
