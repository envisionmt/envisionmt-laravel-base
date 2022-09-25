<?php


namespace Database\Seeders;


use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Administrator',
            'email' => 'admin@email.com',
            'email_verified_at' => now(),
            'password' => app('hash')->make('t0ny@2022'),
            'remember_token' => null
        ]);
        $adminRole = Role::where('name', 'admin')->first();
        $admin->roles()->attach($adminRole->id);
        User::factory()
            ->count(10)
            ->create()->each(function ($user) {
                $roles = Role::where('name', 'user')->get()->pluck('id');
                $user->roles()->attach($roles);
            });
    }
}
