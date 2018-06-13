<?php

include_once 'CsvImporter.php';

use Illuminate\Database\Seeder;

class KlubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $importer = new CsvImporter(app_path().'/../database/seeds/csv/klubovi.csv',true,';');
        while ($data = $importer->get(2000)) {
          $csvTable = 'klubs';
          DB::table($csvTable)->insert($data);
        }
    }

    
    }
