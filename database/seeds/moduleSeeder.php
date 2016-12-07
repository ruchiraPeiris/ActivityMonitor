<?php

use Illuminate\Database\Seeder;
use App\module;

class moduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $module = new module();
        $module->name = "Football";
        $module->cat_id = 1;
        $module->save();

        $module = new module();
        $module->name = "Cricket";
        $module->cat_id = 1;
        $module->save();

        $module = new module();
        $module->name = "Rotaract";
        $module->cat_id = 2;
        $module->save();

        $module = new module();
        $module->name = "Aiesec";
        $module->cat_id = 2;
        $module->save();


    }
}
