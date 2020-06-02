<?php

use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        $notes=[
            [
                'title' =>$faker->text(20),
                'description' =>$faker->text(100),
                'price' =>33,
                'user_id' =>1,
                'lecture_id' =>1,
                'department_id' =>2,
                'teacher_id'=>1,
            ],
            [
                'title' =>$faker->text(20),
                'description' =>$faker->text(100),
                'price' =>35,
                'user_id' =>1,
                'lecture_id' =>1,
                'department_id' =>1,
                'teacher_id'=>1,

            ]
        ];
        DB::table('notes')->insert($notes);

    }
}
