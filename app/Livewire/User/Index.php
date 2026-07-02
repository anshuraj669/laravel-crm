<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;


#[Layout('layouts.app')]
class Index extends Component
{
    use WithPagination;
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.user.index', [
            'users'=> User::where('role', '!=', 'admin')->paginate(10),
        ]);
    }
}
