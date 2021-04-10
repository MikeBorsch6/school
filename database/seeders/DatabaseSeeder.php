<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()
        ->count(1000)
        ->state(new Sequence(
            ['role_id' => 1],
            ['role_id' => 2],
            ['role_id' => 3]
        ))
        ->create();
    }
}
