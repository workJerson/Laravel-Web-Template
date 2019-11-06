<?php

use Illuminate\Database\Seeder;
use App\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = json_decode(file_get_contents(app_path().'/Support/cities.json'));
        foreach ($data->data->provinces as $key => $value) {
            City::updateOrCreate([
                'id' => $value->id,
                'psgcCode' => $value->psgcCode,
                'citymunDesc' => $value->citymunDesc,
                'regDesc' => $value->regDesc,
                'provCode' => $value->provCode,
                'citymunCode' => $value->citymunCode,
            ]);
        }
    }
}
