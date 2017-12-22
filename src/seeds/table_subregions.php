<?php
namespace geo\geosystem;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class table_subregions extends Seeder
{
    public function run()
    {

// madrid
       DB::table('subregions')->insert([
            'name' => 'Madrid',
            'region_id' => 1,
        ]);  

// bcn

       DB::table('subregions')->insert([
            'name' => 'Barcelona',
            'region_id' => 2,
        ]);  

       DB::table('subregions')->insert([
            'name' => 'Tarragona',
            'region_id' => 2,
        ]);  

       DB::table('subregions')->insert([
            'name' => 'Lerida',
            'region_id' => 2,
        ]);  
       DB::table('subregions')->insert([
            'name' => 'Gerona',
            'region_id' => 2,
        ]);  

// Galicia
       DB::table('subregions')->insert([
            'name' => 'A Coruña',
            'region_id' => 3,
        ]);                 
       DB::table('subregions')->insert([
            'name' => 'Lugo',
            'region_id' => 3,
        ]); 

       DB::table('subregions')->insert([
            'name' => 'Orense',
            'region_id' => 3,
        ]); 
       DB::table('subregions')->insert([
            'name' => 'Pontevedra',
            'region_id' => 3,
        ]); 

// ccmancha

       DB::table('subregions')->insert([
            'name' => 'Toledo',
            'region_id' => 4,
        ]);                 
       DB::table('subregions')->insert([
            'name' => 'Ciudad Real',
            'region_id' => 4,
        ]); 

       DB::table('subregions')->insert([
            'name' => 'Cuenca',
            'region_id' => 4,
        ]); 
       DB::table('subregions')->insert([
            'name' => 'Albacete',
            'region_id' => 4,
        ]); 
   
// andalucia

       DB::table('subregions')->insert([
            'name' => 'Jaen',
            'region_id' => 5,
        ]);                 
       DB::table('subregions')->insert([
            'name' => 'Cordoba',
            'region_id' => 5,
        ]); 

       DB::table('subregions')->insert([
            'name' => 'Sevilla',
            'region_id' => 5,
        ]); 
       DB::table('subregions')->insert([
            'name' => 'Huelva',
            'region_id' => 5,
        ]); 

       DB::table('subregions')->insert([
            'name' => 'Cadiz',
            'region_id' => 5,
        ]);                 
       DB::table('subregions')->insert([
            'name' => 'Malaga',
            'region_id' => 5,
        ]); 

       DB::table('subregions')->insert([
            'name' => 'Granada',
            'region_id' => 5,
        ]); 
       DB::table('subregions')->insert([
            'name' => 'Almeria',
            'region_id' => 5,
        ]); 


// ccLeon
       DB::table('subregions')->insert([
            'name' => 'Leon',
            'region_id' => 6,
        ]);                 
       DB::table('subregions')->insert([
            'name' => 'Zamora',
            'region_id' => 6,
        ]); 

       DB::table('subregions')->insert([
            'name' => 'Salamanca',
            'region_id' => 6,
        ]); 
       DB::table('subregions')->insert([
            'name' => 'Avila',
            'region_id' => 6,
        ]); 

       DB::table('subregions')->insert([
            'name' => 'Valladolid',
            'region_id' => 6,
        ]);                 
       DB::table('subregions')->insert([
            'name' => 'Palencia',
            'region_id' => 6,
        ]); 

       DB::table('subregions')->insert([
            'name' => 'Burgos',
            'region_id' => 6,
        ]); 
       DB::table('subregions')->insert([
            'name' => 'Soria',
            'region_id' => 6,
        ]); 
        DB::table('subregions')->insert([
            'name' => 'Segovia',
            'region_id' => 6,
        ]); 
       DB::table('subregions')->insert([
            'name' => 'Guadalajara',
            'region_id' => 6,
        ]);
// Extremadura

        DB::table('subregions')->insert([
            'name' => 'Caceres',
            'region_id' => 7,
        ]); 
       DB::table('subregions')->insert([
            'name' => 'Badajoz',
            'region_id' => 7,
        ]);

// Asturias
        DB::table('subregions')->insert([
            'name' => 'Asturias',
            'region_id' => 8,
        ]);
// Vasco

        DB::table('subregions')->insert([
            'name' => 'Alava',
            'region_id' => 9,
        ]); 
       DB::table('subregions')->insert([
            'name' => 'Vizcaya',
            'region_id' => 9,
        ]);

        DB::table('subregions')->insert([
            'name' => 'Vitoria',
            'region_id' => 9,
        ]);


// Valencia
        DB::table('subregions')->insert([
            'name' => 'Castellon',
            'region_id' => 10,
        ]); 
       DB::table('subregions')->insert([
            'name' => 'Valencia',
            'region_id' => 10,
        ]);

        DB::table('subregions')->insert([
            'name' => 'Alicante',
            'region_id' => 10,
        ]);

// Murcia
        DB::table('subregions')->insert([
            'name' => 'Murcia',
            'region_id' => 11,
        ]);
// Aragon
       DB::table('subregions')->insert([
            'name' => 'Huesca',
            'region_id' => 12,
        ]); 
       DB::table('subregions')->insert([
            'name' => 'Zaragoza',
            'region_id' => 12,
        ]);

        DB::table('subregions')->insert([
            'name' => 'Teruel',
            'region_id' => 12,
        ]);

// Cantabria
         DB::table('subregions')->insert([
            'name' => 'Cantabria',
            'region_id' => 13,
        ]);       
// Rioja
        DB::table('subregions')->insert([
            'name' => 'Rioja',
            'region_id' => 14,
        ]);

// Navarra

        DB::table('subregions')->insert([
            'name' => 'Navarra',
            'region_id' => 15,
        ]);




    }

}
