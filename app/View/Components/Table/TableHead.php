<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class TableHead extends Component
{
    public $isAdmin;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.table-head');
    }
}
