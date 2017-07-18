<?php

use App\User;
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
        $table = DB::table('users');
        $table->delete();;

        $user = factory(User::class)->create();

        $this->command->info("User: {$user->email}");
        $this->command->info("Password: secret");
    }
}
