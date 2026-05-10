<div class="admin-grid">
    @foreach ($data as $key => $value)
        <label>{{ str($key)->replace('_', ' ')->title() }}<textarea wire:model="data.{{ $key }}" rows="3"></textarea></label>
    @endforeach
</div>
