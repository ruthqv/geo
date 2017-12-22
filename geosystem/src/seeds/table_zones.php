<?php
namespace geo\geosystem;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class table_zones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            \DB::table('zones')->insert(array(
                   'name' => 'Europa',
                   'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
            ));

           \DB::table('zones')->insert(array(
                   'name' => 'North America',
                   'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
            ));

           \DB::table('zones')->insert(array(
                   'name' => 'South America',
                   'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
            ));

             \DB::table('zones')->insert(array(
                   'name' => 'Oceania',
                   'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
            ));    

           \DB::table('zones')->insert(array(
               'name' => 'Asia',
               'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
        ));                 
           \DB::table('zones')->insert(array(
               'name' => 'Afric',
               'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
        ));                 
                
    }
}
