<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $first_name = ['Ema', 'Ivana'];
        $last_name = ['Jovanovska','Vidanovska'];
        $phone_number = ['075256423', '0705555555'];
        $country = ['Macedonia', 'Macedonia'];
        $street_address = ['Partizanska BB', 'Metodi Mitevski'];
        $city = ['Skopje', 'Veles'];
        $state = ['Macedonia', 'Macedonia'];
        $zip = ['1000', '1000'];
        $email = ['ema.jovanovska@yahoo.com', 'ivana@yahoo.com'];
        $password = ['passema', 'passivana'];

        for ($i = 0; $i < 2; $i++) {
            DB::table('users')->insert([
                'first_name' => $first_name[$i],
                'last_name' => $last_name[$i],
                'phone_number' => $phone_number[$i],
                'country' => $country[$i],
                'street_address' => $street_address[$i],
                'city' => $city[$i],
                'state' => $state[$i],
                'zip' => $zip[$i],
                'email' => $email[$i],
                'password' => $password[$i]
    ]);
    }
}
}