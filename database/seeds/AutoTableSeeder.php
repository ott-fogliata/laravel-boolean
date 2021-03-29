<?php

use Illuminate\Database\Seeder;
use App\Auto;
use Faker\Generator as Faker;


class AutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $auto = new Auto();
            $auto->model_name = $faker->name();
            $auto->cubic_capacity = rand(1200, 2000);
            $auto->max_speed = rand(160, 250);
            $auto->pic = 'https://www.allaguida.it/wp-content/uploads/xFord-Focus-ST-Blood-Type-Racing.jpg.pagespeed.ic.kPi3Ce7gMn.webp';
            $auto->price = rand(1000, 10000);
            $auto->save();
        }
    }
}
