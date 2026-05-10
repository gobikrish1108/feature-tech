<?php

namespace App\Livewire\Admin;

use App\Models\PageSetting;
use App\Support\MarketingDefaults;
use App\Support\MarketingImage;
use Livewire\Component;
use Livewire\WithFileUploads;

class SectionEditor extends Component
{
    use WithFileUploads;

    public string $section;
    public array $meta = [];
    public array $data = [];

    public $logoUpload;
    public $imageUpload;
    public array $itemUploads = [];

    public string $status = '';
    public bool $showEditor = false;

    public function mount(string $section): void
    {
        abort_unless(in_array($section, SectionRegistry::keys(), true), 404);

        $this->section = $section;
        $this->meta = SectionRegistry::find($section);
        $defaults = MarketingDefaults::all();
        $default = $defaults[$section] ?? [];
        $this->data = $this->withDefaults($default, PageSetting::getValue($section, []));
    }

    public function addItem(): void
    {
        $this->data[] = match ($this->section) {
            'clients' => 'New Client',
            'reels' => ['image' => 'images/sample/01.jpg', 'views' => '0', 'url' => '#'],
            'services' => ['title' => 'New Service', 'icon' => 'megaphone', 'color' => 'blue', 'copy' => '', 'image' => null],
            'strategies' => ['number' => str_pad((string) (count($this->data) + 1), 2, '0', STR_PAD_LEFT), 'title' => 'New Strategy', 'copy' => ''],
            'faqs' => ['q' => 'New question?', 'a' => 'Answer text'],
            default => [],
        };
    }

    public function addNestedItem(string $field): void
    {
        $this->data[$field] ??= [];

        $this->data[$field][] = match ($field) {
            'links', 'quick_links' => ['label' => 'New Link', 'url' => '#'],
            'contact_links' => ['label' => 'New Contact', 'value' => '', 'url' => '#'],
            default => [],
        };
    }

    public function removeNestedItem(string $field, int $index): void
    {
        if (! isset($this->data[$field]) || ! is_array($this->data[$field])) {
            return;
        }

        array_splice($this->data[$field], $index, 1);
    }

    public function openEditor(): void
    {
        $this->showEditor = true;
    }

    public function closeEditor(): void
    {
        $this->showEditor = false;
    }

    public function removeItem(int $index): void
    {
        if (in_array($this->section, ['reels', 'services'], true)) {
            app(MarketingImage::class)->delete($this->data[$index]['image'] ?? null);
        }

        array_splice($this->data, $index, 1);
    }

    public function save(MarketingImage $images): void
    {
        $this->validate($this->rules());

        if ($this->section === 'brand' && $this->logoUpload) {
            $this->data['logo'] = $images->replace($this->logoUpload, $this->data['logo'] ?? null, 'marketing/logos', 80, 500);
        }

        if ($this->section === 'hero' && $this->imageUpload) {
            $this->data['image'] = $images->replace($this->imageUpload, $this->data['image'] ?? null, 'marketing/images', 280, 1400);
        }

        if ($this->section === 'location' && $this->imageUpload) {
            $this->data['image'] = $images->replace($this->imageUpload, $this->data['image'] ?? null, 'marketing/images', 280, 1400);
        }

        if (in_array($this->section, ['reels', 'services'], true)) {
            foreach ($this->itemUploads as $index => $upload) {
                if ($upload) {
                    $this->data[$index]['image'] = $images->replace($upload, $this->data[$index]['image'] ?? null, 'marketing/images', 280, 900);
                }
            }
        }

        PageSetting::putValue($this->section, array_is_list($this->data) ? array_values($this->data) : $this->data);

        $this->reset('logoUpload', 'imageUpload', 'itemUploads');
        $this->showEditor = false;
        $this->status = 'Saved '.$this->meta['title'].' successfully.';
    }

    public function logout()
    {
        session()->forget(['admin_authenticated', 'admin_email']);
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    private function rules(): array
    {
        return [
            'logoUpload' => ['nullable', 'image', 'max:100'],
            'imageUpload' => ['nullable', 'image', 'max:300'],
            'itemUploads.*' => ['nullable', 'image', 'max:300'],
        ];
    }

    private function withDefaults(array $default, array $saved): array
    {
        if (array_is_list($default)) {
            return $saved === [] ? $default : $saved;
        }

        return array_replace_recursive($default, $saved);
    }

    public function render()
    {
        return view('livewire.admin.section-editor', [
            'sections' => SectionRegistry::cards(),
        ])->layout('components.layouts.admin');
    }
}
