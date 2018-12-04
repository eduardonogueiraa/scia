<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create()->each(function($user){
                $user->postagens()->make();
            });

        $password =  Hash::make("admin123"); 
        DB::table('users')->insert(
            ['nome' => 'admin', 'email' => 'admin@admin.com', 'password'=>$password, 'tipo'=>"admin"]);

    }
}
