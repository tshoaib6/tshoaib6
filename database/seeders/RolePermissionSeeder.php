<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;

use App\Models\User;




class RolePermissionSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt       = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();
        $permissions = [

            [
                'group_name' => 'dashboard',
                'permissions' => [
                    'dashboard.view',
                ]
            ],
            [
                'group_name' => 'UserManagement',
                'permissions' => [
                    // User Permissions
                    'user.create',
                    'user.view',
                    'user.edit',
                    'user.delete',
                ]
            ],
            [
                'group_name' => 'YCM',
                'permissions' => [
                    // admin Permissions
                    'YCM.create',
                    'YCM.view',
                    'YCM.edit',
                    'YCM.delete',
                ]
            ],
            [
                'group_name' => 'role',
                'permissions' => [
                    // role Permissions
                    'role.create',
                    'role.view',
                    'role.edit',
                    'role.delete',
                    'role.approve',
                ]
            ],
            [
                'group_name' => 'salary',
                'permissions' => [
                    // profile Permissions
                    'salary.view',
                    'salary.edit',
                    'salary.delete',
                    'salary.add',

                ]
            ],

            [
                'group_name' => 'contract',
                'permissions' => [
                    // profile Permissions
                    'contract.view',
                    'contract.edit',
                    'contract.delete',
                    'contract.offer',

                ]
            ],


            [
                'group_name' => 'profile',
                'permissions' => [
                    // profile Permissions
                    'profile.view',
                    'profile.edit',
                ]
            ],
        ];

        $roleSuperAdmin = Role::create(['name' => 'superadmin', 'guard_name' => 'admin']);

        for ($i = 0; $i < count($permissions); $i++) {
            $permissionGroup = $permissions[$i]['group_name'];
            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                // Create Permission
                $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j], 'group_name' => $permissionGroup, 'guard_name' => 'admin']);
                $roleSuperAdmin->givePermissionTo($permission);
                $permission->assignRole($roleSuperAdmin);

            }
        }



        $user = User::where('email', 'superadmin@gmail.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name = "Minhaj";
            $user->email = "admin@gmail.com";
            $user->password = Hash::make('Allahis1');
            $user->join_date    = $todayDate;
            $user->save();
        }

        $admin = User::where('email', 'admin@gmail.com')->first();
        if ($admin) {
            $admin->assignRole($roleSuperAdmin);
        }

    }

}
