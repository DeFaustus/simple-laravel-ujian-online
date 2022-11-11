<?php

namespace Database\Seeders;

use App\Models\DataUser;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        DataUser::factory(1)->create();
        // admin role
        $role = Role::create(['name' => 'ADMIN']);
        $permission = Permission::create(['name'   => 'can admin']);
        $role->givePermissionTo($permission);
        $permission->assignRole($role);
        // admin finish

        // role guru
        $role = Role::create(['name' => 'GURU']);
        $permission = Permission::create(['name'   => 'can guru']);
        $role->givePermissionTo($permission);
        $permission->assignRole($role);
        // guru finish

        // role siswa
        $role = Role::create(['name' => 'SISWA']);
        $permission = Permission::create(['name'   => 'can siswa']);
        $role->givePermissionTo($permission);
        $permission->assignRole($role);
        // siswa finish
        $user = User::find(1);
        $user->assignRole("ADMIN");
        ////////////////////

        $this->call([
            MapelSeeder::class,
            KelasSeeder::class,
            GuruMuridSeeder::class,
            SoalSeeder::class
        ]);
    }
}
