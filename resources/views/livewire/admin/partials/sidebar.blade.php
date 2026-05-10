<aside class="admin-sidebar">
    <div class="admin-sidebar-brand">
        <span>UN</span>
        <div>
            <strong>Admin Panel</strong>
            <small>Website CMS</small>
        </div>
    </div>

    <nav class="admin-sidebar-nav">
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'is-active' : '' }}">
            <span>Dashboard</span>
            <small>Overview</small>
        </a>

        @php($currentGroup = null)
        @foreach (($sections ?? \App\Livewire\Admin\SectionRegistry::cards()) as $item)
            @if (($item['group'] ?? 'Pages') !== $currentGroup)
                @php($currentGroup = $item['group'] ?? 'Pages')
                <div class="admin-sidebar-label">{{ $currentGroup }}</div>
            @endif
            <a href="{{ route('admin.sections.edit', $item['key']) }}" class="{{ ($section ?? '') === $item['key'] ? 'is-active' : '' }}">
                <span>{{ $item['title'] }}</span>
                <small>{{ $item['badge'] }}</small>
            </a>
        @endforeach
    </nav>
</aside>
