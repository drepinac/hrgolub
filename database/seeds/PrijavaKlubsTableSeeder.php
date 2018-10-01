<?php

include_once 'CsvImporter.php';

use Illuminate\Database\Seeder;

class PrijavaKlubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $importer = new CsvImporter(app_path().'/../database/seeds/csv/prijave_klubova.csv',true,';');
        while ($data = $importer->get(2000)) {
          $csvTable = 'prijava_klubs';
          DB::table($csvTable)->insert($data);
        }
    }
}
