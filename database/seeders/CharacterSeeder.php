<?php

namespace Database\Seeders;

use App\Models\Character;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //

        for ($i = 0; $i < 10; $i++) {

            $new_character = new Character();


            $new_character->name = $faker->name();
            $new_character->description = $faker->text();
            $new_character->attack = $faker->numberBetween(1, 40);
            $new_character->defence = $faker->numberBetween(1, 40);
            $new_character->speed = $faker->numberBetween(1, 40);
            $new_character->life = $faker->numberBetween(1, 40);

            $new_character->save();
        }
    }
}
