<?php

use Illuminate\Database\Seeder;

class DBMSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < (127*2); $i++){
            App\DBM::create([
                "value" => ($i - 127)
            ]);
        }
    }
}
