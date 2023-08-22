<?php

namespace App\View\Components\Table;

use Illuminate\View\Component;

class TableRowItem extends Component
{
    public $url, $isAdmin;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url, $isAdmin)
    {
        $this->isAdmin = $isAdmin;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.table-row-item');
    }
}
