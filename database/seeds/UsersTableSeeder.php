<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create();
        foreach(range(0,10) as $i){
            DB::table('siswa')->insert([
                'firstname' => $faker->name,
                'lastname' => $faker->name,
                'gender' => $faker->randomElement($array = array ('Pria', 'Wanita')) ,
                'alamat' => $faker->address
            ]);
        }
    }
}
