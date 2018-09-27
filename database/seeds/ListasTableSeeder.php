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
        $brojac = 0;
        $importer = new CsvImporter(app_path().'/../database/seeds/csv/liste1993.csv',true,';');
        while ($data = $importer->get(1)) {
          $csvTable = 'listas';
          DB::table($csvTable)->insert($data);
//          $brojac++;
//          echo $brojac.'<br>';
        }
    }
}
