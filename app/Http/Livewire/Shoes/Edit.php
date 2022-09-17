<?php

namespace App\Http\Livewire\Shoes;
use App\Models\Shoe;
use Livewire\Component;

class Edit extends Component
{

    public $shoeId;
    public $brand, $size, $price, $color;
    public function mount() {
        $this->brand = $this->shoe->brand;
        $this->size = $this->shoe->size;
        $this->price = $this->shoe->price;
        $this->color = $this->shoe->color;

    }

    public function editShoe() {
        $this->validate([
            'brand'           =>          ['required', 'string', 'max:255'],
            'size'            =>          ['required', 'string', 'max:255'],
            'price'           =>          ['required', 'string', 'max:255'],
            'color'           =>          ['required', 'string', 'max:255'],
        ]);

        $this->shoe->update([
            'brand'           =>      $this->brand,
            'size'            =>      $this->size,
            'price'           =>      $this->price,
            'color'           =>      $this->color,
        ]);

        return redirect('/shoe')->with('shoe', 'Updated Successfully');
    }

    public function back() {
        return redirect('/shoe');
    }
    public function getShoeProperty() {
        return Shoe::find($this->shoeId);
    }

    public function render()
    {
        return view('livewire.shoes.edit');
    }
}
