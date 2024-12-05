<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;

class AddPayment extends ModalComponent
{
    public function render()
    {
        return view('livewire.add-payment');
    }
}
