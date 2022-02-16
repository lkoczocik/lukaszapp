<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RadioField extends Component
{
    public $field;
    public $label;
    public $options;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($field = null, $label = null, $options = [])
    {
        $this->field = $field;
        $this->label = $label;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.radio-field');
    }
}
