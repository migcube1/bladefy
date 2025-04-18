<?php

namespace App\View\Components\Ui\Card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public bool $body = true) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.card.card');
    }
}
