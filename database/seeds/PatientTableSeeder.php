<?php

use Illuminate\Database\Seeder;

class PatientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            [
                'id'=>'1',
                'name'=>'Emma Hill',
                'level'=> '2',
                'barcode'=> '547266',
            ],
            [
                'id'=>'2',
                'name'=>'Randy Adams',
                'level'=> '2',
                'barcode'=> '316574',
            ]
        ]);
    }
}
