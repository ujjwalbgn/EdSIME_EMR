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
                'barcode' => '110'
            ],
            [
                'id' => '11',
                'name' => 'Warfarin 2 mg PO daily at 2100- start day of surgery',
                'type' => 'Scheduled Medication',
                'barcode' => '111'
            ],
            [
                'id' => '12',
                'name' => 'Cefazolin 1GM in 50 mL 0.9% NS IVPB every 8 hours to infuse over 30 min',
                'type' => 'Scheduled Medication',
                'barcode' => '112'
            ],
            [
                'id' => '13',
                'name' => 'Morphine 2 mg IVP every 4 hours PRN pain 8 or greater on 0-10 pain scale',
                'type' => 'PRN Medication',
                'barcode' => '113'
            ],
            [
                'id' => '14',
                'name' => 'Ondansetron 4 mg IVP every 4 hours PRN nausea',
                'type' => 'PRN Medication',
                'barcode' => '114'
            ],
            [
                'id' => '15',
                'name' => 'Saline lock; Flush saline lock with 0.9 % NS every 8 hours per protocol',
                'type' => 'Scheduled Medication',
                'barcode' => '115'
            ],
            [
                'id' => '16',
                'name' => '0.9% NS for IVPB medication administration only',
                'type' => 'Scheduled Medication',
                'barcode' => '116'
            ],
            [
                'id' => '17',
                'name' => 'Humulin N (NPH) insulin 8 units SubCut daily at 0800',
                'type' => 'Scheduled Medication',
                'barcode' => '117'
            ],
            [
                'id' => '18',
                'name' => 'Ceftazidime 1GM in 50 mL NS IVPB every 8 hours to infuse over 1 hour',
                'type' => 'Scheduled Medication',
                'barcode' => '118'
            ],
            [
                'id' => '19',
                'name' => 'Regular Humulin insulin per sliding scale',
                'type' => 'PRN Medication',
                'barcode' => '119'
            ],
            [
                'id' => '20',
                'name' => 'Acetaminophen 325mg/Oxycodone 5mg  1 tab PO every 4 hours PRN pain 6 or greater on 0-10 pain scale',
                'type' => 'PRN Medication',
                'barcode' => '120'
            ],
        ]);
    }
}
