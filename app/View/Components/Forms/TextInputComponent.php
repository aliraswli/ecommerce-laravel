<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextInputComponent extends Component
{
    public string $name;
    public ?string $type;
    public ?string $label;
    public ?string $placeholder;
    public ?string $value;
    public bool $required;

    public function __construct(string $name, ?string $type, ?string $label = null, ?string $placeholder = null, ?string $value = null, bool $required = false)
    {
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->required = $required;
    }

    public function render(): View|Closure|string
    {
        return view('components.forms.text-input');
    }
}
