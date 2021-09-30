<?php

namespace App\View\Components\element;

use Illuminate\View\Component;

class doubleClickToDelete extends Component
{
    public $itemID;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $itemID){
        $this->itemID = $itemID;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.element.double-click-to-delete');
    }
}
