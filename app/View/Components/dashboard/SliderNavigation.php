<?php

namespace App\View\Components\dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SliderNavigation extends Component
{
    public $prevClass;
    public $nextClass;

    /**
     * Create a new component instance.
     */
    public function __construct($prevClass, $nextClass)
    {
        $this->prevClass = $prevClass;
        $this->nextClass = $nextClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('dashboard.components.slider-navigation');
    }
}
