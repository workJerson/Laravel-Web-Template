<?php

use App\Region;
use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode(file_get_contents(app_path() . '/Support/regions.json'));
        foreach ($data->data->regions as $key => $value) {
            Region::updateOrCreate([
                'id' => $value->id,
                'psgcCode' => $value->psgcCode,
                'regDesc' => $value->regDesc,
                'regCode' => $value->regCode,
            ]);
        }
    }
}
