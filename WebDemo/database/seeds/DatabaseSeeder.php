<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserSeeder::class);
        //$this->call(UserSeeder::class);
        //$this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(SlideSeeder::class);
        $this->call(CommentSeeder::class);

    }
}

class UserSeeder extends Seeder{
    public function run()
    {
        factory(App\User::class, 50)->create();
    }

}

class CategorySeeder extends Seeder{
    public function run()
    {
        factory(App\Category::class, 50)->create();
    }

}

class ProductSeeder extends Seeder{
    public function run()
    {
        factory(App\Product::class, 50)->create();
    }

}

class SlideSeeder extends Seeder{
    public function run()
    {
        factory(App\Slide::class, 50)->create();
    }

}

class CommentSeeder extends Seeder{
    public function run()
    {
        factory(App\Comment::class, 50)->create();
    }

}

