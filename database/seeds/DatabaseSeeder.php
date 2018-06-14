<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SezonasTableSeeder::class);
        $this->call(KlubsTableSeeder::class);
        $this->call(GolubsTableSeeder::class);
        $this->call(UzgajivacsTableSeeder::class);
        $this->call(LetnaUdrugasTableSeeder::class);
        $this->call(PrijavaUzgajivacsTableSeeder::class);
        $this->call(PrijavaGolubsTableSeeder::class);
        $this->call(ListasTableSeeder::class);
    }
}
