<?php

include_once 'CsvImporter.php';

use Illuminate\Database\Seeder;

class GolubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $importer = new CsvImporter(app_path().'/../database/seeds/csv/golubovi.csv',true,';');
        while ($data = $importer->get(2000)) {
          $csvTable = 'golubs';
          DB::table($csvTable)->insert($data);
        }
                

//        $csvFilename = app_path().'/../database/seeds/csv/golubovi.csv';
//        
//        $seedData = $this->seedFromCSV($csvFilename,';');
//        $csvTable = 'golubs';
//        DB::table($csvTable)->insert($seedData);
    }
    
    }
