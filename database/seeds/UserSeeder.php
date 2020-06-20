<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Alexander',
            'email'=> 'estudiante@example.com',
            'password'=>bcrypt('123123123'),
        ]);

        factory( User::class,10)->create();

    }
}
