<?php

namespace App\View\Components\Ui\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public string $classes;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type = 'button',
        public string $variant = 'primary',
        public string $size = 'md',
        public string $as = 'button',
    ) {
        $this->getClasses();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.button.button');
    }

    /**
     *  Generate default classes of the component.
     */
    private function getClasses()
    {
        $this->classes = match ($this->variant) {
            'primary' => 'btn btn-primary ',
            'secondary' => 'btn btn-secondary ',
            'success' => 'btn btn-success ',
            'danger' => 'btn btn-danger ',
            'warning' => 'btn btn-warning ',
            'info' => 'btn btn-info ',
            'dark' => 'btn btn-dark ',
            default => 'btn btn-primary ',
        };

        $this->classes .= match ($this->size) {
            'sm' => ' btn-sm',
            'lg' => ' btn-lg',
            default => '',
        };
    }
}
