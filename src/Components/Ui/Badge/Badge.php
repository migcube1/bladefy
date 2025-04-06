<?php

namespace App\View\Components\Ui\Badge;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Badge extends Component
{
    public string $classes;

    /**
     * Create a new component instance.
     */
    public function __construct(public string $variant = '', public bool $pill = true)
    {
        $this->getClasses();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.badge.badge');
    }

    /**
     *  Generate default classes of the component.
     */
    private function getClasses()
    {
        $this->classes = match ($this->variant) {
            'primary' => 'badge text-bg-primary ',
            'secondary' => 'badge text-bg-secondary ',
            'success' => 'badge text-bg-success ',
            'danger' => 'badge text-bg-danger ',
            'warning' => 'badge text-bg-warning ',
            'info' => 'badge text-bg-info ',
            'light' => 'badge text-bg-light ',
            'dark' => 'badge text-bg-dark ',
            default => 'badge text-bg-primary ',
        };

        $this->classes .= match ($this->pill) {
            true => 'rounded-pill ',
            default => '',
        };
    }
}
