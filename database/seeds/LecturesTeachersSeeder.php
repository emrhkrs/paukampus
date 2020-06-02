<?php

use Illuminate\Database\Seeder;

class LecturesTeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lectures_teachers=[
            [
                'lecture_id' =>1,
                'teacher_id'=>1
            ],

        ];
        DB::table('lectures_teachers')->insert($lectures_teachers);
    }
}
