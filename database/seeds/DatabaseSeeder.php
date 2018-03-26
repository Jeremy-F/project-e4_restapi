<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DBMSSeeder::class);
        //$this->call(GenerateAllFreqFromZeroTo6GHz::class);
        $this->call(AntennasSeeder::class);
        //$this->call(UsersTableSeeder::class);
    }
}
