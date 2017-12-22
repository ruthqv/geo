<?php
namespace geo\geosystem;

use Illuminate\Database\Seeder;

class GeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(table_zones::class);
        $this->call(table_countries::class);
        $this->call(table_regions::class);
        $this->call(table_subregions::class);

    }
}
