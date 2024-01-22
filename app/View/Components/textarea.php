<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class textarea extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $label="",
        public string $id,
        public string $name,
        public int $cols = 12,
        public int $rows = 12,
        public string $value ='',
        public string $placeholder =''
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.textarea');
    }
}
