<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddNewShoppingList extends Component
{
    public int $newProductAmount = 1;
    public string $newProductUnit = "Piece";
    public string $newProductName = "";

    public array $addedProducts = [];

    public function render()
    {
        return view('livewire.add-new-shopping-list');
    }

    public function addProduct()
    {
        $this->addedProducts[] = [
            'amount' => $this->newProductAmount,
            'unit' => $this->newProductUnit,
            'name' => $this->newProductName,
            'checked' => false,
        ];

        $this->newProductAmount = 1;
        $this->newProductUnit = "Piece";
        $this->newProductName = "";
    }
}
