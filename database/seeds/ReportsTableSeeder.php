<?php

use Illuminate\Database\Seeder;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('reports')->delete();

        $reports = array(
            ['id' => 1, 'location' => 'Bolinao, Pangasinan', 'longitude' => 16.34, 'latitude' => 119.89, 'date' => '2016-11-1', 'observation' => 'SCUBA diving', 'depth' => 2.51, 'time' => '07:31:00', 'sediment' => 'Sandy', 'clarity' => 'Clear', 'type' => ' Enhalus acoroides'],
			['id' => 2, 'location' => 'Nacpan Beach, El Nido, Palawan', 'longitude' => 11.32, 'latitude' => 119.42, 'date' => '2016-11-2', 'observation' => 'Snorkelling', 'depth' => 1.39, 'time' => '12:48:00', 'sediment' => 'Muddy', 'clarity' => 'Turbid', 'type' => 'Thalassia hemprichii']
        );
	
        //// Uncomment the below to run the seeder
        DB::table('reports')->insert($reports);
    }
}
