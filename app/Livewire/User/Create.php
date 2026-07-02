<?php

namespace App\Livewire\User;

use App\Models\Department;
use App\Models\Designation;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Create extends Component
{
    // Form input (the user's selections)
    public $name = '';
    public $email = '';
    public $phone = '';
    public $role = '';
    public $department = null;
    public $designation = null;
    public $joining_date = '';

    // Dropdown options
    public $roles = ['admin', 'manager', 'staff'];
    public $departments = [];
    public $designations = [];

    public function mount(): void
    {
        $this->departments = Department::orderBy('name')->get();
        $this->designations = Designation::orderBy('name')->get();
    }

    protected function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'nullable|string|max:255',
            'role' => 'required|in:admin,manager,staff',
            'department' => 'required|exists:department,id',
            'designation' => 'required|exists:designation,id',
            'joining_date' => 'required|date',
        ];
    }

    public function save()
    {
        $validated = $this->validate();

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'role' => $validated['role'],
            'department_id' => $validated['department'],
            'designation_id' => $validated['designation'],
            'joining_date' => $validated['joining_date'],
            'password' => Hash::make(Str::random(16)),
        ]);

        session()->flash('status', 'User created successfully.');

        return $this->redirect(Index::class, navigate: true);
    }

    /**
     * @return Factory|View|\Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.user.create');
    }
}
