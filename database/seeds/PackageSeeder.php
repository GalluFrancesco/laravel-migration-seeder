<?php

use App\Package;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0 ; $i < 10 ; $i++ ) { 
            $package=new Package();
            $package->name=$faker->text(20);
            $package->description=$faker->paragraph();
            $package->location=$faker->text(20);
            $package->price=$faker->randomFloat(2,1,2000);
            $package->duration=$faker->randomDigit();
            $package->save();
        }
    }
}
