@props(['name'])
<svg viewBox="0 0 24 24" class="size-8" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    @switch($name)
        @case('megaphone') <path d="m3 11 18-5v12L3 13v-2Z"/><path d="M11.6 16.8 13 21H9l-1.4-5"/> @break
        @case('code') <path d="m8 9-3 3 3 3"/><path d="m16 9 3 3-3 3"/><path d="M13 7h-2l-1 10h2l1-10Z"/> @break
        @case('target') <circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1"/> @break
        @case('chart') <path d="M4 19V5"/><path d="M4 19h16"/><path d="m7 15 4-4 3 3 5-7"/> @break
        @case('users') <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/> @break
        @case('bot') <rect x="5" y="8" width="14" height="10" rx="2"/><path d="M12 8V4"/><path d="M8 12h.01"/><path d="M16 12h.01"/><path d="M9 16h6"/> @break
        @default <path d="M12 20h9"/><path d="m16.5 3.5 4 4L7 21H3v-4L16.5 3.5Z"/>
    @endswitch
</svg>
