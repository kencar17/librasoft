<?php

use Illuminate\Database\Seeder;
use Kodeine\Acl\Models\Eloquent\Permission;

class Permissions_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = new Permission();

        $permission->create([
            'name' => 'user',
            'slug' => [
                'create'    => true,
                'view'      => true,
                'update'    => true,
                'delete'    => true
            ],
            'description'   => 'manage user permissions'
        ]);

        $permission->create([
            'name' => 'goal',
            'slug' => [
                'create'    => true,
                'view'      => true,
                'update'    => true,
                'delete'    => true
            ],
            'description'   => 'manage goal permissions'
        ]);

        $permission->create([
            'name' => 'objective',
            'slug' => [
                'create'    => true,
                'view'      => true,
                'update'    => true,
                'delete'    => true
            ],
            'description'   => 'manage objective permissions'
        ]);

        $permission->create([
            'name' => 'action',
            'slug' => [
                'create'    => true,
                'view'      => true,
                'update'    => true,
                'delete'    => true
            ],
            'description'   => 'manage action permissions'
        ]);

        $permission->create([
            'name' => 'task',
            'slug' => [
                'create'    => true,
                'view'      => true,
                'update'    => true,
                'delete'    => true
            ],
            'description'   => 'manage task permissions'
        ]);

        $permission->create([
            'name' => 'mywork',
            'slug' => [
                'create'    => true,
                'view'      => true,
                'update'    => true,
                'delete'    => true
            ],
            'description'   => 'manage myWork permissions'
        ]);

        $permission->create([
            'name' => 'admin',
            'slug' => [
                'create'    => true,
                'view'      => true,
                'update'    => true,
                'delete'    => true
            ],
            'description'   => 'manage admin permissions'
        ]);
    }
}
