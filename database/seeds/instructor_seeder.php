<?php

use Illuminate\Database\Seeder;
use App\instructor;

class instructor_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instructor = new instructor();
        $instructor->firstname = "kamal";
        $instructor->lastname = "perera";
        $instructor->email = "kamal@gmail.com";
        $instructor->category_id = 1;
        $instructor->module_id = 1;
        $instructor->save();

        $instructor = new instructor();
        $instructor->firstname = "amal";
        $instructor->lastname = "wasantha";
        $instructor->email = "amal@gmail.com";
        $instructor->category_id = 1;
        $instructor->module_id = 2;
        $instructor->save();

        $instructor = new instructor();
        $instructor->firstname = "nimal";
        $instructor->lastname = "hettiarachchi";
        $instructor->email = "nimal@gmail.com";
        $instructor->category_id = 2;
        $instructor->module_id = 1;
        $instructor->save();

        $instructor = new instructor();
        $instructor->firstname = "shehan";
        $instructor->lastname = "devinda";
        $instructor->email = "shehan@gmail.com";
        $instructor->category_id = 2;
        $instructor->module_id = 2;
        $instructor->save();
    }
}
