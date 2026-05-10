<?php

namespace App\Livewire\Admin;

use App\Models\PageSetting;
use App\Support\MarketingDefaults;
use App\Support\MarketingImage;
use Livewire\Component;
use Livewire\WithFileUploads;

class PageEditor extends Component
{
    use WithFileUploads;

    public array $brand = [];
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

    public $logoUpload;
    public $heroImageUpload;
    public $locationImageUpload;
    public array $serviceUploads = [];
    public array $reelUploads = [];

    public string $status = '';

    public function mount(): void
    {
        foreach (MarketingDefaults::all() as $key => $default) {
            $this->{str($key)->camel()->toString()} = PageSetting::getValue($key, $default);
        }
    }

    public function addClient(): void
    {
        $this->clients[] = 'New Client';
    }

    public function removeClient(int $index): void
    {
        array_splice($this->clients, $index, 1);
    }

    public function addService(): void
    {
        $this->services[] = ['title' => 'New Service', 'icon' => 'megaphone', 'color' => 'blue', 'copy' => '', 'image' => null];
    }

    public function removeService(int $index): void
    {
        app(MarketingImage::class)->delete($this->services[$index]['image'] ?? null);
        array_splice($this->services, $index, 1);
    }

    public function addReel(): void
    {
        $this->reels[] = ['image' => 'images/sample/01.jpg', 'views' => '0', 'url' => '#'];
    }

    public function removeReel(int $index): void
    {
        app(MarketingImage::class)->delete($this->reels[$index]['image'] ?? null);
        array_splice($this->reels, $index, 1);
    }

    public function addStrategy(): void
    {
        $this->strategies[] = ['number' => str_pad((string) (count($this->strategies) + 1), 2, '0', STR_PAD_LEFT), 'title' => 'New Strategy', 'copy' => ''];
    }

    public function removeStrategy(int $index): void
    {
        array_splice($this->strategies, $index, 1);
    }

    public function addFaq(): void
    {
        $this->faqs[] = ['q' => 'New question?', 'a' => 'Answer text'];
    }

    public function removeFaq(int $index): void
    {
        array_splice($this->faqs, $index, 1);
    }

    public function save(MarketingImage $images): void
    {
        $this->validate([
            'logoUpload' => ['nullable', 'image', 'max:100'],
            'heroImageUpload' => ['nullable', 'image', 'max:300'],
            'locationImageUpload' => ['nullable', 'image', 'max:300'],
            'serviceUploads.*' => ['nullable', 'image', 'max:300'],
            'reelUploads.*' => ['nullable', 'image', 'max:300'],
        ]);

        if ($this->logoUpload) {
            $this->brand['logo'] = $images->replace($this->logoUpload, $this->brand['logo'] ?? null, 'marketing/logos', 80, 500);
        }

        if ($this->heroImageUpload) {
            $this->hero['image'] = $images->replace($this->heroImageUpload, $this->hero['image'] ?? null, 'marketing/images', 280, 1400);
        }

        if ($this->locationImageUpload) {
            $this->location['image'] = $images->replace($this->locationImageUpload, $this->location['image'] ?? null, 'marketing/images', 280, 1400);
        }

        foreach ($this->serviceUploads as $index => $upload) {
            if ($upload) {
                $this->services[$index]['image'] = $images->replace($upload, $this->services[$index]['image'] ?? null, 'marketing/images', 280, 900);
            }
        }

        foreach ($this->reelUploads as $index => $upload) {
            if ($upload) {
                $this->reels[$index]['image'] = $images->replace($upload, $this->reels[$index]['image'] ?? null, 'marketing/images', 280, 900);
            }
        }

        foreach ($this->payload() as $key => $value) {
            PageSetting::putValue($key, $value);
        }

        $this->reset('logoUpload', 'heroImageUpload', 'locationImageUpload', 'serviceUploads', 'reelUploads');
        $this->status = 'Saved successfully.';
    }

    private function payload(): array
    {
        return [
            'brand' => $this->brand,
            'hero' => $this->hero,
            'about' => $this->about,
            'section_titles' => $this->sectionTitles,
            'clients' => array_values($this->clients),
            'reels' => array_values($this->reels),
            'services' => array_values($this->services),
            'vision' => $this->vision,
            'strategies' => array_values($this->strategies),
            'location' => $this->location,
            'faqs' => array_values($this->faqs),
            'footer' => $this->footer,
        ];
    }

    public function render()
    {
        return view('livewire.admin.page-editor')->layout('components.layouts.admin');
    }
}
