<?php

namespace App\View\Components;

use Illuminate\View\Component;

class modal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $key;
    public $name;
    public $type;
    public $price;
    public $description;
    public $block;
    public $floor;
    public $available;
    public function __construct($key,$name,$type,$price,$description,$block,$floor,$available)
    {
        $this->key = $key;
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->description = $description;
        $this->block = $block;
        $this->floor = $floor;
        $this->available = $available;


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
