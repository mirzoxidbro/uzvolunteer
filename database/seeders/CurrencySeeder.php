<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Currency::create([
            'title' => 'UZS',
            'value' => 2500,
        ]);

        Currency::create([
            'title' => 'EURO',
            'value' => 2500,
        ]);

        Currency::create([
            'title' => 'USD',
            'value' => 2500,
        ]);

        Currency::create([
            'title' => 'RUB',
            'value' => 2500,
        ]);
    }
}
