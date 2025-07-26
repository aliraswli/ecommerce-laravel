<?php

namespace App\View\Components\dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionHeading extends Component
{
    public $icon;
    public $title;
    public $subtitle;

    public function __construct($icon, $title, $subtitle)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->subtitle = $subtitle;
    }

    public function render(): View|Closure|string
    {
        return view('dashboard.components.section-heading');
    }
}
