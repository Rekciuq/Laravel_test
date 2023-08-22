<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class TableBody extends Component
{ public $urls, $isAdmin;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($urls, $isAdmin)
    {
        $this->isAdmin = $isAdmin;
        $this->urls = $urls;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.table-body');
    }
}
