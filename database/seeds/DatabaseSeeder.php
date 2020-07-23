<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Brand;
use App\Models\SubCategory;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Admin::class, 1)->create();
        factory(Category::class, 4)->create();

    }
}
