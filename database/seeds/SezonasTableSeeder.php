<?php

include_once 'CsvImporter.php';

use Illuminate\Database\Seeder;

class SezonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $importer_sezona = new CsvImporter(app_path().'/../database/seeds/csv/sezone.csv',true,';');
        while ($data = $importer_sezona->get(2000)) {
          $csvTable = 'sezonas';
          DB::table($csvTable)->insert($data);
        }
    }

    
}
