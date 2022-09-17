<?php

namespace App\Http\Livewire\Shoes;

use Livewire\Component;
use App\Models\Shoe;
class Delete extends Component
{

    public $shoeId;
    public function getShoeProperty() {
        return Shoe::select('id', 'brand', 'size', 'price', 'color')
            ->find($this->shoeId);
    }

    public function delete() {
        $this->shoe->delete();

        return redirect('/shoe')->with('message', 'Deleted Successfully');
    }

    public function back() {
        return redirect('/shoe');
    }
    public function render()
    {
        return view('livewire.shoes.delete');
    }
}
