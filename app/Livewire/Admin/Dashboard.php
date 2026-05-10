<?php

namespace App\Livewire\Admin;

use App\Models\PageSetting;
use Livewire\Component;

class Dashboard extends Component
{
    public array $cards = [];

    public function mount(): void
    {
        $this->cards = SectionRegistry::cards();
    }

    public function logout()
    {
        session()->forget(['admin_authenticated', 'admin_email']);
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public function render()
    {
        return view('livewire.admin.dashboard', [
            'settingCount' => PageSetting::query()->count(),
        ])->layout('components.layouts.admin');
    }
}
