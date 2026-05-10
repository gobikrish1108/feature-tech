<?php

namespace Database\Seeders;

use App\Models\PageSetting;
use App\Support\MarketingDefaults;
use Illuminate\Database\Seeder;

class PageSettingSeeder extends Seeder
{
    public function run(): void
    {
        foreach (MarketingDefaults::all() as $key => $value) {
            PageSetting::query()->firstOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
