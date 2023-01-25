<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Rules\OldPasswordCheck;
use Livewire\Component;

class UpdateUserPassword extends Component
{
    public User $user;
    public string $current_password;
    public string $new_password;
    public string $password_confirmation;

    public $messages = [
        'current_password.required' => 'This field is required.',
        'new_password.required' => 'This field is required.',
        'password_confirmation.required' => 'This field is required.',
    ];

    protected function rules(): array
    {
        return [
            'current_password' => ['required', 'min:8', new OldPasswordCheck],
            'new_password' => 'required|min:8|same:password_confirmation',
            'password_confirmation' => 'required|min:8|same:new_password',
        ];
    }

    public function mount()
    {
        $this->user = auth()->user();
        $this->current_password = '';
        $this->new_password = '';
        $this->password_confirmation = '';
    }

    public function updateUserPassword($propertyName)
    {
        $this->validateOnly($propertyName);

        if (UpdateUserPassword::run($this->user, $this->validate())) {
            session()->flash('success', 'Password successfully updated !');
        } else {
            session()->flash('error', 'An error Ocurred.');
        }
    }

    public function render()
    {
        return view('livewire.update-user-password');
    }
}
