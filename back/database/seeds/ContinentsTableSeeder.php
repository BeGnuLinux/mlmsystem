<?php

use Illuminate\Database\Seeder;
use App\Continent;

class ContinentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Continent::create([
          'name' => 'Asia'
        ]);
        Continent::create([
          'name' => 'Africa'
        ]);
        Continent::create([
          'name' => 'Europe'
        ]);
        Continent::create([
          'name' => 'North America'
        ]);
        Continent::create([
          'name' => 'South America'
        ]);
        Continent::create([
          'name' => 'Australlia'
        ]);
    }
}
