<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Login extends Component
{
    public string $email = '';
    public string $password = '';

    public function login()
    {
        $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if ($this->email !== 'admin@admin.com' || $this->password !== '12341234') {
            $this->addError('email', 'Invalid admin credentials.');

            return null;
        }

        session()->regenerate();
        session(['admin_authenticated' => true, 'admin_email' => $this->email]);

        return redirect()->route('admin.dashboard');
    }

    public function render()
    {
        return view('livewire.admin.login')->layout('components.layouts.admin-auth');
    }
}
