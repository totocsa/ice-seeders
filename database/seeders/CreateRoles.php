<?php

namespace Totocsa\IceSeeders\database\seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Totocsa\AuthorizationGUI\Http\Models\Role;

class CreateRoles extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roles = ['Administrator', 'Translator', 'Developer'];
        $user = new User();

        foreach ($roles as $v) {
            try {
                Role::create(['name' => $v, 'guard_name' => $user->guardName()]);
            } catch (\Throwable $th) {
                echo $th->getMessage() . PHP_EOL;
            }
        }
    }
}
