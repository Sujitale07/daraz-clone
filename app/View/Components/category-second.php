<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class category-second extends Component
{
    /**
     * Create a new component instance.
     */

     protected $banner;
    public function __construct($banner)
    {
        //
        $this->banner = $banner
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-second');
    }
}
