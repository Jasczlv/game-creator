<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types_array = ['Barbarian', 'Bard', 'Artificer', 'Cleric', 'Druid', 'Fighter', 'Warrior'];

        $n = 0;

        foreach ($types_array as $type) {
            $new_type = new Type();

            $new_type->name = $types_array[$n];
            $n++;
            $new_type->description = $faker->sentence(10);

            $new_type->save();
        }
    }
}
