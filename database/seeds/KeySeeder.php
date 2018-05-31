<?php

use Illuminate\Database\Seeder;
use App\Setting;

class KeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create(['key' => 'name']);
        Setting::create(['key' => 'code']);
        Setting::create(['key' => 'vat_code']);
        Setting::create(['key' => 'address']);
        Setting::create(['key' => 'city']);
        Setting::create(['key' => 'bank_info']);
    }
}
