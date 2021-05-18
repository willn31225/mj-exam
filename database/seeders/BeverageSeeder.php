<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\MOdels\Beverage;

class BeverageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beverages = [
            [
                'name' => 'Monster Ultra Sunrise',
                'caffeine_level' => 75
            ],
            [
                'name' => 'Black Coffee',
                'caffeine_level' => 95
            ],
            [
                'name' => 'Americano',
                'caffeine_level' => 77
            ],
            [
                'name' => 'Sugar free NOS',
                'caffeine_level' => 130
            ],
            [
                'name' => '5 Hour Energy',
                'caffeine_level' => 200
            ],
        ];

        foreach ($beverages as $beverage) {
            Beverage::create($beverage);
        }
    }
}
