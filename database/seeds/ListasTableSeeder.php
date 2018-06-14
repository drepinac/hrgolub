<?php

include_once 'CsvImporter.php';

use Illuminate\Database\Seeder;

class ListasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $importer = new CsvImporter(app_path().'/../database/seeds/csv/liste.csv',true,';');
        while ($data = $importer->get(500)) {
          $csvTable = 'listas';
          DB::table($csvTable)->insert($data);
        }
    }
}
