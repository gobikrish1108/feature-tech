<?php

namespace App\Livewire;

use App\Models\PageSetting;
use App\Support\MarketingDefaults;
use Livewire\Component;

class HomePage extends Component
{
    public array $brand = [];
    public array $navigation = [];
    public array $hero = [];
    public array $about = [];
    public array $sectionTitles = [];
    public array $clients = [];
    public array $reels = [];
    public array $services = [];
    public array $vision = [];
    public array $strategies = [];
    public array $location = [];
    public array $faqs = [];
    public array $footer = [];

    public function mount(): void
    {
        foreach (MarketingDefaults::all() as $key => $default) {
            $this->{str($key)->camel()->toString()} = $this->withDefaults($default, PageSetting::getValue($key, []));
        }
    }

    private function withDefaults(array $default, array $saved): array
    {
        if (array_is_list($default)) {
            return $saved === [] ? $default : $saved;
        }

        return array_replace_recursive($default, $saved);
    }

    public function mediaUrl(?string $path): string
    {
        return $path ? asset($path) : '';
    }

    public function render()
    {
        return view('livewire.home-page')->layout('components.layouts.marketing');
    }
}
