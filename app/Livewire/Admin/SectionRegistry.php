<?php

namespace App\Livewire\Admin;

class SectionRegistry
{
    public static function cards(): array
    {
        return [
            ['key' => 'navigation', 'title' => 'Header / Navigation', 'description' => 'Header page links and consultation button.', 'badge' => 'Header', 'group' => 'Frontend Page Order'],
            ['key' => 'hero', 'title' => 'Hero', 'description' => 'Badge, headline, CTA buttons, stat card, hero image.', 'badge' => 'Home', 'group' => 'Frontend Page Order'],
            ['key' => 'clients', 'title' => 'Clients', 'description' => 'Manage marquee client names shown near the top.', 'badge' => 'Clients', 'group' => 'Frontend Page Order'],
            ['key' => 'reels', 'title' => 'Viral Work', 'description' => 'Instagram work cards, views, URLs, and images.', 'badge' => 'Work', 'group' => 'Frontend Page Order'],
            ['key' => 'about', 'title' => 'About', 'description' => 'Agency introduction card and main positioning copy.', 'badge' => 'About', 'group' => 'Frontend Page Order'],
            ['key' => 'services', 'title' => 'Services', 'description' => 'Service cards, icons, colors, copy, and optional images.', 'badge' => 'Services', 'group' => 'Frontend Page Order'],
            ['key' => 'vision', 'title' => 'Vision', 'description' => 'Vision panel content in the strategy section.', 'badge' => 'Vision', 'group' => 'Frontend Page Order'],
            ['key' => 'strategies', 'title' => 'Strategies', 'description' => 'Numbered strategic pillars and descriptions.', 'badge' => 'Strategy', 'group' => 'Frontend Page Order'],
            ['key' => 'brand', 'title' => 'Contact Details', 'description' => 'Logo, phone, email, address, social links, WhatsApp.', 'badge' => 'Contact', 'group' => 'Frontend Page Order'],
            ['key' => 'location', 'title' => 'Location', 'description' => 'Address section title, description, and map/image.', 'badge' => 'Map', 'group' => 'Frontend Page Order'],
            ['key' => 'faqs', 'title' => 'FAQs', 'description' => 'Questions and answers shown before the footer.', 'badge' => 'FAQ', 'group' => 'Frontend Page Order'],
            ['key' => 'footer', 'title' => 'Footer', 'description' => 'Footer description, links, and footer contact details.', 'badge' => 'Footer', 'group' => 'Frontend Page Order'],
            ['key' => 'section_titles', 'title' => 'Section Headings', 'description' => 'Shared headings and supporting copy used across homepage bands.', 'badge' => 'Copy', 'group' => 'Site Settings'],
        ];
    }

    public static function keys(): array
    {
        return array_column(self::cards(), 'key');
    }

    public static function find(string $key): ?array
    {
        foreach (self::cards() as $card) {
            if ($card['key'] === $key) {
                return $card;
            }
        }

        return null;
    }
}
