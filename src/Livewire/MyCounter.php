<?php

namespace Eclipse\ModuleTemplate\Livewire;

use Livewire\Component;

class MyCounter extends Component
{
    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
    public function render()
    {
        return view('module-template::livewire.my-counter');
    }
}
