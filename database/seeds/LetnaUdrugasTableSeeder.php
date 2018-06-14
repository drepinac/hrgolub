<?php

include_once 'CsvImporter.php';

use Illuminate\Database\Seeder;

class LetnaUdrugasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $importer = new CsvImporter(app_path().'/../database/seeds/csv/letne_udruge.csv',true,';');
        while ($data = $importer->get(2000)) {
          $csvTable = 'letna_udrugas';
          DB::table($csvTable)->insert($data);
        }

    }
}
