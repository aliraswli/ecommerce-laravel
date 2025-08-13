<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Diglactic\Breadcrumbs\Breadcrumbs;

class Breadcrumb extends Component
{
    /**
     * The breadcrumb route name.
     */
    public string $route;

    /**
     * Create a new component instance.
     */
    public function __construct(string $route)
    {
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $breadcrumbs = Breadcrumbs::generate($this->route);

        return view('components.breadcrumb', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
