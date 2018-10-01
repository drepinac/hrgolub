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
//        $brojac = 0;
//        $importer = new CsvImporter(app_path().'/../database/seeds/csv/liste.csv',true,';');
//        while ($data = $importer->get(1)) {
          $csvTable = 'listas';
//          DB::table($csvTable)->insert($data);
//          
          DB::statement('LOAD DATA LOCAL INFILE "/../database/seeds/csv/liste.csv" INTO TABLE hrgolub.listas CHARACTER SET "utf8" FIELDS TERMINATED BY ";" ENCLOSED BY "\"" LINES TERMINATED BY "\r\n"');
//          $brojac++;
//          echo $brojac.'<br>';
//        }
    }
}
