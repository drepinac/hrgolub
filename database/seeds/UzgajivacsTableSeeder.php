<?php

include_once 'CsvImporter.php';

use Illuminate\Database\Seeder;

class UzgajivacsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $importer = new CsvImporter(app_path().'/../database/seeds/csv/uzgajivaci.csv',true,';');
        while ($data = $importer->get(2000)) {
          $csvTable = 'uzgajivacs';
          DB::table($csvTable)->insert($data);
        }

    }
}
