<?php

namespace App\Http\Livewire\Shoes;

use Livewire\Component;
use App\Models\Shoe;

class Create extends Component
{
    public $brand, $size, $price, $color;

    public function addShoe() {
        $this->validate([
            'brand'           =>          ['required', 'string', 'max:255'],
            'size'            =>          ['required', 'string', 'max:255'],
            'price'           =>          ['required', 'string', 'max:255'],
            'color'           =>          ['required', 'string', 'max:255'],
        ]);

        Shoe::create([
            'brand'           =>      $this->brand,
            'size'            =>      $this->size,
            'price'           =>      $this->price,
            'color'           =>      $this->color,
        ]);

        return redirect('/shoe')->with('shoe', 'Added Successfully');
    }

   


    public function render()
    {
        return view('livewire.shoes.create');
    }
}
