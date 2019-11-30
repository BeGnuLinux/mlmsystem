<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
          'name' => 'Egypt',
          'continent_id' => 2,
          'lang' => 'en-us'
        ]);
        Country::create([
          'name' => 'Jordan',
          'continent_id' => 1,
          'lang' => 'en-us'
        ]);
        Country::create([
          'name' => 'Morocco',
          'continent_id' => 2,
          'lang' => 'en-us'
        ]);
        Country::create([
          'name' => 'Tunisia',
          'continent_id' => 2,
          'lang' => 'en-us'
        ]);
        Country::create([
          'name' => 'Turkey',
          'continent_id' => 3,
          'lang' => 'en-us'
        ]);
        Country::create([
          'name' => 'United Arab Emirates',
          'continent_id' => 1,
          'lang' => 'en-us'
        ]);
        Country::create([
          'name' => 'Jerusalem',
          'continent_id' => 1,
          'lang' => 'en-us'
        ]);
    }
}
