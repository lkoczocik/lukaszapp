<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Field extends Component
{
    public $field;
    public $label;
    public $type;
    public $hint;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($field = null, $label = null, $type = 'text', $hint = null)
    {
        $this->field = $field;
        $this->label = $label;
        $this->type = $type;
        $this->hint = $hint;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.field');
    }
}
