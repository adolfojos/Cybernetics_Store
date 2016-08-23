<<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' 		=> 'Adolfo',
                'last_name' => 'Suarez',
                'email' 	=> 'adolfojos@gmail.com',
                'user' 		=> 'admin',
                'password' 	=> \Hash::make('123456'),
                'type' 		=> 'admin',
                'active' 	=> 1,
                'address' 	=> 'Manzanita Sector II',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],
            [
                'name' 		=> 'William',
                'last_name' => 'Acuña',
                'email' 	=> 'william@correo.com',
                'user' 		=> 'william',
                'password' 	=> \Hash::make('123456'),
                'type' 		=> 'user',
                'active' 	=> 1,
                'address' 	=> 'Rioclaro 321',
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
            ],

        );

        User::insert($data);
    }
}
