<?php

namespace App\View\Components\ui;

use Illuminate\View\Component;

class metricsDashboard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $icon;
    public $title;
    public $value;
    public $footer;

    public function __construct($icon,$title,$value,$footer=null)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->value = $value;
        $this->footer = $footer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui.metrics-dashboard');
    }
}
