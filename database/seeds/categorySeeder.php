<?php

use Illuminate\Database\Seeder;
use App\category;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new category();
        $category->name = 'Sports';
        $category->save();

        $category = new category();
        $category->name = 'Societies';
        $category->save();
    }
}
