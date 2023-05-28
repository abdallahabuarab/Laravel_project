<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $collection = collect([
            User::class,
            Product::class,
            Category::class,
            Brand::class
        ]);


        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $data = [];
        foreach ($collection as $col) {
            $name =  Str::plural(Str::snake(class_basename($col)));

           $rr = [[
                'name' => "view $name",
                "groupe" => $name,
            ],
            [
                'name' => "edit $name",
                "groupe" => $name,
            ],
            [
                'name' => "create $name",
                "groupe" => $name,
            ],
            [
                'name' => "delete $name",
                "groupe" => $name,
            ]];
            $data = array_merge_recursive($data , $rr);
        }

        Permission::insert($data);
        $admin =  Role::create(['name' => 'admin']);

        $admin->givePermissionTo(Permission::all()->pluck('name')->toArray());
    }
}
