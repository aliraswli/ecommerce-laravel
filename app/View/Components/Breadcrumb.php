<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Diglactic\Breadcrumbs\Breadcrumbs;

class Breadcrumb extends Component
{
    public string $route;
    public array $params;

    /**
     * Create a new component instance.
     */
    public function __construct(string $route, array $params = [])
    {
        $this->route = $route;
        $this->params = $params;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $breadcrumbs = Breadcrumbs::generate($this->route, ...$this->params);

        return view('components.breadcrumb', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
