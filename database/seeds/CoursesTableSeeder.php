<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert(
            array(
                array('name' => 'Curso 1',
                'order' => '1',
                'register_date' => Carbon::parse('2016-01-01'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            )));

        DB::table('courses')->insert(
            array(
                array('name' => 'Curso 2',
                'order' => '2',
                'register_date' => Carbon::parse('2016-03-04'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            )));

        DB::table('courses')->insert(
            array(
                array('name' => 'Curso 3',
                'order' => '3',
                'register_date' => Carbon::parse('2016-06-08'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            )));

        DB::table('courses')->insert(
            array(
                array('name' => 'Curso 4',
                'order' => '4',
                'register_date' => Carbon::parse('2016-10-09'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            )));
    }
}
