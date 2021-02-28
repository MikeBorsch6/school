<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(780)->create();
        
        $roles = [
            'student',
            'teacher',
            'admin'
        ];

        foreach($roles as $role)
        {
            Role::factory()
                ->create(
                        [
                            'name' => $role
                        ]
                    );
        }
    }
}
