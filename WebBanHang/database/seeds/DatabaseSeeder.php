<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Product;
use App\User;
use App\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        //$this->call(UserSeeder::class);
        //$this->call(ProductSeeder::class);
    }
}

class ProductSeeder extends Seeder{

    public function run(){
        factory(App\Product::class,10)->create();
    }

}

class UserSeeder extends Seeder{
    public function run(){
        factory(App\User::class,10)->create();
    }
}

class CategorySeeder extends Seeder{
    public function run(){
        factory(App\Category::class,3)->create();
    }
}
