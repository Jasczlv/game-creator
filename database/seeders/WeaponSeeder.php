<?php

namespace Database\Seeders;

use App\Models\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('weapons')->truncate();
        //
        $data = $this->getCSVData(__DIR__ . '/items.csv');
        foreach ($data as $index => $row) {

            if ($index !== 0) {
                $weapon = new Weapon();

                $weapon->name = $row[0];
                $weapon->slug = $row[1];
                $weapon->type = $row[2];
                $weapon->category = $row[3];
                $weapon->weight = $row[4];
                $weapon->cost = $row[5];
                $weapon->damage_dice = $row[6];



                $weapon->save();
            }
        }
    }
    public function getCSVData(string $path)
    {
        // conterrà tutte le righe che leggiamo dal file CSV
        $data = [];

        $file_stream = fopen($path, 'r');

        if ($file_stream === false) {
            exit('Cannot open the file ' . $path);
        }

        while (($row = fgetcsv($file_stream)) !== false) {
            $data[] = $row;
        }

        fclose($file_stream);

        // ritornaimo le righe
        return $data;
    }
}
