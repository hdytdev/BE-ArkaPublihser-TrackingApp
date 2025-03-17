<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppLayout extends Component
{
    public $pageTitle;
    public $title;
    /**
     * Create a new component instance.
     */
    public function __construct(string $pageTitle = null, string $title = null)
    {
        $this->title = $title ? $title . " " . config('app.name') : config('app.name');
        $this->pageTitle = $pageTitle;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.app');
    }
}
