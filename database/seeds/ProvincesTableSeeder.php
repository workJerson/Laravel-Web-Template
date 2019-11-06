<?php

use Illuminate\Database\Seeder;
use App\Province;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = json_decode(file_get_contents(app_path().'/Support/provinces.json'));
        foreach ($data->data->provinces as $key => $value) {
            Province::updateOrCreate([
                'id' => $value->id,
                'psgcCode' => $value->psgcCode,
                'provDesc' => $value->provDesc,
                'regCode' => $value->regCode,
                'provCode' => $value->provCode,
            ]);
        }
    }
}
