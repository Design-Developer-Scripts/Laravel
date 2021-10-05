<?php

namespace App\View\Components\dashboard\form;

use Illuminate\View\Component;

class image extends Component
{
    public $photo;
    public $input;
    public $title;
    public $width;
    public $height;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $photo, string $input, string $title, string $width, string $height)
    {
       $this->photo = $photo;
       $this->input = $input;
       $this->title = $title;
       $this->width = $width;
       $this->height = $height;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.form.image');
    }
}
