<?php

namespace App\View\Components\dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonLinkWithIcon extends Component
{
    public $href;
    public $text;
    public $icon;

    public function __construct($href, $text, $icon)
    {
        $this->href = $href;
        $this->text = $text;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('dashboard.components.button-link-with-icon');
    }
}
