<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Type;
use App\Models\Weapon;
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
        $weapon_ids = Weapon::all()->pluck('id')->all();

        $type_ids = Type::all()->pluck('id')->all();



        for ($i = 0; $i < 10; $i++) {

            $new_character = new Character();


            $new_character->name = $faker->name();
            $new_character->description = $faker->text();
            $new_character->attack = $faker->numberBetween(1, 40);
            $new_character->defence = $faker->numberBetween(1, 40);
            $new_character->speed = $faker->numberBetween(1, 40);
            $new_character->life = $faker->numberBetween(1, 40);
            $new_character->type_id = $faker->randomElement($type_ids);


            $new_character->save();

            $random_weapon_ids = $faker->optional()->randomElements($weapon_ids, 3);
            $new_character->weapons()->attach($random_weapon_ids);
        }
    }
}
