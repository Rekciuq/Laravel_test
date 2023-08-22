<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class FormInput extends Component
{
    public $nameOfInput;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nameOfInput)
    {
        $this->nameOfInput = $nameOfInput;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.form-input');
    }
}
