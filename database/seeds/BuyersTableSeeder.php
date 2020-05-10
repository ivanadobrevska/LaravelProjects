<?php

use Illuminate\Database\Seeder;

class BuyersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buyers')->insert([
            'name'=>'John Doe',
            'company_name'=>'Brainster',
            'number_of_employees'=>30,
            'phone_number'=>'+38975445566',
            'card_id'=>3
        ]);
    }
}
