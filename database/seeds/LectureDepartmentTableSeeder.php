<?php

use Illuminate\Database\Seeder;

class LectureDepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lecture_department=[
            [
                'lecture_id' =>1,
                'department_id'=>1
            ],
            [
                'lecture_id' =>1,
                'department_id'=>2
            ],
        ];
        DB::table('lecture_departments')->insert($lecture_department);

    }
}
