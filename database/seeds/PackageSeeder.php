<?php

use Illuminate\Database\Seeder;

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
            $package->location=$faker->text(20)->country();
            $package->price=$faker->randomDecimal(2,1,2000);
            $package->duration=$faker->randomDigit();
            $package->colonna_aggiunta=$faker->boolean();
            $package->save();
        }
    }
}
