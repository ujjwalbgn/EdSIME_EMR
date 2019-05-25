<?php

use Illuminate\Database\Seeder;

class MedicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medications')->insert([
            [
                'id' => '1',
                'name' => 'Multivitamin tab 1 PO Daily' ,
                'type' => 'Scheduled Medication',
                'barcode' => '101'
            ],
            [
                'id' => '2',
                'name' => 'Enoxaparin 40 mg SubCut daily',
                'type' => 'Scheduled Medication',
                'barcode' => '102'
            ],
            [
                'id' => '3',
                'name' => '0.9% Sodium Chloride IV at 75mL/hr',
                'type' => 'Scheduled Medication',
                'barcode' => '103'
            ],
            [
                'id' => '4',
                'name' => 'Benazepril 10 mg PO BIO',
                'type' => 'Scheduled Medication',
                'barcode' => '104'
            ],
            [
                'id' => '5',
                'name' => 'Acetaminophen 500 mg PO every 4 hour PRN Pain less than or equal to 4 on 0-10 pain scale',
                'type' => 'PRN Medication',
                'barcode' => '105'
            ],
            [
                'id' => '6',
                'name' => 'Acetaminophen 500 mg / Hydrocodone 5mg 1 tablet PO every 4 hour PRN pain 5 to 7 on a 0-10 pain scale',
                'type' => 'PRN Medication',
                'barcode' => '106'
            ],
            [
                'id' => '7',
                'name' => 'IV saline lock; Flush with 0.9% NS every 8 hours per protocol',
                'type' => 'Scheduled Medication',
                'barcode' => '107'
            ],
            [
                'id' => '8',
                'name' => 'Acetaminophen 650 mg PO every 4 hours PRN pain 4 or less on 0-10 pain scale',
                'type' => 'PRN Medication',
                'barcode' => '108'
            ],
            [
                'id' => '9',
                'name' => 'Imitrex 100 mg PO BID PRN for migraine- May use own Imitrex for migraine if needed',
                'type' => 'PRN Medication',
                'barcode' => '109'
            ],
            [
                'id' => '10',
                'name' => 'Lorazepam 4 mg IVP, given at 2 mg per minute- Give 1 dose for
                           seizure activity PRN and notify HCP immediately for any change in condition',
                'type' => 'PRN Medication',
                'barcode' => '1010'
            ],
        ]);
    }
}
