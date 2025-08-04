<?php

namespace App\View\Components\Dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionHeader extends Component
{

    public string $href;
    public ?string $icon;
    public string $title;
    public string $subtitle;
    public ?string $prevClass;
    public ?string $nextClass;

    public function __construct(string $href, ?string $icon, string $title, string $subtitle, ?string $prevClass, ?string $nextClass)
    {
        $this->href = $href;
        $this->icon = $icon;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->prevClass = $prevClass;
        $this->nextClass = $nextClass;
    }

    public function render(): View|Closure|string
    {
        return view('components.dashboard.section-header');
    }
}
